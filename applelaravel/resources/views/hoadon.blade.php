<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store - Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
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

        .cart {
            padding: 50px 0;
        }

        .cart table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart th,
        .cart td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .cart th {
            background-color: #f8f9fa;
        }

        .cart img {
            max-width: 100px;
            height: auto;
        }

        .cart button {
            padding: 8px 16px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .cart button:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#" style="margin-left:20px">Apple Store</a>
        <li class="nav-item">
            <a class="nav-link" href="/login" style="color: white">Đăng nhập</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dangky/create" style="color: white">Đăng ký</a>
        </li>
    </nav>

    <!-- Shopping Cart -->
    @yield('content')

    <div class="text-right">
        <form action="{{route('store.user') }}">
            <button style="background-color:black; color: white">Continue Shopping</button>
        </form>
        <button style="background-color:black; color: white">Update Cart</button>
        <button style="background-color:black; color: white">Checkout</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>