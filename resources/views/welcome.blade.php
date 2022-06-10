@extends('layouts.app')

@section('content')

<section>
    <div class="container mb-3 position-relative">
        <div class="position-absolute up"><button class="btn-load text-uppercase mb-3">current series</button></div>

        <div class="row justify-content-evenly">
            @foreach ($comics as $index => $comic)

            <div class="col-2 p-0 text-center">
                <a class="text-decoration-none" href="{{route('detail',$index)}}">
                    <div class="comic-container" style="width: 200px">
                        <img class="cover" src="{{ $comic['thumb'] }}">
                        <div class="p-1">
                            <h5> {{ $comic['series'] }} </h5>
                        </div>
                    </div>
                </a>
            </div>

            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <button class="btn-load text-uppercase mb-3">load more</button>
    </div>
    <div class="middle">
        <div class="container blue">
            <ul class="p-0 m-0">
                <li> <a href=""> <img src="/img/buy-comics-digital-comics.png" alt=""> digital comics</a></li>
                <li> <a href=""> <img src="/img/buy-comics-merchandise.png" alt="">dc merchandise</a> </li>
                <li> <a href=""> <img src="/img/buy-comics-shop-locator.png" alt="">subscription</a> </li>
                <li> <a href=""> <img src="/img/buy-comics-subscriptions.png" alt="">comic shop locator</a> </li>
                <li> <a href=""> <img src="/img/buy-dc-power-visa.svg" alt="">dc power visa</a> </li>
            </ul>
        </div>
    </div>

</section>


@endsection