@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('story.stepseconds')}}" method='post' enctype="multipart/form-data">
                        @csrf
                        <h4 class="text-center mt-3 mb-5">Thông tin nhà gái</h4>
                        <div class="row" >
                            <div class="col-md-6 p-2">
                                <div class="form-group">
                                    <label for="">Tên cô dâu</label>
                                    <input type="text" name="name" value="{{ old('name') }}" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Hình ảnh</label>
                                    <input type="file"  name="image" id="" class="" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Ngày sinh nhật</label>
                                    <input type="date" value="2018-06-12" name="birthday" id=""
                                        class="form-control" placeholder="" aria-describedby="helpId">
                                    @if (sizeof($errors) > 0)
                                    <div class="alert alert-danger mt-2 text-dark alert-error" role="alert"> {{$errors->first('birthday')}}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Tính cách</label>
                                    <textarea name="description" id="" class="form-control" cols="20" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Địa chỉ tổ chức hôn lễ</label>
                                    <textarea name="location" id="" class="form-control" cols="20" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Thời gian tổ chức lễ</label>
                                    <input type="datetime-local" value="2018-06-12T19:30" name="time" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Linkk map</label>
                                    <input type="text" value="{{ old('map') }}" name="map" id=""
                                        class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="d-flex">
                                    <button type='reset' class="btn btn-custom btn-info mr-3 text-white">Nhập lại</button>
                                    <button type='submit' class="btn btn-custom btn-info text-white" >
                                        <span>Tiếp theo</span>
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </button>
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