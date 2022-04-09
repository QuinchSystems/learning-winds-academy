<p class="lead fs-6">
    <span>Course:</span>
    <strong>{{ $course->display_name }}</strong>
</p>
<p class="lead fs-6">
    <span>Category:</span>
    <strong>{{ $course->category->name }}</strong>
</p>
<p class="lead fs-6">
    <span>Price:</span>
    <strong>{{ $course->price }} {{ $course->currency_code }}</strong>
</p>
<form id="purchase-course-form" method="post"
    action="{{ route('app.payment', ['course' => $course->id]) }}">
    @csrf
    <div class="row">
        <div class="col-12 text-end">
            <div class="mb-3">
                <div class="form-floating">
                    <input type="text" name="phone" class="form-control" id="floatingInput" placeholder="Enter 10 digit valid phone number" value="{{ old('phone') }}">
                    <label for="floatingInput">Enter 10 digit valid Phone number</label>
                </div>
            </div>
            <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Close</button>
            <button type="submit" id="course-purchase-continue-button" type="button"
                class="btn btn-primary">Continue</button>
        </div>
    </div>
</form>
