<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="flex-center position-ref full-height">
@if(Route::has('Login'))
<div class="top-right Links">
@auth
<a href="{{url('/home')}}">Login</a>
<a href="{{url('/register')}}">Register</a>
@endauth
</div>
@endif
<div class="content">
<form class="" action="{{URL::to('/store')}}" method="post">
<input type="text" name ="name" value="">
<br><br>
<input type="text" name="email" value="">
<br><br>
<input type="password" name="password" value="">
<br><br>
<input type="hidden" name="_token" value="{{csrf_token()}}">
<br><br>
<button type="submit" name="button">Register </button>
<br><br>
</form>
</div>
</div>
</body>
</html>