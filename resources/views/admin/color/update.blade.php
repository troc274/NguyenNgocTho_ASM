@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row  ">
            <div class="col-md-3 ">
                <form action="{{route('color.update',['id'=>$color->id])}}" method='post'>
                    @csrf
                    <h5 class="text-success text-center text-uppercase">Cập nhật màu</h5>
                    <div class="form-group">
                        <label for="">Tên màu</label>
                        <input type="text" value="{{ $color->name }}" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        @if (sizeof($errors) > 0)
                            <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('name')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Mã màu</label>
                        <input type="text" value="{{ $color->code }}" name="code" id="color" class="form-control" placeholder="" aria-describedby="helpId">
                        @if (sizeof($errors) > 0)
                            <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('name')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Hiển thị màu</label>
                        <div class="color-select" style="--color: {{  $color->code  }}"></div>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Cập nhật màu</button>
                </form>  
            </div>
        </div>
    </div>
@endsection
