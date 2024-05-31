
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatives Genius Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
            <header>
                <a href="{{route('home')}}" style="text-decoration: none"><h1>Creative Genius</h1></a> 
            </header>
        <main>    
            <h2>Login to Creatives Genius</h2>
            <form action="">
                <input type="email" name="Username" placeholder="Enter your Username or email" required/>
            </form>
            <a href="#" class="btn btn-success">Continue</a>   

            <div class="hr-container">
                <hr class="left-hr">
                <span class="hr-text">or</span>
                <hr class="right-hr">
            </div>

            <div class="gbox">
                <img src="{{asset('images/gogglelogo.png')}}" alt="gogglelogo-png" id="google" height="20px" width="20px">
                <a href="#" class="btn btn-outline-success">Continue with Google</a> <br>     
            </div>
           <div class="abox">
                <img src="{{asset('images/applelogo.png')}}" alt="applelogo-png" id="apple"  height="20px" width="20px">
                <a href="#" class="btn btn-outline-success">Continue with Apple</a>
           </div>

             <div class="hr-container">
                <hr class="left-hr">
                <span class="hr-text">Don't have an Creative Genius Account?</span>
                <hr class="right-hr">
            </div>
            <a href="{{route('client-freelancer')}}" class="btn btn-outline-success">Sign Up</a>   
        </main>
</body>

</html>