<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS link -->
    <link rel="stylesheet" href="../style.css">
    <!-- Logo link -->
    <link rel="icon" type="image/x-icon" href="../images/logo.svg">
    <!-- Contentful JS script -->
    <script src="https://cdn.jsdelivr.net/npm/contentful@latest/dist/contentful.browser.min.js"></script>
    <!-- JS script link -->
    <script src="../main.js" type="module" defer></script>
    <title>Handmade Leather Goods</title>
</head>

<body>
    <!-- navbar -->
    <nav class="nav-bar">
        <div class="nav-bar-head-center">
            <!-- search-bar input -->
            <div class="nav-search-bar">
                <!-- <input class="search-bar-input" type="text" placeholder="Search..." autocomplete="off"> -->
            </div>
            <!-- brand name & logo -->
            <div class="nav-brand-logo">
                <img src="../images/logo.svg" alt="logo origami bird" />
                <h1>
                    <span>CUT & STITCH</span>
                    <span>by hand</span>
                </h1>
            </div>
            <div class="nav-social-login-cart">
                <!-- social media links -->
                <div class="nav-social">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/martin.leathercraft/"><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
                <!-- login link -->
                <div class="nav-login">
                    <i class="fa-solid fa-user"></i>
                    Log In
                </div>
                <!-- shopping cart -->
                <div class="nav-cart-btn">
                    <span class="cart-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </span>
                    <div class="cart-items">0</div>
                    <!-- <p class="">Cart</p> -->
                </div>
            </div>
        </div>
        <!-- main menu categories -->
        <div class="nav-bar-menu-center">
            <ul class="nav-menu">
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="./shopall.php">Shop all</a></li>
                <li><a href="./ourstory.php">Our Story</a></li>
                <!-- <li><a href="">Our Craft</a></li> -->
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- end of navbar -->
    <!-- contact form -->
    <section class="contact-section">
        <div class="contact-left">
            <div class="contact-center">
                <p>contact</p>
                <p>if you have any questions, <br>please feel free to contact with me.</p>
                <p class="address">60-000 Poznań, Poland<br>Poznańska 1</p>
                <p class="phone-email">Tel. +48 123 456 789<br>Email: martin.leathercraft@gmail.com</p>
                <div class="contact-social">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/martin.leathercraft/"><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="contact-right">
            <form class="contact-form" action="" method="post">
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone (optional)">
                <input type="text" name="message" placeholder="Type your message here...">
                <input type="submit" value="Send">
            </form>
        </div>
    </section>
    <!-- end of contact form -->
    <!-- subscribe -->
    <section class="subscribe-section">
        <div class="subscribe-center">
            <h1 class="subscribe-title">subscribe and stay on top of our latest news and promotions</h1>
            <div class="input-email">
                <input type="text" placeholder="Enter your email here...">
                <button class="subscribe-btn">Subscribe</button>
            </div>
        </div>
    </section>
    <!-- end of subscribe -->
    <!-- log in cart -->
    <div class="login-cart-center">
        <!-- <div class="login-cart-center <?php if (isset($_SESSION['error'])) echo $_SESSION['show'] ?>" <?php if (isset($_SESSION['logged'])) echo "data-logged=true" ?>> -->
        <span class="login-close">
            <i class="fas fa-window-close"></i>
        </span>
        <div class="login">
            <form action="../sources/php/login.php" method="POST" class="login-form">
                <label for="login">Login</label>
                <input type="text" name="login" placeholder="type your login">
                <label for="pass">Password</label>
                <input type="password" name="pass" placeholder="type your password">
                <input type="submit" value="Log in">
                <!-- <?php if (isset($_SESSION['error'])) echo $_SESSION['error'] ?> -->
            </form>
        </div>
        <div class="register">
            <form action="" class="register-form">
                <label for="name">Login</label>
                <input type="text" name="login" placeholder="type your login">
                <label for="email">E-mail</label>
                <input type="text" name="email" placeholder="type your email">
                <label for="pass1">Password</label>
                <input type="password" name="pass1" placeholder="type your password">
                <label for="pass2">Password again</label>
                <input type="password" name="pass2" placeholder="type your password again">
                <input type="submit" value="Create new account">
            </form>
        </div>
    </div>
    <!-- end of log in cart -->
    <!-- shopping cart -->
    <div class="cart-overlay">
        <div class="cart">
            <span class="close-cart">
                <i class="fas fa-window-close"></i>
            </span>
            <h2>your shopping cart</h2>
            <div class="cart-content">
                <!-- single cart item -->
                <!-- <div class="cart-item">
                    <img src="./images/product-1.jpeg" alt="product">
                    <div>
                        <h4>queen bed</h4>
                        <h5>$9.00</h5>
                        <span class="remove-item">remove</span>
                    </div>
                    <div>
                        <i class="fas fa-chevron-up"></i>
                        <p class="item-amount">1</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div> -->
                <!-- end of single cart item -->
            </div>
            <div class="cart-footer">
                <h3>
                    your total: $
                    <span class="cart-total">0</span>
                </h3>
                <button class="clear-cart banner-btn">clear cart</button>
            </div>
        </div>
    </div>
    <!-- end of shopping cart -->

</body>

</html>