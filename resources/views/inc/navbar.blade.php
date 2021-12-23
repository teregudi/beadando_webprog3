<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #494949;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ Request::route()->getName()==='home' ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contact') }}" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('get-messages') }}" class="nav-link {{ Request::is('contact/messages') ? 'active' : '' }}">Messages</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('list-books') }}" class="nav-link {{ Request::is('library') ? 'active' : '' }}">Library</a>
            </li>
            @auth
                <li class="nav-item">
                    <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('auth.logout') }}" method="POST" id="sign_out_link">
                        @csrf
                        <a class="nav-link" href="javascript:;" onclick="document.getElementById('sign_out_link').submit();">
                            {{ __('Sign out') }}</a>
                    </form>
                </li>
            @else
            <li class="nav-item">
                <a href="{{ route('auth.register') }}" class="nav-link {{ Request::is('register') ? 'active' : '' }}">
                    {{ __('Register') }}</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('auth.login') }}" class="nav-link {{ Request::is('login') ? 'active' : '' }}">
                    {{ __('Sign in') }}</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>