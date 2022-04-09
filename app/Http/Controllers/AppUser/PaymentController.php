<?php

namespace App\Http\Controllers\AppUser;

use App\AppUser;
use App\Constant;
use App\Course;
use App\Helpers\MoodleClient;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Tzsk\Payu\Facade\Payment;

class PaymentController extends Controller
{
    public function payment(Course $course, Request $request)
    {
        $request->validate([
            'phone' => ['required', 'digits:10']
        ]);

        $user = auth('app_users')->user();
        $txnId = Str::random(10);

        $order = Order::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'amount' => $course->price,
            'phone' => $request->phone,
            'payment_method' => Constant::PAYMENT_METHOD_PAYU,
            'txnid' => $txnId,
        ]);

        $attributes = [
            'txnid' => $txnId,
            'amount' => $course->price,
            'productinfo' => $course->display_name,
            'firstname' => $user->first_name,
            'email' => $user->email,
            'phone' => $request->phone,
            Constant::PAYU_APP_USER_IDENTIFER => $user->id,
            Constant::PAYU_COURSE_IDENTIFIER => $course->id
        ];

        return Payment::with($order)->make($attributes, function ($then) {
            $then->redirectRoute('app.payment.status');
        });
    }

    public function status(Request $request)
    {
        if (!Session::get('tzsk_payu_data')) return response()->json(['message' => 'Invalid request'], 400);
        $payment = Payment::capture();

        if ($payment->isCaptured()) {
            $data = $payment->getData();
            $courseId = $payment->get(Constant::PAYU_COURSE_IDENTIFIER);
            $userId = $payment->get(Constant::PAYU_APP_USER_IDENTIFER);

            $course = Course::find($courseId);
            $user = AppUser::find($userId);

            $this->enrolMoodleUser($user, $course);

            return redirect()->route('app.profile')->withSuccess("{$course->display_name} has been successfully enrolled");
        } else {
            $data = $payment->getData();
            $courseId = $payment->get(Constant::PAYU_COURSE_IDENTIFIER);
            return redirect()->route("course", $courseId)->withError("Payment failed please try again.");
        }
    }

    public function enrolMoodleUser(AppUser $user, Course $course)
    {
        $enrolments = [
            "enrolments" => [
                [
                    "roleid" => Constant::MOODLE_ROLE_STUDENT,
                    "userid" => $user->m_userid,
                    "courseid" => $course->m_course_id,
                ]
            ],
        ];

        try {
            MoodleClient::create()->assignMoodleCourse($enrolments);
            $user->courses()->attach($course);
            return response()->json(null);
        } catch (\Exception $e) {
            return response()->json(["message" => "Something went wrong"], 422);
        }
    }
}
