<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">GAsAve</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @auth
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('profile') }}">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('birthdata') }}" tabindex="-1"
                        aria-disabled="true">{{ __('User information') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" tabindex="-1"
                        aria-disabled="true">{{ __('Logout') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('Choose a language') }} <i class="fa-solid fa-globe"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="?lang=en{!!Session::get('lang')==='en' !!}">{{ __('English') }}</a></li>
                        <li><a class="dropdown-item" href="?lang=hu{!!Session::get('lang')==='hu' !!}">{{ __('Hungarian') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        @else
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('Choose a language') }} <i class="fa-solid fa-globe"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="?lang=en{!!Session::get('lang')==='en' !!}">{{ __('English') }}</a></li>
                        <li><a class="dropdown-item" href="?lang=hu{!!Session::get('lang')==='hu' !!}">{{ __('Hungarian') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        @endauth
    </div>
</nav>


<style>
     .navbar-brand {
        font-family: 'Rubik Scribble', sans-serif;
        font-size: 2rem;
        color: lightgreen; /* A kitöltés világos zöld */
        -webkit-text-stroke-width: 3px; /* Körvonal vastagsága */
        -webkit-text-stroke-color: green; /* Körvonal színe */
        letter-spacing: 2px;
}
</style>
