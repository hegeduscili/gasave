<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        .bg-image {
            background-image: url('https://images.pexels.com/photos/1008739/pexels-photo-1008739.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            height: 100vh;
            background-size: cover;
        }

        .btn {
            width: 400px;
            height: 80px;
            font-size: 2rem;
        }
    </style>
</head>

<body>
    @include('includes.nav')


    <div class="container-fluid text-center bg-image">
        <div class="row">
            <div class="col-md-12">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-md-8 mt-5">
                        <h1>GaSave</h1>
                        <p class="lead">
                            {{ __('Welcome, if you would like to know how much gasoline you saved by commuting to work by bicycle, on foot, or using public transportation, then you are in the right place!') }}
                        </p>
                                        </div>
                                        <div class="row mt-3">
                        <div class="col-md-6 justify-content-end">
                            <button class="btn btn-success"><a
                                    href="{{ route('register') }}">{{ __("Let's get started") }}</a></button>
                        </div>
                        <div class="col-md-6 justify-content-start">
                            <button class="btn btn-danger"><a
                                    href="{{ route('login') }}">{{ __("I'm already calculating!") }}</a></button>

                    </div></div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.scripts')

</body>

</html>
