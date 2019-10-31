{{-- {{$category->name}} --}} 
@extends('layouts.app') 
@section('content')
<div class="product-insert">
    <div class="container">
        <form action="{{ route('product.update', ['id'=>$product->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class=" col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" name="name" value="{{ $product->name }} " id="" class="form-control" placeholder=""
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
                                        <div class="box-img-custom" ><img src="{{ asset($product->image) }}" alt="" /></div> 
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
                                        @foreach ($albums as $photo)
                                            <div class="box-img-custom" ><img src="{{ asset($photo->image) }}" alt="" /></div> 
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-custom btn-info mt-4 ">Cập nhật</button>
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
                                        <?php $checked = $category->id == $product->category_id ? "checked" : ""?>
                                        <option value="{{ $category->id }}"  {{$checked}}>{{ $category->name }}</option>
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
                                        <?php $checked = $color->id == $product->color_id ? "checked" : ""?>
                                        <option value="{{ $color->id }}" style="--color: {{ $color->code }}" {{$checked}} >{{ $color->name }} </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('color_id'))
                                    <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('color_id')}}</div>
                                @endif
                            </div>
                            <div class="form-group">
                              <label for="">Giá thuê</label>
                              <input type="number" value="{{ $product->amount }}" name="amount" id="" class="form-control decimal mb-2" placeholder="" data-decimal="" aria-describedby="helpId">
                                <span class="lb-decimal" class="ml-2 mr-2">{{ number_format($product->amount) }}</span>
                              <small id="helpId" class="text-muted">VNĐ</small>
                              @if ($errors->has('amount'))
                                <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('amount')}}</div>
                              @endif
                            </div>
                            <div class="form-group">
                              <label for="">Giá khuyến mãi</label>
                              <input type="number" value="{{ $product->sale }}" name="sale" id="" class="form-control decimal mb-3" placeholder="" aria-describedby="helpId">
                              <span class="lb-decimal" class="ml-2 mr-2">{{ number_format($product->sale) }}</span>
                              <small id="helpId" class="text-muted">VNĐ</small>
                              @if ($errors->has('sale'))
                                <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('sale')}}</div>
                              @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection