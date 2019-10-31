@extends('layouts.master')
@section('content')
    <section class="related-products">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-center">{{ $title }}</h1>
              <div><img class="home-about-us-img-title" src="{{ asset("./img/flower-line.png") }}" alt=""></div>
            </div>
            <div class="col-12">
              <div class="products">
                <div class="row">
                    @foreach ($products as $item)
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