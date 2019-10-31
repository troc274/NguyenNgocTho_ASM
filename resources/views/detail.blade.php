@extends('layouts.master')
@section('content')
<section class="detail-product mt-5">
    <div class="container">
        <div class="row no-gutters detail-product-main">
        <div class="col-12 col-md-5">
            <div class="image-product">
            <figure><img class="img-fluid" src="{{ asset($product->image) }}" alt=""></figure>
            </div>
        </div>
        <div class="col-12 col-md-7 p-4">
            <div class="content-detail">
            <div class="name-product">{{ $product->name }}</div>
            <div class="price"><span class="">{{ $product->price() }}</span><small>vnđ</small></div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section class="albums-detail">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="album-items">
            <ul class="row no-gutters" id="aniimated-thumbnials">
               @foreach ($product->photos as $item)
                <li class="col-4 col-md-3 col-lg-2" data-src="{{ asset($item->image) }}"><a href><img src="{{ asset($item->image) }}" alt=""></a></li>
               @endforeach
            </ul>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section class="related-products">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <h1 class="text-center">Sản phẩm tương tự</h1>
            <div><img class="home-about-us-img-title" src="./img/flower-line.png" alt=""></div>
        </div>
        <div class="col-12">
            <div class="products">
            <div class="row">
                    @foreach ($more as $item)
                    <div class="col-12 col-md-6 col-lg-3"><a href="{{ route('home.product.detail', ["id"=>$item->id]) }}">
                        <figure>
                            <div class="img-related"><img class="w-100" src="{{ asset($item->image) }}" alt=""></div>
                            <figcaption>
                            <h6 class="name">{{ $item->name }}</h6>
                            <h6 class="price">{{ $item->price() }}<span>VNĐ</span></h6>
                            </figcaption>
                        </figure></a></div>
                    @endforeach
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
@endsection
