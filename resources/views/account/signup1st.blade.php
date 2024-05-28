
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account - Creatives Genius</title>
    <link rel="stylesheet" href="{{asset('css/signup1st.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <header>
        <h1>Creatives Genius</h1>
    </header>

    <main>
        <h2>Join as a client or freelancer</h2>
        <div class="container">
            <div class="box">
                <input type="radio" name="fc" value="as-a-client">
                <div class="container-text">
                    <a href="{{route('signUp-client')}}">I'm a customer seeking candidates for a job.</a> 
                </div>
                
            </div>
            <div class="box">
                <input type="radio" name="fc" value="as-a-freelancer">
                <div class="container-text">
                <a href="{{route('signUp-freelancer')}}"> As a freelancer, I'm seeking employment.</a>
            </div>
        </div>
        </div>


        <a href="#" class="btn btn-outline-success">Create My Account</a>    
        <p>Already have an account?
           <a href="{{route('login')}}" class="signup-login" style="color: #03951d;">Log In</a>   
       </p>

    </main>
</body>

</html>