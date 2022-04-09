@extends('layouts.app')

@section('content')
<div class="feature-overview py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <ul class="icon">
                    <li>
                        <span class="circle me-2">
                            <i class="fa fa-check"></i>
                        </span>
                        <span>Are you at the crossroads of your career?</span>
                    </li>
                    <li>
                        <span class="circle me-2">
                            <i class="fa fa-check"></i>
                        </span>
                        <span>Do you want to stand out in a fiercely competitive world?</span>
                    </li>
                </ul>
                <p class="my-5">
                    If your answer is YES, then look no further.
                </p>
            </div>
            <div class="col-lg-6 col-12">
                <ul class="icon">
                    <li>
                        <span class="circle me-2">
                            <i class="fa fa-check"></i>
                        </span>
                        <span class="text-uppercase">Earn your certificate at this online academy</span>
                    </li>
                </ul>

                <h2>Best-in-Class learning modules</h2>
                <ul class="icon">
                    <li>
                        <i class="fa fa-building me-2"></i>
                        <span>Global Faculty from USA, Europe and India</span>
                    </li>
                    <li>
                        <i class="fa fa-project-diagram me-2"></i>
                        <span>Real World Case Examples</span>
                    </li>
                    <li>
                        <i class="fa fa-handshake me-2"></i>
                        <span>Personalised Monitoring</span>
                    </li>
                    <li>
                        <div class="fa fa-book me-2"></div>
                        <span>Certification</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 text-center">
                <div class="mb-3">
                    <img width="200px" height="200" src="{{ asset('app-dependencies/assets/img/global-faculty.png') }}"
                        alt="Global Faculty">
                </div>
                <h4 class="text-primary">Global Faculty</h4>
                <p>
                    Our courses are designed and conducted by renowned academicians from prestigious institutes so that
                    you benefit from global perspectives and rich domain expertise.
                </p>
            </div>
            <div class="col-lg-4 col-12">
                <div class="mb-3">
                    <img width="200px" height="200"
                        src="{{ asset('app-dependencies/assets/img/modular-course-design.png') }}"
                        alt="Modular Course Design">
                </div>
                <h4 class="text-primary">Modular Course Design</h4>
                <p>
                    Course modules have been carefully researched and curated for an enriching learning experience.
                </p>
            </div>
            <div class="col-lg-4 col-12">
                <div class="mb-3">
                    <img width="200px" height="200" src="{{ asset('app-dependencies/assets/img/certification.png') }}"
                        alt="Certification">
                </div>
                <h4 class="text-primary">Certification</h4>
                <p>
                    Our courses are designed and conducted by renowned academicians from prestigious institutes so that
                    you benefit from global perspectives and rich domain expertise.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="section py5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12">
                <img class="img-fluid" src="{{ asset('app-dependencies/assets/img/founder.png') }}" alt="Founders">
            </div>
            <div class="col-lg-7 col-12">
                <h2 class="text-uppercase">What our founders say</h2>
                <div class="my-5">
                    <p class="fs-3 fw-bold">
                        Learning is a life-long journey where individuals succeed if they get access to high quality
                        knowledge and guidance from domain experts with global experiences.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
