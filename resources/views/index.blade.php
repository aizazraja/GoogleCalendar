<!DOCTYPE html>
<html>
<body style="text-align: center;">

<h2>Google Appointment</h2>
@if (session()->has('message'))
<div class="alert alert-success" style="color: green;font-weight: bold;">
  {{ session('message') }}
</div>
@endif


<form action="{{ url('booking') }}" method="POST">
  @csrf
  <label for="fname">Name:</label><br>
  <textarea name="name" id="" cols="60" rows="3"></textarea><br>
  <label for="lname">Meeting Time:</label><br>
  <input type="date" name="meeting_date">
  <input type="time" name="meeting_time"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>