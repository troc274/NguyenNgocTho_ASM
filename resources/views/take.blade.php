@extends('layouts.master')
@section('content')
    <section class="home-take">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="home-love-story-title">
                <h3 class="home-about-us-title">Bản giá dịch vụ chụp hình</h3>
                <div><img class="home-about-us-img-title" src="./img/flower-line.png" alt=""></div>
              </div>
              <div class="row justify-content-center">
                @foreach ($take as $item)
                    <div class="col-sm-9 col-md-4 home-story-blog mb-4"><a class="take-photo" href="{{ route('home.product.takes', ["id"=>$item->id]) }}">
                        <figure><img src="{{ asset($item->image) }}" alt="image blog 1"></figure>
                        <figcaption>
                            <h4 class="text-center">{{$item->name}}</h4>
                          <h6 class="price">{{$item->price()}}<span>VNĐ</span></h6>
                          <p class="text-center">{{$item->location}}</p>
                        </figcaption></a>
                    </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection