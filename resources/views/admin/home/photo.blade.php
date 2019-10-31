<?php 
$figure = "position: relative; width: 100%; padding-top: 100%";
$img = "position: absolute; width: 100%; height: 100%; object-fit: cover; top: 0; left: 0";
?>
<section class="photos mt-3">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title text-center text-uppercase bg-success pt-2 pb-2">Quản lí album cửa hàng</h4>
            <p class='mt-4 p-2 bg-info d-inline-block rounded text-white'>Các hình hiện tại</p>
            <div class="row mt-3">
                @foreach ($photos as $item)
                    <div class="col-md-2">
                        <figure style="{{$figure}}">
                            <img style="{{$img}}" src="{{$item->content}}" alt="">
                        </figure>
                        <a href="{{route('home.photo.delete',['id'=>$item->id])}}">Nhấn vào để xóa</a>
                    </div>
                @endforeach
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <p class='mt-4 p-2 bg-info d-inline-block  rounded text-white'>Thêm hình vào trang chủ</p>
                    <form action="{{route('home.photo')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Thêm hình studio</label>
                            <input type="file" name="photo[]" id="" class="form-control" multiple placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Hình có kích thước lớn</small>
                        </div>
                        <div class='text-center'>
                            <button type="submit" class="btn btn-success">Thêm hình</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>