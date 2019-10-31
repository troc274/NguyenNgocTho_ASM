@extends('layouts.app')

@section('content')
    <div class="card product">
        <div class="card-body">
            <div class="container">
                <div class="row  ">

                    <div class="col-md-12">
                        <nav class="nav nav-handle-product">
                            <a class="btn btn-success btn-custom" href="{{ route('product.insert') }}">Thêm</a>
                        </nav>
                    </div>

                    <div class="col-md-12 mt-3">
                        @include('admin.product.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection