@extends('sanpham')
@section('content')
<style>
    .custom-button {
        background-color: black;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 20px;
        cursor: pointer;
        margin-left: 10%;
    }
    .styled-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 18px;
    text-align: left;
    margin: 25px 0;
}

.styled-table thead tr {
    background-color: black;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border: 1px solid #dddddd;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.styled-table img {
    max-width: 100px;
    height: auto;
}

.btn {
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

.btn-primary, .btn-danger {
    background-color: black;
    color: white;
}


</style>
<form action="{{route('sanpham.create') }}">
    <button class="custom-button">Tạo Mới</button>
</form>
<main>
    <div class="container my-5">
        <h2></h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Tên sản phẩm</th>
                    <th>Màu sắc</th>
                    <th>Kích cỡ</th>
                    <th>Ảnh</th>
                    <th>Loại</th>
                    <th>Số lượng</th>
                    <th>Mô tả</th>
                    <th>Cập nhật</th>
                    <th>Giá tiền</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sanphams as $index => $sanpham)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$sanpham->tensanpham}}</td>
                    <td>{{$sanpham->mausac}}</td>
                    <td>{{$sanpham->kichco}}</td>
                    <td><img src="{{asset('/imgapple/'.$sanpham->img)}}" alt="Ảnh sản phẩm" style="width: 100px;"></td>
                    <td>{{$sanpham->tenloai}}</td>
                    <td>{{$sanpham->soluongton}}</td>
                    <td>{{$sanpham->mota}}</td>
                    <td>{{$sanpham->capnhat}}</td>
                    <td>{{$sanpham->giatien}}</td>
                    <td>
                        <form method="GET" action="{{route('sanpham.edit', ['id' => $sanpham->idsanpham])}}">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </form>
                        <form method="POST" action="{{ route('sanpham.destroy', ['id' => $sanpham->idsanpham]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xoá</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection