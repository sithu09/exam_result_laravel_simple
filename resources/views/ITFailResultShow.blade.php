@extends('master');
@section('content')
<div class="container">
<div style="text-align:center">
<h1>This is IT Result Page</h1><br>
<p><button class='btn btn-primary' style="width:150px;font-size:20px;">
<a href='/'style="color:currentColor;cursor:not-allowed;text-decoration:none;">Home</button>
&nbsp&nbsp&nbsp<button class='btn btn-primary'style="width:150px;font-size:20px;">
<a href='/it'style="color:currentColor;cursor:not-allowed;text-decoration:none;">
Re-register</button></p>
<hr>
</div>
<p class="bg text-primary" style="font-size:25px;"><span >Name:</span>&nbsp{{$name_roll[1]}}<p>
<p class="bg text-primary" style="font-size:25px;">Sorry! You Failed :'(<p>
<br>
<table style="width:100%;border:1px solid black;text-align:center;background-color:lavender;font-size:25px;" class="">
<tr>
<th style="border:1px solid black;font-size:30px">VIIT</th>
<th style="border:1px solid black;font-size:30px;">VIT</th>
<th style="border:1px solid black;font-size:30px">Name</th>
</tr>
@foreach($students as $student)
<tr>
<td style="border:1px solid black;">{{$student->newroll}}</td>
<td style="border:1px solid black;">{{$student->roll}}</td>
<td style="border:1px solid black;">{{$student->name}}</td>
</tr>
@endforeach
</div>
@endsection