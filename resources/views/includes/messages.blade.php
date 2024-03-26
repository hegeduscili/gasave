@if (Session::has('success'))
    <div class="col-md-8">
        <div class="row justify-content-center">
            <div class="alert alert-success mt-3">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
@endif

@if (Session::has('error'))
    <div class="col-md-8">
        <div class="row justify-content-center">
            <div class="alert alert-danger mt-3">
                {{ Session::get('error') }}
            </div>
        </div>
    </div>
@endif
