<!DOCTYPE html>
<html lang="en">
<head>
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta charset="UTF-8">
    <title>Document1</title>
</head>
<body>
  
   @include('inc.navbar')
   <div class="container">
   @yield('content')
   </div>
</body>
</html>