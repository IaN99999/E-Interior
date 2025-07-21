@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="p-4">
        <div class="mt-4 p-5 rounded-4 shadow-sm bg-white text-dark position-relative overflow-hidden border">
            <div class="container py-5">
                <h1 class="display-5 fw-bold">Shopping Made Simple</h1>
                <p class="lead">Browse, choose, and check out effortlessly. Discover elegant, practical, and curated
                    products delivered to your home.</p>
                <a href="#" class="btn btn-dark btn-lg mt-3 px-4">Start Shopping</a>
            </div>
            <div class="position-absolute top-0 end-0 h-100 w-50 d-none d-md-block"
                style="background: url('{{ asset('images/logo2.jpg') }}') center / contain no-repeat; opacity: 0.07;">
            </div>
        </div>
    </div>


    <div class="p-4">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner rounded-4">
                <div class="carousel-item active">
                    <div class="carousel-bg" style="background-image: url('{{ asset('images/interior4.jpg') }}');">

                        <div class="overlay position-absolute top-0 start-0 w-100 h-100"
                            style="background-color: rgba(0, 0, 0, 0.5);"></div>

                        <div class="carousel-caption">
                            <h3>Elegant and Functional</h3>
                            <p>Interior spaces designed to seamlessly blend aesthetics with comfort and usability.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-bg" style="background-image: url('{{ asset('images/interior5.jpg') }}');">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100"
                            style="background-color: rgba(0, 0, 0, 0.5);"></div>
                        <div class="carousel-caption">
                            <h3>Personalized Living Spaces</h3>
                            <p>We craft interiors that reflect your personality, lifestyle, and unique taste.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-bg" style="background-image: url('{{ asset('images/interior6.jpg') }}');">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100"
                            style="background-color: rgba(0, 0, 0, 0.5);"></div>
                        <div class="carousel-caption">
                            <h3>Timeless, Sustainable Design</h3>
                            <p>Experience sustainable beauty through premium materials and thoughtful details.</p>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>


    <div class="container py-5">
        <div class="row">
            @for ($i = 1; $i <= 8; $i++)
                @php
                    $product = [
                        'id' => $i,
                        'name' => 'Product Name ' . $i,
                        'price' => 100000 * $i,
                        'image' => 'images/product/product' . $i . '.jpg',
                    ];
                @endphp

                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset($product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text text-muted">Rp{{ number_format($product['price'], 0, ',', '.') }}</p>
                            <button class="btn btn-outline-dark mt-auto"
                                onclick='Livewire.dispatch("addToCart", { product: @json($product) })'>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>



@endsection
