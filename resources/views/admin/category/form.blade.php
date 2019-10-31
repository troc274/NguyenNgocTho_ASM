
@if ( isset($category) )
    <form action="{{route('category.update', ["id"=>$category->id])}}" method='post' class="shadow">
        @csrf
        <h5 class="text-danger text-center text-uppercase">Cập nhật danh mục</h5>
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" name="name" value=" {{$category->name}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
            @if ($errors->has('name'))
                <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('name')}}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-info">Cập nhật danh mục</button>
    </form>
@else 
    <form action="{{route('category.store')}}" method='post'>
        @csrf
        <h5 class="text-success text-center text-uppercase">Thêm danh mục</h5>
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" value="{{ old('name') }}" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
            @if (sizeof($errors) > 0)
                <div class="alert alert-danger mt-2 text-dark alert-error" role="alert">{{$errors->first('name')}}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Thêm danh mục mới</button>
    </form>
@endif
