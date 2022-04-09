@extends('layouts.app')

@section('title', 'Contact Us')

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

<section id="contact" class="contact py-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>182/32, Industrial Area, Phase 1, Chandigarh, Pin: 160002, State: Chandigarh</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{ config('mail.contact.address') }}</p>
                    </div>

                    {{-- <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
                <form action="" method="POST" role="form" id="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name-input" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email-input"
                                placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" id="message-input" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center">
                        <button id="send-msg-btn" class="btn btn-primary" type="submit">
                            <span class="loading">
                                <i class="fa fa-spinner fa-spin"></i>
                                <span class="ms-1">Sending Message</span>
                            </span>
                            <span class="default-send-msg-btn-text">
                                <i class="fas fa-paper-plane"></i>
                                <span class="ms-1">Send Message</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')
<script src="{{ asset('app-dependencies/assets/js/contact.js') }}"></script>
@endpush
