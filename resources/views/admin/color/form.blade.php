
<form action="{{route('color.store')}}" method='post'>
    @csrf
    <h5 class="text-success text-center text-uppercase">Thêm màu cho sản phẩm</h5>
    <div class="form-group">
        <label for="">Tên màu</label>
        <input type="text" value="{{ old('name') }}" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        @if (sizeof($errors) > 0)
            <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('name')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Mã màu</label>
        <input type="text" value="{{ old('code') }}" name="code" id="" class="form-control" placeholder="" aria-describedby="helpId">
        @if (sizeof($errors) > 0)
            <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('name')}}</div>
        @endif
    </div>
    <button type="submit" class="btn btn-success">Thêm màu</button>
</form>
