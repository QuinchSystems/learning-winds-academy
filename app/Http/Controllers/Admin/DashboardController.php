<?php

namespace App\Http\Controllers\Admin;

use App\AppUser;
use App\Category;
use App\Course;
use App\Helpers\MoodleClient;
use App\Http\Controllers\Controller;
use App\Order;
use App\Traits\Analytics;
use Illuminate\Http\Request;
use Tzsk\Payu\Model\PayuPayment;
class DashboardController extends Controller
{
    use Analytics;

    public function index()
    {
        // course count
        $coursesCount = Course::count();
        $usersCount = AppUser::count();
        $categoriesCount = Category::count();

        $courseVsStudentChartData = $this->getCourseVsStudentChartJsData();

        $revenue = $this->revenue();
        $coursePurchases = $this->coursePurchases();

        $totalSales = PayuPayment::whereStatus(Order::PAYMENT_COMPLETED)->sum('amount');
        return view('admin.dashboard', compact('coursesCount', 'usersCount', 'categoriesCount', 'totalSales', 'revenue', 'coursePurchases', 'courseVsStudentChartData'));
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function changePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = auth()->user();

        if (!password_verify($validated['current_password'], $user->password)) {
            return redirect()->back()->withError('Current password does not matched');
        }

        $user->password = bcrypt($validated['password']);
        $user->save();

        return redirect()->route('admin.settings')->withSuccess('Password changed');
    }

    public function fetchAllMoodleUsers()
    {
        try {
            $moodleUsers = MoodleClient::create()->fetchAllUsers();

            foreach ($moodleUsers as $moodleUser) {
                $user = AppUser::whereEmail($moodleUser->email)->first();

                if (!$user) {
                    $user = new AppUser();
                    $user->m_userid =  $moodleUser->id;
                    $user->username = $moodleUser->username;
                    $user->first_name = $moodleUser->firstname;
                    $user->last_name = $moodleUser->lastname;
                    $user->email = $moodleUser->email;
                    $user->password = bcrypt('123456');
                    $user->save();
                } else {
                    $user->m_userid = $moodleUser->id;
                    $user->username = $moodleUser->username;
                    $user->first_name = $moodleUser->firstname;
                    $user->last_name = $moodleUser->lastname;
                    $user->email = $moodleUser->email;
                    $user->save();
                }
            }

            return AppUser::all();
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function salesChartJsData($filterBy)
    {
        switch ($filterBy) {
            case 'daily':
                return $this->getDailySalesChartData();
            case 'weekly':
                return $this->getWeeklySalesChartData();
            case 'monthly':
                return $this->getMonthlySalesChartData();
            default:
                throw new \Exception("Invalid filterBy value");
        }
    }

    // TODO: Use this function to get moodle user token
    /* public static function getMoodleToken()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', config('services.moodle.url') . '/login/token.php', [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'query' => [
                'username' => config('services.moodle.username'),
                'password' => config('services.moodle.password'),
                'service' => config('services.moodle.service'),
            ]
        ]);

        $body = json_decode($response->getBody());
        return $body->token;
    } */
}
