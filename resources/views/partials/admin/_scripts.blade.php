{{-- Global variables --}}
<script>
    const BASE_URL = "{{ url('/') }}";
    const FETCH_MOODLE_COURSE_URL = "{{ route('admin.api.moodle-courses') }}";
    const FETCH_MOODLE_USERS_URL = "{{ route('admin.api.moodle-users') }}";
    const COURSE_EDIT_URL = "{{ route('admin.courses.edit', ['course' => '#']) }}";
    const SALES_CHART_JS_DATA_URL = "{{ route('admin.api.sales-chart-js-data', '#') }}";

    const CLEAN_UP_MOODLE_COURSES_URL = "{{ route('admin.api.clean-courses') }}";
</script>

<!--   Core JS Files   -->
<script src="{{ asset('admin-dependencies/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin-dependencies/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin-dependencies/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin-dependencies/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin-dependencies/assets/js/common.js') }}"></script>
<script src="{{ asset('admin-dependencies/assets/js/popup-alert.js') }}"></script>

{{-- Axios: api for ajax request --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js"
    integrity="sha512-/Q6t3CASm04EliI1QyIDAA/nDo9R8FQ/BULoUFyN4n/BDdyIxeH7u++Z+eobdmr11gG5D/6nPFyDlnisDwhpYA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('admin-dependencies/assets/js/api.js') }}?version={{ App\Constant::APP_VERSION }}"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('admin-dependencies/assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
@stack('js')
