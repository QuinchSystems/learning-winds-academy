<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CoursePurchasedMail extends Mailable
{
    protected $studentName = null;
    protected $courseName = null;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($studentName, $courseName)
    {
        $this->studentName = $studentName;
        $this->courseName = $courseName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.course_purcahsed', [
            'studentName' => $this->studentName,
            'courseName' => $this->courseName,
        ]);
    }
}
