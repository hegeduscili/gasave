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

        .row-image-first {
            background-color: lightblue;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .row-image-first h3 {
            margin: 0;
            font-size: 1.5rem;
        }

        .row-image-first h1 {
            margin: 0;
            font-size: 3rem;
        }

        .card {
            border: none;
        }

        .btn-go {
            width: 100%;
            height: 80px;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    @include('includes.nav')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{-- Top blue image --}}
                <div class="row justify-content-center align-items-center text-center row-image-first">
                    <h3>satisfying pictures</h3>
                    <h1>GaSave</h1>
                </div>
                {{-- Two Tiles --}}
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4 mt-5 mx-3">
                        <div class="card" style="background-color: lightgrey">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('Welcome!') }}</h5>
                                <p class="card-text">
                                    {{ __('If you would like to know how much gasoline you saved by commuting to work by bicycle, on foot, or using public transportation, then you are in the right place!') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="card" style="background-color: lightgreen">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('Welcome!') }}</h5>
                                <p class="card-text">
                                    {{ __('If you would like to know how much gasoline you saved by commuting to work by bicycle, on foot, or using public transportation, then you are in the right place!') }}
                                </p>
                                <a href="{{ route('register') }}" class="btn btn-success">{{ __("Let's get started") }}</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center mt-5">
                    <div class="col-md-4">
                        <button class="btn btn-go btn-danger"><a href="{{ route('login') }}">{{ __("I'm already calculating!") }}</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.scripts')

</body>

</html>
