<nav class="navbar navbar-expand-md navbar-dark bg-dark">
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
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a href="#" class="dropdown-item">Action1</a>
                    <a href="#" class="dropdown-item">Action2</a>
                    <a href="#" class="dropdown-item">Action3</a>
                </div>
            </li>
        </ul>
    </div>
</nav>