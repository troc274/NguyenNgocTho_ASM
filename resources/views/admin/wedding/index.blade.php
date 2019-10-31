@extends('layouts.app')
@section('content')
    <div class="card category">
        <div class="card-body">
            <div class="container mt-4">
              <div class="row">
                <div class="col-md-12">
                    <ul class="nav story-nav-top">
                        <li class="nav-item"><a class="btn btn-custom btn-info " href="{{ route('story.stepfirst') }}">Thêm</a></li>
                        <li class="nav-item">
                            <div class="form-group-search">
                                <input type="text" name="" id="" class="" placeholder="" aria-describedby="helpId">
                                <button><span>Tìm kiếm</span> <i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </li>
                    </ul>
                    @include('admin.wedding.table')
                </div>
              </div>
            </div>
        </div>   
    </div>
@endsection