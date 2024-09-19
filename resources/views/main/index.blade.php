<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/Style.css')}}">
    <title>Gaming Accessories</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/7b9bcf59a2.js" crossorigin="anonymous"></script>

    <!-- icon -->
    <link rel="shortcut icon" type="image/png" href="images/Background/Background.jpg"></link>

    <!-- Google Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- Signup Form Js -->
    <!-- <script src="javascript/Signup-form.js"></script> -->
</head>
<body onload="slider()">

<header>
    <nav class="navbar" id="nav">
        <!--logo-->
        <div class="nav-links">
            <img src="images/Navbar/Logo.png" alt="" class="logo">
            <h2 class="logo-text"><span>GAMING</span> ACCESSORIES</h2>
        </div>

        <i class="fa-solid fa-bars menu-toggle"></i>
        <div class="nav-bar">
            <div class="search-box">
                <input class="search-txt" type="text" placeholder="Type to Search">
                <a href="#" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>

            <ul class="nav" id="link-sec">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>
                    <div class="font-logo">
                        <a href="#"><i class="fa-solid fa-user"></i>Flackooo
                            <i class="fa-solid fa-chevron-down" style="font-size: .8rem;"></i>
                            </a>
                    </div>
                <ul class="first-nav-nav">
                    <li><a href="">Profile</a></li>
                    <li><a href="">Dasboard</a></li>
                    <li><a href="{{ route('login') }}" class="logout" id="login-btn">Login</a></li>
                    <li><a href="{{ route('register') }}" class="logout" id="login-btn">Register</a></li>
                </ul>
            </li>
            </ul>

            <ul class="nav">
                <li>
                    <div class="sec-font-logo">
                        <a href="#"><i class="fa-brands fa-product-hunt"></i>Product List
                            <i class="fa-solid fa-chevron-down" style="font-size: .8rem;"></i>
                            </a>
                    </div>
                <ul class="sec-nav-nav">
                    <li class=""><a href="#" class="">Home</a></li>
                    <li class=""><a href="{{route('login')}}" onclick="togglePopup()" class="" id="link">Keyboard</a></li>
                    <li class=""><a href="{{route('login')}}" onclick="togglePopup()" class="">Headset</a></li>
                    <li class=""><a href="{{route('login')}}" onclick="togglePopup()" class="">Mouse</a></li>
                    <li class=""><a href="{{route('login')}}" onclick="togglePopup()" class="">PS Controller</a></li>
                    <li class=""><a href="{{route('login')}}" onclick="togglePopup()"class="">Microphone</a></li>
                </ul>
            </li>
            </ul>
        </div>

        <div class="humburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
</header>

<div class="nav-bar">
    <ul class="link-container">
        <li class=""><a href="{{route('login')}}" class="">Keyboard</a></li>
        <li class=""><a href="{{route('login')}}" onclick="togglePopup()" class="">Headset</a></li>
        <li class=""><a href="{{route('login')}}" onclick="togglePopup()" class="">Mouse</a></li>
        <li class=""><a href="{{route('login')}}" onclick="togglePopup()" class="">PS Controller</a></li>
        <li class=""><a href="{{route('login')}}" onclick="togglePopup()"class="">Microphone</a></li>
    </ul>
</div>


<div class="text-box">
    <h1>Welcome To Gaming Accessories</h1>
        <div class="background">
            <img src="images/Background/Background.jpg" id="slideImg" >
        </div>
</div>


<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="images/features/f1.png" alt="">
        <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
        <img src="images/features/f2.png" alt="">
        <h6>Online Order</h6>
    </div>
    <div class="fe-box">
        <img src="images/features/f3.png" alt="">
        <h6>Save Money</h6>
    </div>
    <div class="fe-box">
        <img src="images/features/f4.png" alt="">
        <h6>Promotion</h6>
    </div>
    <div class="fe-box">
        <img src="images/features/f5.png" alt="">
        <h6>Happy Sell</h6>
    </div>
    <div class="fe-box">
        <img src="images/features/f6.png" alt="">
        <h6>F24/7 Support</h6>
    </div>
</section>


