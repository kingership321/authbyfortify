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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{url('css/register.css')}}" />
</head>

<body>


    <div class="container">
        <header>Forgot Password</header>
        <form class="form" action="{{url('reset-password')}}" method="POST">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <input type="hidden" name="token" value='{{$request->token}}'>
            <div class="input-box">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email" value='{{$request->email}}' readonly required>
            </div>

            <div class="input-box mt-4 mb-4">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password" required>
            </div>
            <label for="cpassword" class="mb-0">Confirm Password</label>
            <div class="input-group input-box mt-0">
                <input type="password" id="cpassword" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
                <!-- <input type="checkbox" class="mt-3" onclick="showPass()">
                <p>Show Password</p> -->
                <div class="input-group-append">
                    <div class="input-group-text" style="
    height: 50px;
    margin-top: 8px;
">
                        <span class="fas fa-eye"></span>
                    </div>
                </div>
            </div>
            <button class="btn mt-4 btn-block" id="btn-login" type="submit">Reset</button>
        </form>

    </div>

    <!-- JavaScript -->
    <script src="login1.css"></script>
    <!--<script src="js/script.js"></script>-->
</body>