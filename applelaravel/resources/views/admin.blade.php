<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            /* Set default text color to dark gray */
            font-family: Arial, sans-serif;
            /* Use a common font for better compatibility */
        }

        header {
            background-color: #000000;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .navbar-brand img {
            height: 30px;
            margin-right: 10px;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #000000;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .navbar {
            background-color: #000000;
            /* Màu nền cho thanh điều hướng */
        }

        .navbar-nav {
            list-style: none;
            /* Loại bỏ dấu chấm tròn mặc định của danh sách */
            margin: 0;
            /* Xóa các margin mặc định */
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
            /* Khoảng cách giữa các mục */
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            /* Màu văn bản trắng */
            transition: color 0.3s;
            /* Hiệu ứng chuyển đổi màu khi hover */
            text-decoration: none;
            /* Loại bỏ gạch chân mặc định */
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
            /* Màu văn bản trắng khi hover */
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <ion-icon name="logo-apple" style="font-size: 35px;"></ion-icon>

            <h1>Apple Admin Dashboard</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/store">Cửa hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sanpham">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hoadonAdmin">Hoá đơn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/showTaikhoan">Tài khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/apple">Apple</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dangky/create">Đăng ký</a>
                </li>
                <!-- Add more navigation links as needed -->
            </ul>
        </div>
    </nav>

    <main >
        <div class="container my-5" >
            <img src="imgapple/logo_apple.png" style="width:100%;"></img>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Apple Inc.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>