<section id="product1">
    <h2>Featured Product</h2>
    <p>Gaming Accessories Collection</p>
    <div class="pro-container">
        <div class="pro" onclick="win()">
            <img src="images/ProductList/keyboard/k1/pic1.png" alt="">
            <div class="des">
                <span>ROG</span>
                <h5>ASUS ROG Strix Scope II 96 Wireless Gaming Keyboard, Tri-Mode Connection, Dampening Foam & Switch-Dampening Pads, Hot-Swappable Pre-lubed ROG / UV-Coated ABS Keycaps, RGB-Black ( NX Snow / Storm Switch )</h5>
                <h4>₱7,420.00</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro" onclick="k2()">
            <img src="images/ProductList/keyboard/k2/pic1.png" alt="">
            <div class="des">
                <span>ROG</span>
                <h5>ASUS ROG STRIX SCOPE NX DELUXE WIRELESS NX RED XA09</h5>
                <h4>₱6,295.00</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro" onclick="k3()">
            <img src="images/ProductList/keyboard/k3/pic1.png" alt="">
            <div class="des">
                <span>ROG</span>
                <h5>Asus ROG Falchion RX Low Profile 65% Compact RGB Tri-Mode Wireless Gaming Keyboard</h5>
                <h4>₱7,810.00</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro" onclick="k4()">
            <img src="images/ProductList/keyboard/k4/pic1.png" alt="">
            <div class="des">
                <span>ARMATA</span>
                <h5>ZYPHER ARMATA Mechanical Gaming Keyboard (Blue / Brown Switch)</h5>
                <h4>₱1,399.00</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro" onclick="k5()">
            <img src="images/ProductList/keyboard/k5/pic1.png" alt="">
            <div class="des">
                <span>LOFREE</span>
                <h5>Lofree Flow 84 Keys Dual Mode Low Profile Mechanical Keyboard (Silver)</h5>
                <h4>₱6,295.00</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro" onclick="k6()">
            <img src="images/ProductList/keyboard/k6/pic1.png" alt="">
            <div class="des">
                <span>REDRAGON</span>
                <h5>Redragon Azure K652GG-RGB-Pro 75% Low-Profile Wireless Mechanical Keyboard</h5>
                <h4>₱3,550.00</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro">
            <img src="images/ProductList/headset/h1/pic1.png" alt="">
            <div class="des">
                <span>B39</span>
                <h5>Portable Wireless Bluetooth "B39" Headphone RGB Breathing Light HiFi Music Gaming Built-in Mic Noise-Cancelling Folding</h5>
                <h4>₱104.76</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro">
            <img src="images/ProductList/headset/h2/pic1.png" alt="">
            <div class="des">
                <span>JBL</span>
                <h5>【COD】Headphones bluetooth wireless JBL TUNE 510BT Plus Wireless Headphones Bluetooth V5.1 Head Beam Extension Quality Craftsmanship 850mAh Battery Capacity Over-the-Ear Headphone /Wireless earphone /wireless headset/wireless head/wireless headphones</h5>
                <h4>₱1,289.00</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro">
            <img src="images/ProductList/headset/h3/pic1.png" alt="">
            <div class="des">
                <span>HYPER X</span>
                <h5>HyperX Cloud Stinger 2 Core PS5 Lightweight Easy Access Audio Controls Wired Over Ear Gaming Headset with mic Gaming Headphone</h5>
                <h4>₱2,061.00</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro">
            <img src="images/ProductList/headset/h4/pic1.png" alt="">
            <div class="des">
                <span>RAZER</span>
                <h5>Razer Barracuda X 2022 Wireless Multi-Platform Gaming Headset [Mercury]</h5>
                <h4>₱4,450.00</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro">
            <img src="images/ProductList/headset/h5/pic1.png" alt="">
            <div class="des">
                <span>LOGITECH</span>
                <h5>Logitech Zone Vibe 100 Lightweight Noise Canceling Mic Bluetooth Wireless Over Ear Headset</h5>
                <h4>₱4,184.07</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

        <div class="pro">
            <img src="images/ProductList/headset/h6/pic1.png" alt="">
            <div class="des">
                <span>LOGITECH</span>
                <h5>Logitech G733 Lightspeed Wireless RGB Gaming Headset White</h5>
                <h4>₱5,995.00</h4>
            </div>
            <a href="#" ><i class="fas fa-shopping-cart cart" ></i></a>
        </div>

    </div>
</section>



<div class="low-part">
    <h3>Explore Our Product</h3>
</div>

    <!--Products-->
    <div class="slider">
        <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2">
            <input type="radio" name="r" id="r3">
            <input type="radio" name="r" id="r4">
            <input type="radio" name="r" id="r5">

                <img src="images/Radio Button/Image_1.jpg" class="m1" alt="img1">
                <img src="images/Radio Button/Image_2.jpg" class="m2" alt="img2">
                <img src="images/Radio Button/Image_3.jpg" class="m3" alt="img3">
                <img src="images/Radio Button/Image_4.jpg" class="m4" alt="img4">
                <img src="images/Radio Button/Image_5.jpg" class="m5" alt="img4">
        </div>
        <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
            <label for="r5" class="bar"></label>
        </div>
    </div>



<footer class="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h1 class="logo-text"><span>Gaming</span> Accessories</h1>
            <p>
                Unite gamers of diverse backgrounds to achieve their potential together in play. Through innovative technology and exceptional experiences, we can push boundaries to create a world without limits.
            </p>
            <div class="contact">
                <span><i class="fa-solid fa-phone"></i> &nbsp; 0966-410-0021</span>
                <span><i class="fa-solid fa-envelope"></i> &nbsp; rovicvillaueva15@gmail.com</span>
            </div>
            <div class="socials">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-google"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <!-- <div class="footer-section links">
            <h2>Quick Links</h2>
            <br>
            <ul>
                <li><a href=""><i class="fa-brands fa-facebook"></i><span>Facebook</span> </a></li>
                <li><a href=""><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                <li><a href=""><i class="fa-brands fa-google"></i> Google</a></li>
                <li><a href=""><i class="fa-brands fa-youtube"></i> Youtube</a></li>
                <li><a href=""><i class="fa-brands fa-linkedin"></i> Linkedin</a></li>
            </ul>
        </div> -->
        <div class="footer-section contact-form">
            <h2>Contact us</h2>
            <br>
            <form action="index.html" method="POST">
                <div class="contact-us">
                    <input type="email" class="text-input contact-input" placeholder="Your Email Address">
                    <textarea name="message" class="message-text contact-input" placeholder="Your Message"></textarea>
                </div>
                <div class="send-button">
                    <button class="btn btn-big contact-btn"><i class="fa-solid fa-envelope"></i>Send</button>
                </div>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        <p>copyright &copy;2024 Gaming Accessories.</p>
    </div>
</footer>

    {{-- Javascript --}}
    <script src="{{asset('javascript/script.js')}}"></script>
    <script src="{{asset('javascript/slider.js')}}"></script>
    <script src="{{asset('../javascript/Paging.js')}}"></script>


</body>
</html>
