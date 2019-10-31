<table class="w-100">
        <thead class=''>
          <tr>
            <th>Tên danh mục</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th class='th-action'>Sửa</th>
            <th class='th-action'>Xóa</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr>
            <td scope="row">{{$category->name}}</td>
            <td scope="row"><small>{{$category->created_at}}</small></td>
            <td scope="row"><small>{{$category->updated_at}}</small></td>
            <td>  <a href="{{ route('category.edit', ['id'=> $category->id ]) }}" class='btn btn-custom bg-info text-white'> Sửa </a> </td>
            <td> <a href="{{ route('category.delete', ['id'=> $category->id ]) }}" class='btn btn-custom bg-orange'> Xóa </a> </td>
            </tr>
          @endforeach
        </tbody>
      </table>