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
                <form action="{{ route('post.profile') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <h2>{{ __('Edit your Profile') }}</h2>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Please provide your name!') }}</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', Auth::user()->name) }}">
                        @error('name')
                            <div class="row justify-content-center">
                                <div class="alert alert-danger mt-3">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Please provide your email!') }}</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email', Auth::user()->email) }}">
                        @error('email')
                            <div class="row justify-content-center">
                                <div class="alert alert-danger mt-3">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Please provide your password!') }}</label>
                        <input type="password" class="form-control" id="password" name="password" value="">
                        @error('password')
                            <div class="row justify-content-center">
                                <div class="alert alert-danger mt-3">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation"
                            class="form-label">{{ __('Please provide your password again!') }}</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation" value="">
                        @error('password_confirmation')
                            <div class="row justify-content-center">
                                <div class="alert alert-danger mt-3">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success">{{ __('Edit') }}</button>
                    </div>
                </form>


            </div>
        </div>

        @include('includes.scripts')

</body>

</html>
