@extends('master')
@section('content')
<div style='text-align:center;margin-top:20px;'>
<h1 class="text-danger">Try Again! you miss something<h1>
<h3 class="text-info">->>Registration form must fill following->><h3>
<p class="bg text-primary" style="font-size:25px;"><span >Name:</span>&nbsp Ma Zaw Zaw Latt (First letters are capital!)<p>
<p class="bg text-primary" style="font-size:25px;"><span >Roll-No:</span>&nbsp VIT-6 (Roll number is capital!)<p>
</div><br>
<div style="text-align:center">
<p><button class='btn btn-primary' style="width:150px;font-size:20px;">
<a href='/'style="color:currentColor;cursor:not-allowed;text-decoration:none;">Home</button>
&nbsp&nbsp&nbsp<button class='btn btn-primary'style="width:150px;font-size:20px;">
<a href='/it'style="color:currentColor;cursor:not-allowed;text-decoration:none;">
Re-register</button></p>
<hr>
</div>
@endsection