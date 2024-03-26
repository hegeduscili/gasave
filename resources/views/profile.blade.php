<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
</head>
<body>
    @include('includes.nav')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    @if (Session::get('successRegister'))
                    <div class="row mt-5">
                        <h2>Üdvözlöm {{Auth::user()->name}}, Ön sikeresen regisztrált!</h2>
                    </div>
                    @elseif(Session::get('successLogin'))
                    <div class="row mt-5">
                        <h2>Üdvözlöm {{Auth::user()->name}}, Ön sikeresen bejelentkezett!</h2>
                    </div>
                    @else
                    <div class="row mt-5">
                        <h2>Üdvözlöm {{Auth::user()->name}}!</h2>
                    </div>
                    @endif
                </div>
                <div class="row mt-5">
                    <a href="{{ route('edituser') }}" class="btn btn-primary">Profil Módosítás</a>
                </div>
            </div>
        </div>
    </div>

    @include('includes.scripts')
</body>
</html>
