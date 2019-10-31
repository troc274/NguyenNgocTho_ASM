@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('story.store')}}" method='post' enctype="multipart/form-data">
                        @csrf
                        <h4 class="text-center mt-3 mb-5">Thông tin tổ chức tiệc cưới tại nhà hàng</h4>
                        <div class="row" >
                            <div class="col-md-6 p-2">
                                  <input type="hidden" name="wife_id" value="{{ $wife_id }}" class="form-control">
                                  <input type="hidden" name="husband_id" value="{{  $husband_id  }}" class="form-control">
                                <div class="form-group">
                                    <label for="">Thời gian tổ chức</label>
                                    <input type="datetime-local" name="time" value="2018-06-12T19:30" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Địa điểm tổ chức</label>
                                    <input type="text" name="location" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="">
                                    <button type="reset" class="btn btn-custom btn-warning mr-3">Nhập lại</button>
                                    <button type="sunmit" class="btn btn-custom btn-success">Lưu lại</button>
                                   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Hinh cưới 2 vợ chồng</label>
                                    <input type="file" name="banner" id="image-wedding-file" class="form-control">
                                </div>
                                <div class="image-wedding">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <div class="form-group">
    <label for="">Tên cô dâu</label>
    <input type="text" value="{{ old('name') }}" name="name" id="" class="form-control"
        placeholder="" aria-describedby="helpId">
    @if (sizeof($errors) > 0)
    <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">
        {{$errors->first('name')}}</div>
    @endif
</div> --}}