
<header>
    <nav class="navbar" id="nav">
        <!--logo-->
        <div class="nav-links">
            <img src="{{asset('images/Navbar/Logo.png')}}" alt="" class="logo">
            <h2 class="logo-text"><span>GAMING</span> ACCESSORIES</h2>
        </div>

        <i class="fa-solid fa-bars menu-toggle"></i>
        <div class="nav-bar">
            <div class="search-box">
                <input class="search-txt" type="text" placeholder="Type to Search">
                <a href="#" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>

            <ul class="nav" id="link-sec">
                <li><a href="{{route('/userpage')}}">Home</a></li>
                <li>
                    <div class="font-logo">
                        <a href="#"><i class="fa-solid fa-user"></i>{{$user_name}}
                            <i class="fa-solid fa-chevron-down" style="font-size: .8rem;"></i>
                            </a>
                    </div>
                <ul class="first-nav-nav">
                    <li><a href="">Profile</a></li>
                    <li><a href="">Dasboard</a></li>
                    <li>
                        <a class="logout" id="login-btn"><form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input type="submit" id="logout" class="nav-link" value="logout" style="color: red; margin-left: -15px" ></input>
                        </form></a>
                    </li>
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
                    <li class=""><a href="" onclick="togglePopup()" class="" id="link">Keyboard</a></li>
                    <li class=""><a href="" onclick="togglePopup()" class="">Headset</a></li>
                    <li class=""><a href="" onclick="togglePopup()" class="">Mouse</a></li>
                    <li class=""><a href="" onclick="togglePopup()" class="">PS Controller</a></li>
                    <li class=""><a href="" onclick="togglePopup()"class="">Microphone</a></li>
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
        <li class=""><a href="" class="">Keyboard</a></li>
        <li class=""><a href="" onclick="togglePopup()" class="">Headset</a></li>
        <li class=""><a href="" onclick="togglePopup()" class="">Mouse</a></li>
        <li class=""><a href="" onclick="togglePopup()" class="">PS Controller</a></li>
        <li class=""><a href="" onclick="togglePopup()"class="">Microphone</a></li>
    </ul>
</div>
