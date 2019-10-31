@extends('layouts.app')
@section('content')
    <div class="card category">
        <div class="card-body">
            <div class="container mt-4">
              <div class="row">
                <div class="col-md-4">
                    @include('admin.category.form')
                </div>
                <div class="col-md-8">
                    @include('admin.category.table')
                </div>
              </div>
            </div>
        </div>   
    </div>
@endsection