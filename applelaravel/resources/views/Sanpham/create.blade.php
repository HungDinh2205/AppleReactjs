@extends('sanpham')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị</title>
    <link rel="stylesheet" href="/css/quantri1.css">
</head>
<style>
    .container-fluid {
        /* Thêm các thuộc tính CSS của bạn tại đây */
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-right: 170px; /* Đẩy về bên trái */
        margin: 0 auto;
        display: block;
    }

    .card {
        /* Thêm các thuộc tính CSS cho thẻ card tại đây */
        background-color: #ffffff;
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        /* Thêm các thuộc tính CSS cho form group tại đây */
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
    }
    button {
        background-color: #000000; /* Nền đen */
        color: #ffffff; /* Chữ trắng */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer
        }
</style>
<body>
    <div class="">
            <div class="container-fluid">
         <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Thêm sản phẩm</h1>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <!-- <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Thông tin sản phẩm</h6>
                    </div> -->
                    <div class="card-body">
                        <form method="POST" action="{{route('sanpham.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm
                                    <span title="Tên sản phẩm không bao gồm các giá trị thuộc tính như màu sắc, chất liệu, kích cỡ...">
                                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" font-size="16" color="primary" style="font-size: 16px; cursor: pointer;">
                                            <path d="M7.4 5v1.2h1.2V5H7.4ZM7.4 8.6V11h1.8V9.8h-.6V7.4H6.8v1.2h.6Z" fill="#0088FF"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C4.688 2 2 4.688 2 8s2.688 6 6 6 6-2.688 6-6-2.688-6-6-6ZM3.2 8c0 2.646 2.154 4.8 4.8 4.8s4.8-2.154 4.8-4.8S10.646 3.2 8 3.2A4.806 4.806 0 0 0 3.2 8Z" fill="#0088FF"></path>
                                        </svg></span>
                                </label>
                                <input type="text" name="tensanpham" id="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Màu sắc</label>
                                        <input type="text" name="mausac" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kích cỡ
                                            <span title="Tên sản phẩm không bao gồm các giá trị thuộc tính như màu sắc, chất liệu, kích cỡ...">
                                                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" font-size="16" color="primary" style="font-size: 16px; cursor: pointer;">
                                                    <path d="M7.4 5v1.2h1.2V5H7.4ZM7.4 8.6V11h1.8V9.8h-.6V7.4H6.8v1.2h.6Z" fill="#0088FF"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C4.688 2 2 4.688 2 8s2.688 6 6 6 6-2.688 6-6-2.688-6-6-6ZM3.2 8c0 2.646 2.154 4.8 4.8 4.8s4.8-2.154 4.8-4.8S10.646 3.2 8 3.2A4.806 4.806 0 0 0 3.2 8Z" fill="#0088FF"></path>
                                                </svg></span>
                                        </label>
                                        <input type="text" name="kichco" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input type="file" name="img" id="" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Loai</label>
                                        <select name="idLoai" id="" class="form-control">
                                            @foreach($loais as $loai)
                                            <option value="{{$loai->idLoai}}">{{$loai->tenloai}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input type="text" name="soluongton" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mô tả
                                            <span title="Tên sản phẩm không bao gồm các giá trị thuộc tính như màu sắc, chất liệu, kích cỡ...">
                                                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" font-size="16" color="primary" style="font-size: 16px; cursor: pointer;">
                                                    <path d="M7.4 5v1.2h1.2V5H7.4ZM7.4 8.6V11h1.8V9.8h-.6V7.4H6.8v1.2h.6Z" fill="#0088FF"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C4.688 2 2 4.688 2 8s2.688 6 6 6 6-2.688 6-6-2.688-6-6-6ZM3.2 8c0 2.646 2.154 4.8 4.8 4.8s4.8-2.154 4.8-4.8S10.646 3.2 8 3.2A4.806 4.806 0 0 0 3.2 8Z" fill="#0088FF"></path>
                                                </svg></span>
                                        </label>
                                        <input type="text" name="mota" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Cập nhật
                                            <span title="Tên sản phẩm không bao gồm các giá trị thuộc tính như màu sắc, chất liệu, kích cỡ...">
                                                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" font-size="16" color="primary" style="font-size: 16px; cursor: pointer;">
                                                    <path d="M7.4 5v1.2h1.2V5H7.4ZM7.4 8.6V11h1.8V9.8h-.6V7.4H6.8v1.2h.6Z" fill="#0088FF"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C4.688 2 2 4.688 2 8s2.688 6 6 6 6-2.688 6-6-2.688-6-6-6ZM3.2 8c0 2.646 2.154 4.8 4.8 4.8s4.8-2.154 4.8-4.8S10.646 3.2 8 3.2A4.806 4.806 0 0 0 3.2 8Z" fill="#0088FF"></path>
                                                </svg></span>
                                        </label>
                                        <input type="text" name="capnhat" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Giá tiền
                                            <span title="Tên sản phẩm không bao gồm các giá trị thuộc tính như màu sắc, chất liệu, kích cỡ...">
                                                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" font-size="16" color="primary" style="font-size: 16px; cursor: pointer;">
                                                    <path d="M7.4 5v1.2h1.2V5H7.4ZM7.4 8.6V11h1.8V9.8h-.6V7.4H6.8v1.2h.6Z" fill="#0088FF"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C4.688 2 2 4.688 2 8s2.688 6 6 6 6-2.688 6-6-2.688-6-6-6ZM3.2 8c0 2.646 2.154 4.8 4.8 4.8s4.8-2.154 4.8-4.8S10.646 3.2 8 3.2A4.806 4.806 0 0 0 3.2 8Z" fill="#0088FF"></path>
                                                </svg></span>
                                        </label>
                                        <input type="text" name="giatien" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary text-right">Tạo</button>
                        </form>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/SanPham.js"></script>
</body>
</html>
@endsection
