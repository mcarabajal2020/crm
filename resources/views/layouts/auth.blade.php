<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRM | Log in</title>

 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('css/plugins/css/all.css')}}">
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  @yield('content')
  
</div>
<!-- /.login-box -->


<script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>
</html>
