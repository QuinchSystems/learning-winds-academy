@extends('layouts.app')

@section('title', 'About Us')

@section('hero')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li>@yield('title')</li>
        </ol>
        <h2>@yield('title')</h2>
    </div>
</section>
@endsection

@section('content')

<section style="background: #23142b;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-white">
                <h4 class="mb-3">We provide online/on-demand courses across various domains.</h4>
                <h4 class="mb-3">Specially designed by renowned faculties from prestigious institutes, the courses are
                    perfect for all professionals.</h4>
                <h4 class="mb-3">Customise your knowledge, upgrade your skills and validate your learning with
                    certification.</h4>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="{{ asset('app-dependencies/assets/img/about.jpeg') }}" alt="About Us" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-12 text-center text-lg-start">
                <h2>Let Numbers talk</h2>
            </div>
            <div class="col-lg-3 col-12 d-flex flex-column align-items-center justify-content-center text-center">
                <h2 class="fw-bold"><span class="course-count">{{ $courseCount }}</span>+</h2>
                <div>Courses</div>
            </div>
            <div class="col-lg-3 col-12 d-flex flex-column align-items-center justify-content-center text-center">
                <h2 class="fw-bold"><div class="instructor-count">30</div></h2>
                <div>Instructors</div>
            </div>
            <div class="col-lg-3 col-12 d-flex flex-column align-items-center justify-content-center text-center">
                <h2 class="fw-bold"><span class="student-count">{{ $studentCount }}</span>+</h2>
                <div>Students</div>
            </div>
        </div>
    </div>
</section>

<section class="section py-5 my-3" style="background: #007499; color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h2 class="fs-1 fw-bold text-uppercase">Our Purpose</h2>
            </div>
            <div class="col-lg-9 col-12">
                <ul class="icon fs-5">
                    <li>
                        <i class="fas fa-check-circle me-3"></i>
                        <span>Empower Inquisitive Minds to access world class knowledge from practitioners and academics
                            at affordable costs</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle me-3"></i>
                        <span>Utilize technology to create a positive change in the learning experience</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle me-3"></i>
                        <span>Enable learners to develop capabilities to succeed in a highly competitive world</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle me-3"></i>
                        <span>Discover, implement and share global best practices in an authentic learning
                            environment</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle me-3"></i>
                        <span>Develop requisite skills and capabilities for the workplace of the future</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section py-5 my-3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-5 fw-bold">Meet The Team</h2>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-2">
                <img src="{{ asset('app-dependencies/assets/img/jain-dipak-e1619115859488.jpg') }}" alt="Jain Dipak"
                    class="img-fluid img-thumbnail rounded-circle">
            </div>
            <div class="col-10">
                <h4>Dr. Dipak C. Jain</h4>
                <h5 class="text-primary">Founder</h5>
                <p>Dr. Dipak C. Jain is currently the President (European) and Professor of Marketing at the China
                    Europe International Business School (CEIBS) in Shanghai, China. Prior to this, he served as the
                    Director of Sasin Graduate Institute of Business Administration of Chulalongkorn University,
                    Thailand. He has also served as the Dean of INSEAD, an International Business School with campuses
                    in France, Singapore and Abu Dhabi. Before joining INSEAD, Dr. Jain was the Dean of Northwestern
                    University’s Kellogg School of Management.</p>
                <p>An award-winning scholar in his own right, Dr. Jain has published around 70 articles in leading
                    academic journals and has earned the prestigious John D.C. Little Best Paper Award. He currently
                    serves as an Independent Director on the boards of John Deere & Company (USA) and Reliance
                    Industries (India). In the past, he has served as a Consultant to firms like Microsoft, Novartis,
                    American Express, Sony, Nissan, Eli Lilly and Hyatt International.</p>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-10">
                <h4>Prof. Nandu Nandkishore</h4>
                <h5 class="text-primary">Founder</h5>
                <p>Prof. Nandkishore retired as the EVP & Head of Asia, Oceania & Africa at Nestle S.A.. Earlier he was
                    the Global CEO, Nestlé Nutrition and the first Asian on the Global Executive Board of the 150 year
                    old Swiss multinational. He now is the Professor of practice for Marketing Strategy at the Indian
                    School of Business (ISB) and also teaches at London Business School. Prof. Nandkishore, fondly known
                    as Nandu, is an Inspirational Leader, Venture Capitalist, Marketing & Strategy Guru and a Global
                    C-suite Executive with over 40 years of global experience in Leadership roles across a diverse set
                    of environments in both emerging and developed markets. He is extremely passionate about teaching
                    and has several interesting lectures on YouTube under his channel, ‘Insights with Nandu’ which has
                    garnered an excellent response amongst entrepreneurs, students as well as professionals. Nandu is
                    actively involved in using his expertise and experience to help guide companies and people through
                    this fast-changing world.</p>
            </div>
            <div class="col-2">
                <img src="{{ asset('app-dependencies/assets/img/NanduNandkishore_s.jpeg') }}" alt="Nandu Nand Kishore"
                    class="img-fluid img-thumbnail rounded-circle">
            </div>
        </div>
        <div class="row my-5">
            <div class="col-2">
                <img src="{{ asset('app-dependencies/assets/img/Siddharth-Singh-2-352x234-1-e1619115840320.jpeg') }}"
                    alt="Siddharth Shekhar Singh" class="img-fluid img-thumbnail rounded-circle">
            </div>
            <div class="col-10">
                <h4>Dr. Siddharth Shekhar Singh</h4>
                <h5 class="text-primary">Advisor</h5>
                <p>Dr. Siddharth Shekhar Singh is Associate Dean of Digital Transformation, e-Learning and Marketing,
                    and Associate Professor of Marketing at the Indian School of Business (ISB), Hyderabad and Mohali,
                    India. Earlier he served as Senior Associate Dean, Associate Dean, and the first Director of the
                    Doctoral program at ISB. He is a member of the Board of Directors of DLabs, a technology business
                    incubator of ISB. He also serves as an Independent Director on the Board of Directors of Petronet
                    LNG Limited and International Schools of Business Management (ISBM—a UK based charity). Dr. Singh
                    has a Ph.D. (Marketing) from the J. L. Kellogg School of Management, Northwestern University (USA),
                    an MBA (Marketing and Finance) from the University of Illinois at Urbana-Champaign (USA), and a B.
                    Tech. (Electronics & Communications Engineering) from the Indian Institute of Technology, Banaras
                    Hindu University (India).</p>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-10">
                <h4>Raghavendra Shenoy</h4>
                <h5 class="text-primary">Co-Founder</h5>
                <p>Raghavendra (Raghu) Shenoy has over three decades of experience in healthcare and FMCG having worked
                    in India & Neighboring markets as well as Taiwan. Raghu has honed his skills in the areas of New
                    Business Development, Multi-level stakeholder management, innovative business modelling as well as
                    cross-functional leadership. He’s extremely passionate about teaching and mentoring young leaders.
                    He last held the position of Managing Director for Johnson & Johnson Medical India. Raghu is an
                    alumnus of IMD, Lausanne and NMIMS, Mumbai.</p>
            </div>
            <div class="col-2">
                <img src="{{ asset('app-dependencies/assets/img/Raghavendra_Shenoy.jpeg') }}" alt="Raghavendra Shenoy"
                    class="img-fluid img-thumbnail rounded-circle">
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')
<script>
const studentCount = {{ $studentCount }};
const courseCount = {{ $courseCount }};
</script>
<script src="{{ asset('app-dependencies/assets/js/about.js') }}?version={{ App\Constant::APP_VERSION }}"></script>
@endpush
