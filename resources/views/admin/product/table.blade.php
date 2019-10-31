<table class="w-100">
    <thead class=''>
        <tr>
        <th>Tên</th>
        <th>Hình</th>
        <th>Giá</th>
        <th>Khuyến mãi</th>
        <th>Màu</th>
        <th>Ngày tạo</th>
        <th>Ngày cập nhật</th>
        <th class='th-action'>Sửa</th>
        <th class='th-action'>Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td scope="row">{{$product->name}}</td>
                <td scope="row"><img width="50" src="{{  asset($product->image) }}" alt=""></td>
                <td scope="row">{{number_format($product->amount,0)}} vnđ</td>
                <td scope="row">{{number_format($product->sale,0)}} vnđ</td>
                <td scope="row">{{$product->color->name}}</td>
                <td scope="row"><small>{{$product->created_at}}</small></td>
                <td scope="row"><small>{{$product->updated_at}}</small></td>
                <td>  <a href="{{ route('product.edit', ['id'=> $product->id ]) }}" class='btn btn-custom btn-info'> Sửa </a> </td>
                <td> <a href="{{ route('product.delete', ['id'=> $product->id ]) }}" class='btn btn-custom btn-danger'> Xóa </a> </td>
            </tr>
        @endforeach
    </tbody>
</table>