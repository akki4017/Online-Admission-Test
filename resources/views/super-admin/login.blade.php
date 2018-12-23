<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Login</title>
  <!-- Bootstrap core CSS-->
  <link href="{{asset("admin")}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset("admin")}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="{{asset("admin")}}/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Login</div>
      <div class="card-body">
        {{ Form::open(array('url' => 'adminLogIn')) }}
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="adminEmail" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="adminPassword" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          {{--<div class="form-group">--}}
            {{--<div class="form-check">--}}
              {{--<label class="form-check-label">--}}
                {{--<input class="form-check-input" type="checkbox"> Remember Password</label>--}}
            {{--</div>--}}
          {{--</div>--}}
        <input class="btn btn-primary btn-block" type="submit" value="LogIn">
        {{ Form::close() }}
        {{--<div class="text-center">--}}
          {{--<a class="d-block small mt-3" href="register.html">Register an Account</a>--}}
          {{--<a class="d-block small" href="forgot-password.html">Forgot Password?</a>--}}
        {{--</div>--}}
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset("admin")}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset("admin")}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{asset("admin")}}/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
