@extends('layouts.app')

@section('hero')
<section id="hero">
    <div class="hero-container">
        <h3>Welcome to <strong>{{ config('app.name', 'Laravel') }}</strong></h3>
        <h1>Empowering Inquisitive Minds</h1>
        <h2>Earn your certificate at this online academy</h2>
        <a href="{{ route('app.register') }}" class="btn-get-started scrollto">Get Started</a>
    </div>
</section>
@endsection

@section('content')

<section class="feature-overview py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2 class="mb-5">Best-in-Class learning modules</h2>
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
                    <li>
                        <span class="circle me-2">
                            <i class="fa fa-check"></i>
                        </span>
                        <span class="text-uppercase">Earn your certificate at this online academy</span>
                    </li>
                </ul>
                <p class="my-5">
                    If your answer is YES, then look no further.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section py-5">
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
            <div class="col-lg-4 col-12 text-center">
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
            <div class="col-lg-4 col-12 text-center">
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
</section>

<section class="section py5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12">
                <img class="img-fluid" src="{{ asset('app-dependencies/assets/img/founder.png') }}" alt="Founders">
            </div>
            <div class="col-lg-7 col-12">
                <h2 class="text-uppercase">What our founders say</h2>
                <div class="my-5">
                    <p class="fs-3">
                        Learning is a life-long journey where individuals succeed if they get access to high quality
                        knowledge and guidance from domain experts with global experiences.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">

        <div class="section-title">
            <h3>Listen to our Faculty</h3>
        </div>

        <div class="row">
            <div class="col-lg-3 col-12 d-flex align-items-stretch text-center">
                <div class="member">
                    <iframe style="width: 100%; height: 200px;" src="https://www.youtube.com/embed/n6eDiO0xDWs"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-3 col-12 d-flex align-items-stretch text-center">
                <div class="member">
                    <iframe style="width: 100%; height: 200px;" src="https://www.youtube.com/embed/KMb1JBs6iXg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-3 col-12 d-flex align-items-stretch text-center">
                <div class="member">
                    <iframe style="width: 100%; height: 200px;" src="https://www.youtube.com/embed/THtaySRdePs"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-3 col-12 d-flex align-items-stretch">
                <div class="member">
                    <iframe style="width: 100%; height: 200px;" src="https://www.youtube.com/embed/dqGEF-vxwVE"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Team Section -->

<section class="section py-5" style="background: #F0F0F07D">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-6 text-primary mb-3">
                    Why Should You Choose Us ?
                </h2>
                <p>We empower you to take ownership and responsibility for your learning by developing capabilities to
                    succeed in a highly competitive world. </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-12">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1">
                                <span class="text-danger fs-2">
                                    <i class="fas fa-user-astronaut"></i>
                                </span>
                            </div>
                            <div class="col-11">
                                <h4 class="text-primary">Global Faculty</h4>
                                <p>
                                    Our Faculty with their vast academic and professional expertise, have designed high
                                    impact
                                    modules for each course.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow my-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1">
                                <span class="text-danger fs-2">
                                    <i class="fas fa-calendar"></i>
                                </span>
                            </div>
                            <div class="col-11">
                                <h4 class="text-primary">Real World Case Examples</h4>
                                <p>
                                    For an enriched learning experience, we have curated the best case studies from
                                    across the globe.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow my-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1">
                                <span class="text-danger fs-2">
                                    <i class="fas fa-user-graduate"></i>
                                </span>
                            </div>
                            <div class="col-11">
                                <h4 class="text-primary">Go Live!</h4>
                                <p>
                                    A unique concept where you can interact LIVE with our Faculty to discuss topics of
                                    your interest and learn from their vast experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <img src="{{ asset('app-dependencies/assets/img/global-faculty.png') }}" alt="Gloal Faculty"
                    class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
    <div class="container">

        <div class="section-title">
            <h2>F.A.Q</h2>
            <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">
            <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What exactly is the Certification
                    process? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        The courses available on various portals may not cover all aspects of a particular topic. You
                        can choose those modules here which will complete your learning experience. Also, you will be
                        certified for your new capability.
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Are there any free courses on the
                    LWA platform? <i class="bi bi-chevron-down icon-show"></i><i
                        class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                    <p>Only the first module for any course that you choose is free.</p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Does LWA offer any placement
                    guarantee after completing a course? <i class="bi bi-chevron-down icon-show"></i><i
                        class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                    <p>LWA will empower you with all the skills and capabilities needed to progress successfully in your
                        career.</p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can I get career advice from the
                    Faculty? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                    <p>You can virtually consult our Faculty members with a prior appointment and for a moderate fee.
                    </p>
                </div>
            </li>
        </ul>

    </div>
