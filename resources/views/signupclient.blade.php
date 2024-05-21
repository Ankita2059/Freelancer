
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account - Creatives Genius</title>
    <link rel="stylesheet" href="{{ asset('css/signupclient.css') }}">

</head>

<body>
    <header>
        <span>Creatives Genius</span>
        <div class="left-side">
            <span>Looking for work?</span>
            <span class="apply_as_talent">Apply as talent</span>
        </div>
    </header>
    <main>
        <div class="form">

            <h1>Sign up to hire talent</h1>
            <div class="button">
                <img class="apple" src="{{asset('images/applelogo.png')}}" alt="applelogo-png" >
                <button class="btn" id="btn-1"> Continue with apple</button>
                <img class="google" src="{{asset('images/gogglelogo.png')}}" alt="gogglelogo-png">
                <button class="btn" id="btn-2">Continue with Google</button>
            </div>
            <div class="lines">
                <div class="line"></div>
                <span>or</span>
                <div class="line"></div>
            </div>

            <div class="name">
                <div class="FirstName">
                    <label for="FirstName">First name</label><br>
                    <input type="text" name="FirstName" id="FirstName" />
                </div>
                <div class="lastname">
                    <label for="LastName">Last name</label><br>
                    <input type="text" name="LastName" id="LastName" />
                </div>
            </div>

            <div class="inputfield">
                <label for="Email">Work email address</label><br>
                <input type="email" name="E-mail address" id="Email" />
            </div>

            <div class="inputfield">
                <label for="Password">Password</label><br>
                <input type="password" name="Password" id="Password" placeholder="Password" minlength="8">
            </div>

            <div class="inputfield">
                <label for="country">Country</label><br>
                <input type="text" name="CountryName" id="country"><br>
            </div>

            <div class="checkbox">
                <input type="checkbox" name="Alert" id="Alert" />
                <label for="Alert">Send me an email with tips on how to find talent that fits my needs.</label>
                <span class="checkmark"></span>
            </div>

            <div class="checkbox">
                <input type="checkbox" name="accepted" id="accepted"
                    value="Understand and agree the terms and policy" />
                <label for="accepted">Yes, I understand and agree to the <span class="highlighted"><u>Creatives Geniun
                            Terms
                            of
                            Services</u></span> ,<span>including the</span> <span class="highlighted"><u>User Agreement</u></span> and <span
                            class="highlighted"><u>Privacy Policy</u></span> </span><br>
                </label>
            </div>

<div class="lastbtn">
    <button> Create My account</button>
</div>
           

            <p>Already have an account? <span class="highlighted"><u>Log In</u></span></p>
        </div>
    </main>
</body>

</html>