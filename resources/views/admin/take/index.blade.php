@extends('layouts.app')
@section('content')
    <div class="card take">
        <div class="card-body">
            <a href="{{ route('take.insert')}}" class='btn btn-success'>Thêm gói chụp hình</a>
            <h4 class="card-title mt-3">Ban gia</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Tên gói dịch vụ</th>
                    <th scope="col">Giá tiền</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
            @foreach ($takes as $take)
                         <tr>
                            <td>{{$take->name}}</td>
                            <td>{{$take->amount}}</td>
                            <td><img src="{{asset($take->image)}}" alt=""></td>
                            <td><a href="{{route('take.edit',['id'=>$take->id])}}" class="btn btn-info">Sửa</a></td>
                            <td><a href="{{route('take.delete',['id'=>$take->id])}}" class="btn btn-warning" >Xóa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
