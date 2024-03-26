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
                <form action="{{ route('post.login') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <h2>{{__('Login')}}</h2>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Please provide your email!') }}</label>
                        <input type="email" class="form-control" id="email" name="email">
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
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <div class="row justify-content-center">
                            <div class="alert alert-danger mt-3">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success">{{ __('Login') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('includes.scripts')
</body>
</html>
