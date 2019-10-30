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
    <title>Document</title>
</head>
<body>
    <div class="container box">
        <h3>Login panel</h3>
        <br>

        @if(isset(Auth::user()->email))
            {{Auth::user()->name}}
            {{--<script>window.location="main/successlogin";</script>--}}
        @endif

        @if($message = Session::get('error'))

            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form method="post" action="{{url('/main/checklogin')}}">
            {{csrf_field()}}
            <div class="form-group">
                <lable>Enter email</lable>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <lable> Enter Password </lable>
                <input  type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</body>
</html>