
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatives Genius Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body>
    <header>
        <span>Creatives Genius</span>
    </header>

    <main>
        <div class="container">
            <h1>Login to Creatives Genius</h1>
            <div class="palceholder">
                <img src="{{asset('images/user.png')}}" alt="user-png" height="14px" width="14px">
                <span>Username or Email</span>
            </div>
            <input type="email" name="Username" />
            <input type="button" value="Continue" class="btn">

            <div class="lines">
                <div class="line"></div>
                <span>or</span>
                <div class="line"></div>

            </div>

            <div class="buttons">
                <img src="{{asset('images/gogglelogo.png')}}" alt="gogglelogo-png" id="google">
                <button id="btn-1">Continue with Google</button>

                <img src="{{asset('images/applelogo.png')}}" alt="applelogo-png" id="apple">
                <button id="btn-2">Continue with Apple</button>
            </div>

            <div class="hr-lines">
                <div class="line1"></div>
                <span>Don't have an Creatives Genius account?</span>
                <div class="line1"></div>
            </div>
            <div class="signup-btn">
                <button>Sign Up</button>
            </div>

        </div>
    </main>
</body>

</html>