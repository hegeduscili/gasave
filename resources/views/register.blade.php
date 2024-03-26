<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
</head>

<body>
    @include('includes.nav')

    <div class="cotainer mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6 lg-8">
                <form action="{{ route('post.register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <h2>{{__('Register')}}</h2>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">{{__('Please provide your name!')}}</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                        <div class="bg-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{__('Please provide your email!')}}</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                        <div class="bg-danger">{{$message}}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{__('Please provide your password!')}}</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <div class="bg-danger">{{$message}}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{__('Please provide your password again!')}}</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                        <div class="bg-danger">{{$message}}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success">{{__('Register')}}</button>
                    </div>
                </form>


        </div>
    </div>

    @include('includes.scripts')

</body>

</html>
