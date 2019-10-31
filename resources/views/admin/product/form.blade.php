{{-- {{$category->name}} --}} 
@extends('layouts.app') 
@section('content')
<div class="product-insert">
    <div class="container">
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class=" col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" name="name" value=" " id="" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('name')}}</div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Hình hiển thị</label>
                                        <input type="file" class="form-control-file" name="image" id="singleImage" placeholder="" aria-describedby="fileHelpId" />
                                        @if ($errors->has('image'))
                                            <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('image')}}</div>
                                        @endif
                                    </div>
                                    <div class="single-image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Albums hình</label>
                                        <input type="file"  class="form-control-file" name="albums[]" id="multiImage" placeholder=""
                                            aria-describedby="fileHelpId" multiple />
                                        @if ($errors->has('albums'))
                                            <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('albums')}}</div>
                                        @endif
                                    </div>
                                    <div class="group-image-albums">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-custom btn-info mt-4 "> Thêm đồ </button>
                        </div>
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Chọn danh mục</label>
                                <select class="form-control" name="category_id" id="">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                    <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('category_id')}}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Màu</label>
                                <select class="form-control" name="color_id" id="">
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->id }}" style="--color: {{ $color->code }}" >{{ $color->name }} </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('color_id'))
                                    <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('color_id')}}</div>
                                @endif
                            </div>
                            <div class="form-group">
                              <label for="">Giá thuê</label>
                              <input type="number" name="amount" id="" class="form-control decimal mb-2" placeholder="" data-decimal="" aria-describedby="helpId">
                              <span class="lb-decimal" class="ml-2 mr-2">0</span>
                              <small id="helpId" class="text-muted">VNĐ</small>
                              @if ($errors->has('amount'))
                                <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('amount')}}</div>
                              @endif
                            </div>
                            <div class="form-group">
                              <input type="hidden" name="sale" id=""  value='0' class="form-control decimal mb-3" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection