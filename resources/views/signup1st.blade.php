
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account - Creatives Genius</title>
    <link rel="stylesheet" href="{{asset('css/signup1st.css')}}">
</head>

<body>
    <header>
        <span>Creatives Genius</span>
    </header>

    <main>
        <h1>Join as a client or freelancer</h1>
        <div class="container">
            <div class="box">
                <img src="{{asset('images/clienticon.png')}}" alt="clienticon-png">
                <div class="circle"></div>
                <a href="{{route('signUp-client')}}"><p>I'm a customer seeking candidates for a job.</p></a>  
            </div>
            <div class="box">
                <img src="{{asset('images/user.png')}}" alt="user-png" >
                <div class="circle"></div>
                <a href="{{route('signUp-freelancer')}}"> <p>As a freelancer, I'm seeking employment.</p></a>
            </div>
        </div>


        <div class="create-btn">
            <button>Create an account</button>
        </div>
        <p>Already have an account? <span>Log In</span></p>



    </main>
</body>

</html>