@extends('hoadon')
@section('content')
<div class="container">
    <h1 class="mt-5 mb-4">Lịch sử mua hàng</h1>
    @foreach($hoadons as $hoadon)
    <div class="container cart">
        <h2>Shopping Cart</h2>
        <table>
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
                <tr>
                    <td style="width: 30%"><img src="{{asset('/imgapple/'.$hoadon->img)}}" alt="Product" style="width: 50%"></td>
                    <td>{{$hoadon->username}}</td>
                    <td>{{$hoadon->tensanpham}}</td>
                    <td>{{$hoadon->soluong}}</td>
                    <td>{{$hoadon->mau}}</td>
                    <td>{{$hoadon->kichco}}</td>
                    <td>{{$hoadon->gia}}</td>
                    <td>{{$hoadon->ngayban}}</td>
                    <td>{{$hoadon->tonghoadon}}</td>
                    <td>
                        <form method="POST" action="{{ route('hoadon.destroy', ['id' => $hoadon->idhoadon]) }}">
                            @csrf
                            @method('DELETE')
                            <button>Xoá</button>
                        </form>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <!-- </div> -->
       
        @endforeach
    </div>
    @endsection