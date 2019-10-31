<section class="service">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
                <h4 class="card-title text-center text-uppercase bg-success pt-2 pb-2">Quản lí dịch vụ</h4>
            <form action="{{ route("home.service") }}" method='post'>
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Áo cưới</label>
                            <textarea  name="bridal" class="form-control" rows="2"> {{$service[0]->content}} </textarea>
                            <small id="helpId" class="text-muted">Nhập nội dung muốn hiển thị</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Trang điểm</label>
                            <textarea  name="makup" class="form-control" rows="2">{{$service[1]->content}}</textarea>
                            <small id="helpId" class="text-muted">Nhập nội dung muốn hiển thị</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tạo mẫu tóc</label>
                            <textarea  name="haircuts" class="form-control" rows="2">{{$service[2]->content}}</textarea>
                            <small id="helpId" class="text-muted">Nhập nội dung muốn hiển thị</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Chụp ảnh</label>
                            <textarea  name="takeaphoto" class="form-control" rows="2">{{$service[3]->content}}</textarea>
                            <small id="helpId" class="text-muted">Nhập nội dung muốn hiển thị</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Sửa ảnh</label>
                            <textarea  name="edit" class="form-control" rows="2">{{$service[4]->content}}</textarea>
                            <small id="helpId" class="text-muted">Nhập nội dung muốn hiển thị</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Khác</label>
                            <textarea  name="orther" class="form-control" rows="2">{{$service[5]->content}}</textarea>
                            <small id="helpId" class="text-muted">Nhập nội dung muốn hiển thị</small>
                        </div>
                    </div>
                    <div class="col-md-12 text-center mt-2">
                        <button type="submit" class="btn btn-success">Lưu lại</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>