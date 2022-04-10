@component('mail::message')
# Course Purchased

Dear {{$studentName}},

Thank you very much for signing up for the {{$courseName}}.

Your login credentials to the course module are the same as the credentials your used while signing up

Our Founders at Learning Winds Academy believe that learning is a life-long journey in which individuals succeed if they have access to high-quality knowledge and guidance from domain experts with global experiences.

Our mission is to use technology to make a positive difference in the learning experience for all professionals who want to improve their skills for a better future. We sincerely appreciate your partnership because it motivates us to continue improving our offerings and adding value to the learning journeys of all of our customers.

All the best!

@component('mail::button', ['url' => route('welcome')])
Visit website
@endcomponent

Regards,<br>
B. R. SHENOY
@endcomponent
