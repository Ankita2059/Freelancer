
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account - Creatives Genius</title>
    <link rel="stylesheet" href="{{ asset('css/signupclient.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <header>
        <h1>Creatives Genius</h1>
        <div class="left-side">
          <span>Looking for work?</span>
          <a href="{{route('signUp-freelancer')}}" class="apply-signup">Apply as a Talent</a>   
        </div>
    </header>

    <main>
        <h2>Sign up to Hire Talent</h2>
        <div class="gabox">
            <img src="{{asset('images/gogglelogo.png')}}" alt="gogglelogo-png" id="google" height="20px" width="20px" >
            <a href="#" class="btn btn-outline-success">Continue with Google</a> <br>     
    
            <img src="{{asset('images/applelogo.png')}}" alt="applelogo-png" id="apple"  height="20px" width="20px">
            <a href="#" class="btn btn-outline-success">Continue with Apple</a>
       </div>

       <div class="hr-container">
            <hr class="left-hr">
            <span class="hr-text">or</span>
            <hr class="right-hr">
       </div>

        <form action="">
            <div  class="name">
                <div class="Fullname">
                    <label for="FirstName">First Name:</label><br>
                    <input type="text" name="FirstName" id="FirstName" required />
                </div>
                <div class="Lastname">
                    <label for="LastName">Last Name:</label><br>
                    <input type="text" name="LastName" id="LastName" required/>
                </div>
            </div> 
            <label for="Email">Work E-mail Address:</label><br>
            <input type="email" name="E-mail address" id="Email"  required/><br>
        
            <label for="Password">Password:</label><br>
            <input type="password" name="Password" id="Password" placeholder="Password" minlength="8" required> <br>

            <label for="country">Country:</label><br>
            <input list="countries" id="country" name="country" placeholder="Select or type a country">
            <datalist id="countries">
                <option value="Afghanistan">
                <option value="Albania">
                <option value="Algeria">
                <option value="American Samoa">
                <option value="Andorra">
                <option value="Angola">
                <option value="Anguilla">
                <option value="Antigua and Barbuda">
                <option value="Argentina">
                <option value="Armenia">
                <option value="Aruba">
                <option value="Australia">
                <option value="Austria">
                <option value="Azerbaijan">
                <option value="Bahamas">
                <option value="Bahrain">
                <option value="Bangladesh">
                <option value="Barbados">
                <option value="Belarus">
                <option value="Belgium">
                <option value="Belize">
                <option value="Benin">
                <option value="Bermuda">
                <option value="Bhutan">
                <option value="Bolivia">
                <option value="Bosnia and Herzegovina">
                <option value="Botswana">
                <option value="Brazil">
                <option value="Brunei Darussalam">
                <option value="Bulgaria">
                <option value="Burkina Faso">
                <option value="Burundi">
                <option value="Cabo Verde">
                <option value="Cambodia">
                <option value="Cameroon">
                <option value="Canada">
                <option value="Cayman Islands">
                <option value="Central African Republic">
                <option value="Chad">
                <option value="Chile">
                <option value="China">
                <option value="Colombia">
                <option value="Comoros">
                <option value="Congo">
                <option value="Congo, Democratic Republic of the">
                <option value="Costa Rica">
                <option value="Côte d'Ivoire">
                <option value="Croatia">
                <option value="Cuba">
                <option value="Cyprus">
                <option value="Czech Republic">
                <option value="Denmark">
                <option value="Djibouti">
                <option value="Dominica">
                <option value="Dominican Republic">
                <option value="Ecuador">
                <option value="Egypt">
                <option value="El Salvador">
                <option value="Equatorial Guinea">
                <option value="Eritrea">
                <option value="Estonia">
                <option value="Ethiopia">
                <option value="Fiji">
                <option value="Finland">
                <option value="France">
                <option value="Gabon">
                <option value="Gambia">
                <option value="Georgia">
                <option value="Germany">
                <option value="Ghana">
                <option value="Greece">
                <option value="Grenada">
                <option value="Guam">
                <option value="Guatemala">
                <option value="Guinea">
                <option value="Guinea-Bissau">
                <option value="Guyana">
                <option value="Haiti">
                <option value="Honduras">
                <option value="Hungary">
                <option value="Iceland">
                <option value="India">
                <option value="Indonesia">
                <option value="Iran">
                <option value="Iraq">
                <option value="Ireland">
                <option value="Israel">
                <option value="Italy">
                <option value="Jamaica">
                <option value="Japan">
                <option value="Jordan">
                <option value="Kazakhstan">
                <option value="Kenya">
                <option value="Kiribati">
                <option value="Korea, Democratic People's Republic of">
                <option value="Korea, Republic of">
                <option value="Kuwait">
                <option value="Kyrgyzstan">
                <option value="Lao People's Democratic Republic">
                <option value="Latvia">
                <option value="Lebanon">
                <option value="Lesotho">
                <option value="Liberia">
                <option value="Libya">
                <option value="Liechtenstein">
                <option value="Lithuania">
                <option value="Luxembourg">
                <option value="Madagascar">
                <option value="Malawi">
                <option value="Malaysia">
                <option value="Maldives">
                <option value="Mali">
                <option value="Malta">
                <option value="Marshall Islands">
                <option value="Mauritania">
                <option value="Mauritius">
                <option value="Mexico">
                <option value="Micronesia">
                <option value="Moldova">
                <option value="Monaco">
                <option value="Mongolia">
                <option value="Montenegro">
                <option value="Morocco">
                <option value="Mozambique">
                <option value="Myanmar">
                <option value="Namibia">
                <option value="Nauru">
                <option value="Nepal">
                <option value="Netherlands">
                <option value="New Zealand">
                <option value="Nicaragua">
                <option value="Niger">
                <option value="Nigeria">
                <option value="North Macedonia">
                <option value="Norway">
                <option value="Oman">
                <option value="Pakistan">
                <option value="Palau">
                <option value="Palestine">
                <option value="Panama">
                <option value="Papua New Guinea">
                <option value="Paraguay">
                <option value="Peru">
                <option value="Philippines">
                <option value="Poland">
                <option value="Portugal">
                <option value="Puerto Rico">
                <option value="Qatar">
                <option value="Romania">
                <option value="Russian Federation">
                <option value="Rwanda">
                <option value="Saint Kitts and Nevis">
                <option value="Saint Lucia">
                <option value="Saint Vincent and the Grenadines">
                <option value="Samoa">
                <option value="San Marino">
                <option value="Sao Tome and Principe">
                <option value="Saudi Arabia">
                <option value="Senegal">
                <option value="Serbia">
                <option value="Seychelles">
                <option value="Sierra Leone">
                <option value="Singapore">
                <option value="Slovakia">
                <option value="Slovenia">
                <option value="Solomon Islands">
                <option value="Somalia">
                <option value="South Africa">
                <option value="South Sudan">
                <option value="Spain">
                <option value="Sri Lanka">
                <option value="Sudan">
                <option value="Suriname">
                <option value="Sweden">
                <option value="Switzerland">
                <option value="Syrian Arab Republic">
                <option value="Taiwan">
                <option value="Tajikistan">
                <option value="Tanzania">
                <option value="Thailand">
                <option value="Timor-Leste">
                <option value="Togo">
                <option value="Tonga">
                <option value="Trinidad and Tobago">
                <option value="Tunisia">
                <option value="Turkey">
                <option value="Turkmenistan">
                <option value="Tuvalu">
                <option value="Uganda">
                <option value="Ukraine">
                <option value="United Arab Emirates">
                <option value="United Kingdom">
                <option value="United States">
                <option value="Uruguay">
                <option value="Uzbekistan">
                <option value="Vanuatu">
                <option value="Venezuela">
                <option value="Viet Nam">
                <option value="Yemen">
                <option value="Zambia">
                <option value="Zimbabwe">
            </datalist>
        
        </form>
        <br>
        <div class="checkbox">
            <label for="Alert">
             <input type="checkbox" name="Alert" id="Alert"/>&nbsp; &nbsp;Send me an email with tips on how to find talent that fits my needs.
            </label>
            <label for="accepted">
                <input type="checkbox" name="accepted" id="accepted"
                value="Understand and agree the terms and policy"/>&nbsp;&nbsp;
                Yes, I understand and agree to the 
                <a href="#" style="color: #03951d">Creatives Geniun Terms of Services</a>,<br> &nbsp; &nbsp; &nbsp;&nbsp; including the
                <a href="#" style="color: #03951d">User Agreement</a> and
                <a href="#" style="color: #03951d">Privacy Policy</a>
            </label> 
        </div>

        <a href="#" class="btn btn-outline-success">Create My Account</a>    
         <p>Already have an account?
            <a href="{{route('login')}}" class="signup-login" style="color: #03951d;">Log In</a>   
        </p>
    </main>

</body>
</html>