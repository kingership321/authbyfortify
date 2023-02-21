<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--<title>Email and Password Validation</title>-->

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('css/style.css')}}" />

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <header>SignIn</header>
        <form action="{{route('login')}}" method='post'>
            @csrf
            <div class="field email-field">
                <div class="input-field">
                    <input type="email" placeholder="Enter your email" class="email" name='email'/>
                </div>
                <span class="error email-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">Please enter a valid email</p>
                </span>
            </div>
            <div class="field create-password">
                <div class="input-field">
                    <input type="password" placeholder="Create password" class="password" name='password' />
                    <i class="bx bx-hide show-hide"></i>
                </div>
                <span class="error password-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">
                        Please enter atleast 8 charatcer with number, symbol, small and
                        capital letter.
                    </p>
                </span>
            </div>
            
            <div class="input-field button">
                <input type="submit" value="Submit Now" />
            </div>
            <a href="{{route('password.request')}}">Forgot password?</a><br>
            <a href="{{route('register')}}">New User? Register Here!</a>
        </form>
    </div>

    <!-- JavaScript -->
    <script src="login1.css"></script>
    <!--<script src="js/script.js"></script>-->
</body>