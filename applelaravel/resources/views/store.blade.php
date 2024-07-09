<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #000;
            padding: 15px 0;
            text-align: center;
            border-bottom: 4px solid #f8f9fa;
        }

        .navbar-brand {
            color: #fff;
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar-brand:hover {
            color: #ccc;
        }

        .navbar-nav {
            margin: auto;
        }

        .navbar-nav .nav-link {
            color: #fff;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: #666;
        }

        .jumbotron {
            background-image: url('https://via.placeholder.com/1500x800');
            /* Thay thế bằng hình ảnh thực tế */
            background-size: cover;
            height: 300px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            margin-bottom: 30px;
        }

        .jumbotron h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .jumbotron h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .product-list {
            text-align: center;
            margin: 50px auto;
        }

        .product-list h2 {
            font-size: 36px;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .product-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .product-card p {
            font-size: 18px;
            margin: 20px 0;
        }

        .footer {
            background-color: #343a40;
            padding: 30px 0;
            text-align: center;
            color: #fff;
        }

        .footer p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .product-card img {
            max-width: 100%;
            height: 200px;
            /* Chiều cao cố định */
            object-fit: cover;
            /* Đảm bảo hình ảnh không bị biến dạng */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            /* Đảm bảo khoảng cách đều giữa các cột */
        }

        .product-card {
            width: 100%;
            /* Đảm bảo 4 cột trên mỗi hàng */
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/loai/3">Mac</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/loai/1">iPad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/loai/2">iPhone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/loai/5">Watch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/loai/10">TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/loai/8">Vision</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/loai/9">Magsafe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/loai/6">Card</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/loai/4">AirPod</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/loai/7">Loa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dangky/create">Đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hoadonlist">Hoá đơn</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1 style="color: black">Welcome to Apple Store</h1>
        <h2 style="color: black">Discover the latest products from Apple</h2>
    </div>

    <!-- Product list -->
    <div class="container product-list">
        <h2>Featured Products</h2>
        <div class="row">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p>&copy; 2024 Apple Inc. All rights reserved.</p>
            <p>Terms of Use | Privacy Policy</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>