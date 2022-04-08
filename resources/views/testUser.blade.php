<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<form action="{{ route('user.store') }}" method="post">
  @csrf
  <label for="fname">First name:</label><br>
  <input type="text" name="fname" id="fname" value="Name"><br>
  <label for="fusername">User name</label><br>
  <input type="text" name="fusername" id="fusername" value="username"><br>
  <label for="femail">Email</label><br>
  <input type="email" name="femail" id="femail" value="your email"><br>
  <label for="lname">Password</label><br>
  <input type="passeword" name="fpass" id="fpass" value="your pass"><br><br>
  <input type="submit" value="Submit">
</form> 
</form> 
    
</body>
</html>