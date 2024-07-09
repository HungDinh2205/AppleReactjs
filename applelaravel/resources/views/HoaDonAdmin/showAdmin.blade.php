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
    width: 100px;
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
<main>
    <div class="container my-5">
        <h2></h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Ảnh</th>
                    <th>Tài khoản</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Màu</th>
                    <th>Kích cỡ</th>
                    <th>Giá tiền sản phẩm</th>
                    <th>Ngày đặt</th>
                    <th>Tổng đơn tiền </th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hoadons as $showadmin => $hoadon)
                <tr>
                    <td><img src="{{asset('/imgapple/'.$hoadon->img)}}" alt="Product" style="width: 50%"></td>
                    <td>{{$hoadon->username}}</td>
                    <td>{{$hoadon->tensanpham}}</td>
                    <td>{{$hoadon->soluong}}</td>
                    <td>{{$hoadon->mau}}</td>
                    <td>{{$hoadon->kichco}}</td>
                    <td>{{$hoadon->gia}}</td>
                    <td>{{$hoadon->ngayban}}</td>
                    <td>{{ number_format($hoadon->tonghoadon, 0, ',', '.') }}</td>
                    <td>
                        <form method="POST" action="{{ route('hoadon.destroy', ['id' => $hoadon->idhoadon]) }}">
                            @csrf
                            @method('DELETE')
                            <button style="background-color:black; color: white">Xoá</button>
                        </form>
                    </td>
                    @endforeach
            </tbody>
        </table>

    </div>
</main>
@endsection