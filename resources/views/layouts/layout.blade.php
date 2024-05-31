<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Genius - @yield('title','Website')</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('views/login.blade.php') }}">
    <link rel="stylesheet" href="{{ asset('views/signup1st.blade.php') }}">
    <link rel="stylesheet" href="{{ asset('views/signupclient.blade.php') }}">
    <link rel="stylesheet" href="{{ asset('views/signupfreelancer.blade.php') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
            <header class="header">
                <div class="container">
                    <div class="logo">
                        <a href="{{route('home')}}" style="text-decoration: none"><span>Creative Genius</span></a>
                    </div>
                    <nav class="navigation">
                        <ul class="navbar">
                            {{-- <li><a href="#">Home</a></li> --}}
                            <li class="fprojects-dropdown">
                                <a href="#" class="fprojects-dropbtn">Finding Projects</a>
                                <div class="fprojects-dropdown-content">
                                  <a href="#">Find work for your skills.</a>
                                  <a href="#">Search and Filter</a>
                                  <a href="#">Project Listing</a>
                                  <a href="#">Project Details Page</a>
                                </div>
                              </li>
                            <li><a href="#">Managing Projects</a></li>
                            <li><a href="#">Payments & Finances</a></li>
                            <li><a href="#">Tips for Success</a></li>
                            <li><a href="#">Safety & Security</a></li>
                            <li><a href="#">Community & Support</a></li>
                            <li><a href="#">Conclusion</a></li>
                        </ul>
                    </nav>


                    <div class="header-btn">
                        <a href="{{route('login')}}"  class="btn btn-outline-success" id="login-btn">Log In</a>
                        <a href="{{route('client-freelancer')}}" class="btn btn-outline-success" id="signup-btn">Sign Up</a>    
                        <img src="{{asset('images/menubar.svg')}}" alt="MenuBarlogo" class="bx Menubar">
                    </div>

                

                </div>

                <hr class="separator">
                <div class="support-links">
                    <ul>
                        <li><a href="#">Get Help</a></li>
                        <li><a href="#">Customer Support</a></li>
                        <li><a href="#">Pricing & Commission</a></li>
                        <li><a href="#">Project Support</a></li>
                    </ul>
                </div>
            </header>

            <main> 
                @yield('content')
            </main>

            {{-- footer --}}
            <footer>
                <div class="upper-part">
                    <div class="right">
                        <span>Terms of Services</span>&nbsp &nbsp
                        <span>Privacy Policy</span>&nbsp &nbsp
                        <span>Site map</span>
                    </div>

                    <div class="left">
                        <span>Follow Us</span>&nbsp; &nbsp;
                        <a href="#"><img src="{{asset('images/facebook-icon.png')}}" alt="facebook-icon-png" height="20px" width="20px"></a>&nbsp;&nbsp;
                        <a href="#"><img src="{{asset('images/instagram-icon.png')}}" alt="instagram-icon-png" height="20px" width="20px" ></a>&nbsp;&nbsp;
                        <a href="#"><img src="{{asset('images/linkedin.png')}}" alt="linkedin-icon-png" height="20px" width="20px"></a>&nbsp;&nbsp;
                        <a href="#"><img src="{{asset('images/twitter.png')}}" alt="twitter-icon-png" height="20px" width="20px"></a>
                    </div>
                </div>

                <div class="lower-part">
                    <div class="fcontainer">
                        <h4>About</h4>
                        <ul>
                            <li>
                                <a href="">About Us</a>
                            </li>
                            <li>
                                <a href="">Become Seller</a>
                            </li>
                        </ul>
                    </div>

                    <div class="fcontainer">
                        <h4>Categories</h4>
                        <ul>
                            <li>
                                <a href="">Design & Creative</a>
                            </li>
                            <li>
                                <a href="">Development IT</a>
                            </li>
                            <li>
                                <a href="">Music & Audio</a>
                            </li>
                            <li>
                                <a href="">Programming & Tech</a>
                            </li>
                            <li>
                                <a href="">Digital Marketing</a>
                            </li>
                            <li>
                                <a href="">Financing & Accounting</a>
                            </li>
                            <li>
                                <a href="">Writing & Translation</a>
                            </li>
                            <li>
                                <a href="">Trending </a>
                            </li>
                            <li>
                                <a href="">Lifestyle</a>
                            </li>
                            
                        </ul>
                    </div>

                    <div class="fcontainer">
                        <h4>Support</h4>
                        <ul>
                            <li>
                                <a href="">Help & Support</a>
                            </li>
                            <li>
                                <a href="">FAQ</a>
                            </li>
                            <li>
                                <a href="">Contact Us</a>
                            </li>
                            <li>
                                <a href="">Services</a>
                            </li>
                            <li>
                                <a href="">Terms of Services</a>
                            </li>
                        </ul>
                    </div>

                    <div class="fcontainer">
                        <h4>Subscribe</h4>
                        <div class="input-group  mb-3 w-150" style="padding-left: 25px">
                            <input type="text" class="form-control  " placeholder="Your Email here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">Send</span>
                        </div>

                        <h4>Apps</h4>
                        <ul>
                            <li>
                                <a href="">IOS App</a>
                            </li>
                            <li>
                                <a href="">Android App</a>
                            </li>
                        </ul>    
                    </div>
                </div>
            </footer>   

            <script>
                let menu = document.querySelector('.Menubar');
                let navbar = document.querySelector('.navbar');

                menu.onclick =() => {
                    menu.classList.toggle("bx-x");
                    navbar.classList.toggle("open");

                }

            </script>
     
</body>
</html>
