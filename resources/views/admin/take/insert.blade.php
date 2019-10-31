@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('take.store') }}" method="post" enctype="multipart/form-data" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            <div class="form-group">
                              <label for="">Tên gói</label>
                              <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Giá tiền</label>
                              <input type="number" name="amount" id="price" class="form-control" placeholder="" aria-describedby="helpId">
                                <span class='text-price mt-2'></span><span>VNĐ</span>
                            </div>
                            <div class="form-group">
                              <label for="">Địa chỉ phiên trường</label>
                              <input type="text" name="location"  class="form-control" placeholder="" aria-describedby="helpId">
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
                              <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            </div>
                            <script>
                                window.onload = function(){
                                    var description = document.getElementById('description');
                                    if(description != null){
                                        CKEDITOR.replace( 'description' )
                                    }
                                };
                               </script>
                            
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit " class="btn btn-success">Lưu</button>
                        </div>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
@endsection
