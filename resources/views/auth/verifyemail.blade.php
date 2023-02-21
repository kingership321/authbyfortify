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
        <header>Verify Email</header>
        <form action="{{route('verification.send')}}" method="POST">
            @csrf
            <div class="form-group mt-4">
                <label for="username">You must verify your email. Please check your mail for a verification link.</label>

            </div>

            <button class="btn mt-1 btn-block" id="btn-login" type="submit" value='Resend email'>Resend Email</button>

            <a href="{{ url('register') }}" id="dont_haveacc">Don't have an accont? <span class="singupspan">Signup</span></a>
             </div>
        </form>
    </div>

    <!-- JavaScript -->
    <script src="login1.css"></script>
    <!--<script src="js/script.js"></script>-->
</body>