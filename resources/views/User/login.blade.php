<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Up - Login</title>
    
    
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}" />
    
    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}" />
    
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style2.css')}}" />
    
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 400px;
            width: 100%;
        }

        .login-title {
            font-size: 24px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 500;
        }

        .btn-primary {
            width: 100%;
            background-color: #ff9900;
            border: none;
            padding: 10px;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .btn-primary:hover {
            background-color: #e68a00;
        }

        .form-footer {
            margin-top: 20px;
            text-align: center;
        }

        .form-footer a {
            color: #ff9900;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2 class="login-title">Login</h2>

        <form method="POST" action="{{ route('user.login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>


    </div>

</body>

</html>
