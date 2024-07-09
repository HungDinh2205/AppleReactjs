<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: #141414;
            color: #fff;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
        }

        .hero {
            background-image: url('imgapple/hero_3_apple_event_may__b01plfpy6uwi_large_2x.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 40px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #0070c9;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #005aa7;
        }

        .features {
            background-color: #f9f9f9;
            padding: 80px 0;
        }

        .features h2 {
            font-size: 36px;
            margin-bottom: 40px;
            text-align: center;
        }

        .feature-list {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .feature {
            flex: 0 0 calc(33.333% - 20px);
            text-align: center;
            margin-bottom: 40px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-10px);
        }

        .feature img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .feature h3 {
            margin: 20px 0;
            font-size: 24px;
        }

        .feature p {
            font-size: 16px;
            margin-bottom: 20px;
            padding: 0 20px;
        }

        .testimonials {
            background-color: #fff;
            padding: 80px 0;
        }

        .testimonials h2 {
            font-size: 36px;
            margin-bottom: 40px;
            text-align: center;
        }

        .testimonial {
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 40px;
        }

        .testimonial p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .testimonial cite {
            font-style: italic;
            font-size: 16px;
        }

        .news {
            background-color: #fff;
            padding: 80px 0;
        }

        .news h2 {
            font-size: 36px;
            margin-bottom: 40px;
            text-align: center;
        }

        .article {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .article:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .article-thumbnail {
            flex: 0 0 30%;
        }

        .article-thumbnail img {
            width: 100%;
            border-radius: 10px;
        }

        .article-content {
            flex: 0 0 70%;
            padding-left: 20px;
        }

        .article-content h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .article-content p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .contact {
            background-color: #141414;
            color: #fff;
            padding: 100px 0;
        }

        .contact h2 {
            font-size: 36px;
            margin-bottom: 40px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 18px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #0070c9;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 24px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #005aa7;
        }

        footer {
            background-color: #141414;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="/loai/3">Mac</a></li>
                    <li><a href="/loai/1">iPad</a></li>
                    <li><a href="/loai/5">Watch</a></li>
                    <li><a href="/loai/2">iphone</a><li>
                    <li><a href="/loai/10">TV</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="/loai/6">Card</a></li>
                    <li><a href="/loai/8">Vision</a></li>
                    <li><a href="/loai/7">Loa</a></li>
                    <li><a href="/loai/9">Magsafe</a></li>
                    <li><a href="/loai/4">AirPod</a></li>
                    <li><a href="/store">Cửa hàng</a></li>
                    <li><a href="/hoadonlist">Hoá đơn</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1 style="color:black">Welcome to Apple</h1>
                    <p style="color:black">Discover the latest innovations</p>
                    <a href="#" class="btn">Explore Now</a>
                </div>
                
            </div>
        </section>
        <section class="features">
            <div class="container">
                <h2>Discover Our Products</h2>
                <div class="feature-list">
                    <div class="feature">
                        <img src="imgapple/mac-card-40-macbook-air-m2-m3-202402.jpeg" alt="Mac">
                        <h3>Mac</h3>
                        <p>Power to do whatever you want.</p>
                    </div>
                    <div class="feature">
                        <img src="imgapple/iphone-card-40-iphone15hero-202309.jpeg" alt="iPhone">
                        <h3>iPhone</h3>
                        <p>A new era of iPhone.</p>
                    </div>
                    <div class="feature">
                        <img src="imgapple/ipad-card-40-pro-202210.jpeg" alt="iPad">
                        <h3>iPad</h3>
                        <p>Delightfully capable.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonials">
            <div class="container">
                <h2>What Our Customers Say</h2>
                <div class="testimonial">
                    <p>"I love my Apple products. They're reliable and beautifully designed."</p>
                    <cite>- John Doe</cite>
                </div>
                <div class="testimonial">
                    <p>"Apple has revolutionized the way I work and communicate. I can't imagine life without it."</p>
                    <cite>- Jane Smith</cite>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <h2>Latest News</h2>
                <div class="article">
                    <div class="article-thumbnail">
                        <img src="imgapple/mac-card-40-imac-24-202310.jpeg" alt="New MacBook Pro">
                    </div>
                    <div class="article-content">
                        <h3>Introducing the New iMac Pro</h3>
                        <p>Discover the powerful features of the new MacBook Pro, designed for creators and professionals.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
                <div class="article">
                    <div class="article-thumbnail">
                        <img src="imgapple/iphone-card-40-accessories-202403.jpeg" alt="iPhone 15">
                    </div>
                    <div class="article-content">
                        <h3>Apple Announces iPhone MagSafe</h3>
                        <p>Find out when you can get your hands on the latest iPhone, equipped with groundbreaking technology.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Apple Inc. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>