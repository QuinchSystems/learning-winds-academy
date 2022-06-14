{{-- Global variables --}}
<script>
    const BASE_URL = "{{ url('/') }}";
    const POST_CONTACT_URL = "{{ route('contact') }}";
    const PROFILE_PAGE_URL = "{{ route('app.profile') }}";
    const COURSE_PURCHASE_FORM_URL = "{{ route('app.course-purchase-form', '#') }}";
</script>

<!-- Vendor JS Files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
    integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('app-dependencies/assets/js/public_api.js') }}?version={{ App\Constant::APP_VERSION }}"></script>
<script src="{{ asset('app-dependencies/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('app-dependencies/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('app-dependencies/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('app-dependencies/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('app-dependencies/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('admin-dependencies/assets/js/common.js') }}"></script>
<script src="{{ asset('admin-dependencies/assets/js/popup-alert.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('app-dependencies/assets/js/main.js') }}?version={{ App\Constant::APP_VERSION }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DT2PEB6S1F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DT2PEB6S1F');
</script>
@stack('js')
