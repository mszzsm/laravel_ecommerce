<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>login success</title>
</head>
<body>
<br/>
<div class="container box">
    <h3 align="center">Simple login System in Laravel</h3>
    <br/>
        @if(isset(Auth::user()->email))
            <div class="alert alert-danger success-block">
                <strong>Welcome {{ Auth::user()->email }}</strong>
                <br/>
                <a href="{{url('/main/logout')}}">Logout</a>
            </div>
            else
            <script>window.location="/main";</script>
        @endif


    <br/>
</div>

</body>
</html>