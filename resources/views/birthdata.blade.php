<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
</head>

<body>
    @include('includes.nav')

    <div class="container mt-3">

        @include('includes.messages')

        <div class="row justify-content-center">
            <div class="col-md-8 lg-10">
                <form action="{{ route('post.birthdata') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <h2>{{ __('User information') }}</h2>
                    </div>
                    <div class="mb-3">
                        <label for="birth_place" class="form-label">{{ __('Please provide your place of birth!') }}</label>
                        <input type="text" class="form-control" id="birth_place" name="birth_place"
                            value="{{ old('birth_place', Auth::user()->birthdata->birth_place) }}">
                        @error('birth_place')
                            <div class="row justify-content-center">
                                <div class="alert alert-danger mt-3">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="birth_date" class="form-label">{{ __('Please provide your date of birth!') }}</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date"
                            value="{{ old('birth_date', Auth::user()->birthdata->birth_date) }}">
                        @error('birth_date')
                            <div class="row justify-content-center">
                                <div class="alert alert-danger mt-3">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="mother_name" class="form-label">{{ __("Please provide your mother's name!") }}</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name"   value="{{ old('mother_name', Auth::user()->birthdata->mother_name) }}">
                        @error('mother_name')
                            <div class="row justify-content-center">
                                <div class="alert alert-danger mt-3">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success">{{ __('Save') }}</button>
                    </div>
                </form>


            </div>
        </div>

        @include('includes.scripts')

</body>

</html>
