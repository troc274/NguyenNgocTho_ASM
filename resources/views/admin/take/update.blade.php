@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('take.update', ['id'=>$take->id]) }}" method="post" enctype="multipart/form-data" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            <div class="form-group">
                              <label for="">Tên gói</label>
                              <input type="text" name="name" class="form-control"  value="{{$take->name}}">
                            </div>
                            <div class="form-group">
                              <label for="">Giá tiền</label>
                              <input type="number" name="amount" id="price" class="form-control" value="{{$take->amount}}" placeholder="" aria-describedby="helpId">
                                <span class='text-price mt-2'></span><span>VNĐ</span>
                            </div>
                            <div class="form-group">
                              <label for="">Địa chỉ phiên trường</label>
                              <input type="text" name="location"  value="{{$take->location}}" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Hình ảnh hiển thị</label>
                              <input type="file" name="image" id="image-show" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="img-show">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Mô tả</label>
                              <textarea class="form-control" name="description" id="description" rows="3">
                                 {{$take->description}}
                            </textarea>
                                <script type="text/javascript">
                                    window.onload = function(){
                                        CKEDITOR.replace( 'description')
                                    };
                                </script>
                            </div>
                            
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit " class="btn btn-success">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
@endsection
