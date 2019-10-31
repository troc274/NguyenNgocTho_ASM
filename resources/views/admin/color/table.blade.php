<table class="w-100">
        <thead class=''>
          <tr>
            <th>Tên màu</th>
            <th>Mã màu</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th class='th-action'>Sửa</th>
            <th class='th-action'>Xóa</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($colors as $color)
          <tr>
            <td scope="row">{{$color->name}}</td>
            <td scope="row">{{$color->code}} <div class="color" style="--color:{{$color->code}} "></div> </td>
            <td scope="row"><small>{{$color->created_at}}</small></td>
            <td scope="row"><small>{{$color->updated_at}}</small></td>
            <td>  <a href="{{ route('color.edit', ['id'=> $color->id ]) }}" class='btn btn-custom bg-info text-white'> Sửa </a> </td>
            <td> <a href="{{ route('color.delete', ['id'=> $color->id ]) }}" class='btn btn-custom bg-orange'> Xóa </a> </td>
            </tr>
          @endforeach
        </tbody>
      </table>