</section>

{{--
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <h3>Learn More <span>About Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div class="row content">
            <div class="col-lg-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </li>
                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit
                    </li>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="#" class="btn-learn-more">Learn More</a>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <h3>We do offer awesome <span>Services</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-4 col-6 col-6">
                <div class="icon-box">
                    <i class="ri-store-line" style="color: #ffbb2c;"></i>
                    <h3><a href="">Lorem Ipsum</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="icon-box">
                    <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                    <h3><a href="">Dolor Sitema</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                    <h3><a href="">Sed perspiciatis</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
                <div class="icon-box">
                    <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                    <h3><a href="">Magni Dolores</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mt-4">
                <div class="icon-box">
                    <i class="ri-database-2-line" style="color: #47aeff;"></i>
                    <h3><a href="">Nemo Enim</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mt-4">
                <div class="icon-box">
                    <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                    <h3><a href="">Eiusmod Tempor</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mt-4">
                <div class="icon-box">
                    <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                    <h3><a href="">Midela Teren</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mt-4">
                <div class="icon-box">
                    <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                    <h3><a href="">Pira Neve</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mt-4">
                <div class="icon-box">
                    <i class="ri-anchor-line" style="color: #b2904f;"></i>
                    <h3><a href="">Dirada Pack</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mt-4">
                <div class="icon-box">
                    <i class="ri-disc-line" style="color: #b20969;"></i>
                    <h3><a href="">Moton Ideal</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mt-4">
                <div class="icon-box">
                    <i class="ri-base-station-line" style="color: #ff5828;"></i>
                    <h3><a href="">Verdo Park</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mt-4">
                <div class="icon-box">
                    <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                    <h3><a href="">Flavor Nivelanda</a></h3>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Features Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container">

        <div class="text-center">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
        </div>

    </div>
</section><!-- End Cta Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <h3>Check our <span>Portfolio</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{ asset('app-dependencies/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                    alt="">
                <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="{{ asset('app-dependencies/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                    alt="">
                <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{ asset('app-dependencies/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                    alt="">
                <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="{{ asset('app-dependencies/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                    alt="">
                <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="{{ asset('app-dependencies/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                    alt="">
                <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{ asset('app-dependencies/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                    alt="">
                <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="{{ asset('app-dependencies/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                    alt="">
                <div class="portfolio-info">
                    <h4>Card 1</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="{{ asset('app-dependencies/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                    alt="">
                <div class="portfolio-info">
                    <h4>Card 3</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="{{ asset('app-dependencies/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                    alt="">
                <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="container">

        <div class="section-title">
            <h2>Pricing</h2>
            <h3>Our Competing <span>Prices</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                <div class="box recommended">
                    <span class="recommended-badge">Recommended</span>
                    <h3>Business</h3>
                    <h4><sup>$</sup>19<span> / month</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li>Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                <div class="box">
                    <h3>Developer</h3>
                    <h4><sup>$</sup>29<span> / month</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li>Pharetra massa</li>
                        <li>Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Pricing Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <h3>Contact <span>Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
--}}

@endsection
