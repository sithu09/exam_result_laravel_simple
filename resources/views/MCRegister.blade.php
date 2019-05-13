@extends('master');
@section('content')
<h1 class="text-dark" style="margin-left:35%;font-size:50px;text-shadow:2px 2px 4px #135""> MC Registration Form</h1>
<div class="row"><div class="col-lg-4"></div>
   <div class="col-lg-4"style="height:auto;margin-top:70px;border:1px solid gray;border-radius:20px;font-size:25px;font-style:bold;background-color:lavender">
<form method='POST' action="{{URL::to('/mclogin')}}">
{!! csrf_field() !!}
@include('login')
</form></div></div>
@endsection