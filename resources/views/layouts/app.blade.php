<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My humble library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')

    <div class="container">

        @if (Request::is('/')) <!--Csak akkor include-olja, ha a főoldalon vagyunk -->
            @include('inc.showcase')
        @endif

        @include('inc.messages')

        <div class="row">
            <div class="col-md-8 col-lg-8 mx-auto">
                @yield('content')
            </div>
            @if (Request::is('/'))
                <div class="col-md-4 col-lg-2">
                    @include('inc.sidebar')
                </div>
            @endif
        </div>
    </div>
 
    <footer class="text-center" id="footer">
        <p>Copyright 2021 &copy; teregudi</p>
    </footer>

    @stack('scripts')
</body>
</html>