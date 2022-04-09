<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3 class="fs-5">{{ config('app.name') }}</h3>
                    <ul class="social">
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Learning Path</h4>
                    <ul>
                        @foreach ($categoryMenu as $category)
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="{{ route('category', ['category' => $category->id]) }}">{{$category->name}}</a>
                        </li>
                        @if($loop->index == 3)
                        @break
                        @endif
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>About</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About Us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('terms') }}">Terms of Service</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Get in touch</h4>
                    <p><a href="mailto:{{ config('mail.contact.address') }}">{{ config('mail.contact.address') }}</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ config('app.name') }}</span></strong>. All Rights Reserved
            </div>
        </div>
    </div>
</footer>
