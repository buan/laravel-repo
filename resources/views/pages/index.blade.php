@extends('layout.app')    
      @section('content')
     <div class="container">
            <div class="jumbotron text-center">
        <h1>Welcome to Laravel Series!</h1>
        <p class="lead">This is about Laravel series</p>
        <p>
        <a class="btn btn-lg btn-info" href="#" role="button">Sign in</a>
        <a class="btn btn-lg btn-success" href="#" role="button">Login</a>
        </p>
      </div>
         @yield('content')
    </div>
@endsection