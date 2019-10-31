@extends('layouts.master')
@section('content')
<section class="detail-product mt-5">
    <div class="container">
        <div class="row no-gutters detail-product-main">
        <div class="col-12 col-md-12">
            <div class="image-product">
            <figure><img class="img-fluid" src="{{ asset($take->image) }}" alt=""></figure>
            </div>
        </div>
        <div class="col-12 col-md-12 p-4 ">
            <div class="content-detail p-4">
                <div class="name-product">{{ $take->name }}</div>
                <div class='w-100 text-center mt-4'>
                    {!! $take->description !!}
                </div>
                <div class="price"><span class="">{{ $take->price() }}</span><small>vnđ</small></div>
            </div>
        </div>
        </div>
    </div>
    </section>
@endsection

@section('style')
    <style>
        .content-detail p {
            width: 100%;
            font-size: 1.4rem;
            padding: .2rem 0;
        }
        .image-product figure {
            padding-top: calc(100% * 1.5/2) !important;
        }
    </style>
@endsection
