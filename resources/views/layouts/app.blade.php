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

    <footer>
        <section class="site_footer">
            <div class="container down">
                <div class="row">
                    <div class="col-6 p-4">
                        <div class="row">
                            <div class="col-3">
                                <h3>dc comics</h3>
                                <ul>
                                    <li><a href="">Characters</a></li>
                                    <li><a href="">Comics</a></li>
                                    <li><a href="">Movies</a></li>
                                    <li><a href="">Tv</a></li>
                                    <li><a href="">Videos</a></li>
                                    <li><a href="">Games</a></li>
                                    <li><a href="">News</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <h3>dc</h3>
                                <ul>
                                    <li><a href="">Terms of use</a></li>
                                    <li><a href="">Privacy policy</a></li>
                                    <li><a href="">Add choices</a></li>
                                    <li><a href="">Advertising</a></li>
                                    <li><a href="">Jobs</a></li>
                                    <li><a href="">Subscriptions</a></li>
                                    <li><a href="">Talent workshop</a></li>
                                    <li><a href="">Cpsc certificate</a></li>
                                    <li><a href="">Ratings</a></li>
                                    <li><a href="">Shop help</a></li>
                                    <li><a href="">Contact us</a></li>
                                </ul>

                            </div>
                            <div class="col-3">
                                <h3>sites</h3>
                                <ul>
                                    <li><a href="">DC</a></li>
                                    <li><a href="">Mad Magazine</a></li>
                                    <li><a href="">DC Kids</a></li>
                                    <li><a href="">DC Univers</a></li>
                                    <li><a href="">DC Power Visa</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <h3>shop</h3>
                                <ul>
                                    <li><a href="">Shop DC</a></li>
                                    <li><a href="">Shop DC Collectibles</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-6 logo">
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container bottom">
                    <button>
                        SIGN UP NOW!
                    </button>
                    <div class="right d-flex align-items-center">
                        <h4>follow us</h4>
                        <ul class=" icons d-flex align-items-center m-0">
                            <li><a href=""><img src="/img/footer-facebook.png" alt=""></a></li>
                            <li><a href=""><img src="/img/footer-twitter.png" alt=""></a></li>
                            <li><a href=""><img src="/img/footer-youtube.png" alt=""></a></li>
                            <li><a href=""><img src="/img/footer-pinterest.png" alt=""></a></li>
                            <li><a href=""><img src="/img/footer-periscope.png" alt=""></a></li>

                        </ul>
                    </div>
                </div>


            </div>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>