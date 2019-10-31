<table class="w-100 mt-5">
    <thead class=''>
      <tr>
        <th>Tên cô dâu</th>
        <th>Hình</th>
        <th>Tên chú rể</th>
        <th>Hình</th>
        <th>Hình chung</th>
        <th class='th-action'>Sửa</th>
        <th class='th-action'>Xóa</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($weddings as $wedding)
      <tr>
        <td scope="row">{{$wedding->wife->name}}</td>
        <td scope="row"><img class="image-wedding"  src="{{asset($wedding->wife->image)}}" alt=""></td>
        <td scope="row">{{$wedding->husband->name}}</td>
        <td scope="row"><img  class="image-wedding" src="{{asset($wedding->husband->image)}}" alt=""></td>
        <td scope="row"><img  class="image-banner-wedding" src="{{asset($wedding->banner)}}" alt=""></td>
        <td>  <a href="{{ route('story.edit', ['id'=> $wedding->id ]) }}" class='btn btn-custom bg-info text-white'> Sửa </a> </td>
        <td> <a href="{{ route('story.delete', ['id'=> $wedding->id ]) }}" class='btn btn-custom bg-orange'> Xóa </a> </td>
        </tr>
      @endforeach
    </tbody>
  </table>