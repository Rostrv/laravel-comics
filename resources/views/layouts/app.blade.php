<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-comics</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

    <header>
        <div class="container-fluid d-flex bg-primary align-items-center">
            <div class="container">
                <div class="content-banner-navbar">
                    <ul class="d-flex text-white text-uppercase">
                        <li><a href="#">dc power &trade; visa &reg;</a></li>
                        <li><a href="#">additional dc sites</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container bottom">
            <div><img class="logo" alt="dc-logo" src="{{ asset('img/dc-logo.png') }}"></div>
            <nav>
                <a href="#">characters</a>
                <a href="#" class="active">comics</a>
                <a href="#">movies</a>
                <a href="#">tv</a>
                <a href="#">games</a>
                <a href="#">collectibles</a>
                <a href="#">videos</a>
                <a href="#">fans</a>
                <a href="#">news</a>
                <a href="#">shop</a>
            </nav>
            <div class="right-menu-navbar">
                <div class="content-right-menu-navbar">
                    <input class="border-0 border border-bottom border-primary" type="text" name="" value="" placeholder="Search">
                    <i class="fa-solid fa-search"></i>
                </div>
            </div>

        </div>

        <div class="jumbo"></div>

    </header>


    <main>
        @yield('content')
    </main>

    <footer></footer>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>