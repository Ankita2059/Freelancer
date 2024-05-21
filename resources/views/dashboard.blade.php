<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Genius</title>
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
                <span>logo</span>
            </div>
            <nav class="navigation">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Finding Projects</a></li>
                    <li><a href="#">Managing Projects</a></li>
                    <li><a href="#">Payments & Finances</a></li>
                    <li><a href="#">Tips for Success</a></li>
                    <li><a href="#">Safety & Security</a></li>
                    <li><a href="#">Community & Support</a></li>
                    <li><a href="#">Conclusion</a></li>&nbsp &nbsp &nbsp
                </ul>
                <img src="{{asset('images/searchicon.png')}}" alt="searchicon-png" height="60px" width="60px">
                <a href="{{route('login')}}"  class="btn btn-outline-success">Log In</a> &nbsp &nbsp
                <a href="{{route('client-freelancer')}}" class="btn btn-outline-success" >Sign Up</a>    
            </nav>
         </div>
         {{-- <a href="{{route('login')}}"class="btn btn-outline-success"> Login</a> --}}
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

    <section class="hometext">
        <img class="mainimg" src="{{asset('images/mainimg.jpg')}}" alt="home-image" height="400px" width="400px">
        <h2>"Hire Experts & Get Your Any Job Done"</h2>
        <h3>Work with Talented people at the most affordable price to get the most out of your time and cost.</h3>
        <a href="#" class="btn btn-outline-success">What are you looking for?</a>
        <h4>Trusted by</h4>
        <img src="{{asset('images/microsoftlogo.png')}}" alt="microsoft-image" height="70px" width="90px">
        <img src="{{asset('images/airbnblogo.png')}}" alt="airbnb-image" height="70px" width="90px">
        <img src="{{asset('images/biselllogo.png')}}" alt="bisell-image" height="70px" width="90px">
    </section>

    
  <section class="youthcontent"> 
       <img src="{{asset('images/youth.jpg')}}" alt="youth-image" height="500px" width="750px">
       <div class="description">
           <h2>How new youth earning money in India?</h1>
           <p>In recent years,Indian youth have been increasingly turning to freelancing to earn
            money and gain professional experience. Platforms like Creative Genius have become a 
            cornerstone in this shift,offering young talents an opportunity to connect with 
            clients globally and work on diverse projects.
           </p>
           <br>
          <button type="button" class="btn btn-success">Explore More</button>
       </div>
  </section>

  <!-- services -->
       <section class="services">
          <div class="services-btn">
             <h2>Popular Services</h2>
             <span>Most viewed and all-time top-selling services</span>
             <div class="tawbutton">
               <a href="#" class="btn btn-outline-success" style="border-radius: 50px; width:70px">Tech</a> &nbsp &nbsp
               <a href="#" class="btn btn-outline-success" style="border-radius: 50px; width:70px">Art</a>  &nbsp &nbsp
               <a href="#" class="btn btn-outline-success" style="border-radius: 50px">Writing</a>
             </div>
          </div>

            <div class="images">
                <div class="image-content">
                    <img src="{{asset('images/tech.jpeg')}}" alt="tech-image">
                    <p>Connect for expert advice.</p>
                </div>
                <div class="image-content">
                    <img src="{{asset('images/code.jpeg')}}" alt="code-image">
                    <p>Explore and customize project packages.</p>
                </div>
                <div class="image-content">
                    <img src="{{asset('images/write.jpeg')}}" alt="write-image">
                    <p>Find freelancers with the exact skills you need.</p>
                </div>
            </div>
       </section>


{{-- freelancer --}}
       <section class="freelancer">
            <div class="fcontent">
                <h2 class="head">How <br> <span>Creative Genius</span><br> Helping Freelancers to build their dream job?</h2>
                <p>Access the top 1% of talent on Creative Genius,and a full suite of hybrid workforce management tools.
                    This is how innovation works now.Access expert talent to fill your skill gaps.
                    Control your workflow: hire, classify and pay your talent.
                    Partner with Creative Genius for end-to-end support.
                </p>
            </div>    
            <img src="{{asset('images/freelancer.jpeg')}}" alt="freelancer-image" height="500px" width="750px"> 
       </section>


{{-- talent --}}
     <section class="talent">
            <h2>Search Talent by Specialty </h2>
            <span>In Search of Work? <a href="#">Explore Job Offers</a></span>
            <div class="upper-container">
                <div class="box">
                    <h3>AI Sevices</h3>
                   <img src="{{asset('images/star.gif')}}" alt="star-gif" height="25px" width="25px">
                   <span>4.8/5</span>
                   <h6>295 skills</h6>
                </div>
                <div class="box">
                    <h3> Sales & Marketing</h3>
                   <img src="{{asset('images/star.gif')}}" alt="star-gif" height="25px" width="25px">
                   <span>4.77/5</span>
                   <h6>395 skills</h6>
                </div>
                <div class="box">
                    <h3> Finances & Accounting</h3>
                   <img src="{{asset('images/star.gif')}}" alt="star-gif" height="25px" width="25px">
                   <span>4.79/5</span>
                   <h6>200 skills</h6>
                </div>
                <div class="box">
                    <h3> Writing & translation</h3>
                   <img src="{{asset('images/star.gif')}}" alt="star-gif" height="25px" width="25px">
                  <span>4.93/5</span>
                   <h6>550 skills</h6>
                </div>
            </div>

            <div class="lower-container">
                <div class="box">
                    <h3>Development & IT</h3>
                   <img src="{{asset('images/star.gif')}}" alt="star-gif" height="25px" width="25px"> 
                   <span>4.85/5</span>
                   <h6>1853 skills</h6>   
                </div>
                <div class="box">
                    <h3>Design & Creative</h3>
                   <img src="{{asset('images/star.gif')}}" alt="star-gif" height="25px" width="25px">
                   <span>4.91/5</span>
                   <h6>968 skills</h6>
                </div>
                <div class="box">
                    <h3>Engeneering & Architecture</h3>
                   <img src="{{asset('images/star.gif')}}" alt="star-gif" height="25px" width="25px">
                   <span>4.85/5</span>
                   <h6>650 skills</h6>
                </div>
                <div class="box">
                    <h3>Admin & Customer Support</h3>
                   <img src="{{asset('images/star.gif')}}" alt="star-gif" height="25px" width="25px">    
                   <span>4.77/5</span>
                   <h6>506 skills</h6>   
                </div>
            </div>
    </section>


{{-- qns --}}

    <section class="qna">
        <div class="qna-container">
            <div class="title">
                <h2>Frequently Asked Questions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
            <ul>
                <li>
                    <div class="payment-method">
                        <p class="list-item">What methods of payments are supported? <span>-</span></p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis libero itaque quidem et soluta error!</p>
                    </div>
                </li>
                <li class="list-item">Can I cancel at anything? <span>+</span></li>
                <li class="list-item">How do I get receipt for my purchase?<span>+</span></li>
                <li class="list-item">Which license do I need?<span>+</span></li>
                <li class="list-item">How do I get access to a theme I purchase?<span>+</span></li> 
            </ul>
        </div>
    </section>

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
            <div class="container">
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

            <div class="container">
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

            <div class="container">
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

            <div class="container">
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
    </body>
</html>
