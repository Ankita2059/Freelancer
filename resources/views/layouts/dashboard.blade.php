
        @extends('layouts.layout')

        @section('title')
            Dashboard
         @endsection


            @section('content')
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

          
                
            @endsection

            