@extends('layout.master')
@section ('title', 'Book')
@section('link')
<link rel="stylesheet" href=" {{ asset('css/booking.css') }} ">
@endsection
@section('contant')
<!--  -->
<div aria-label="breadcrumb" class="main-breadcrumb ">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">Book an Appointment</li>
            </ol>
          </div>
<!--  -->
<section>
    <p class="h5 container "><span> Book an Appointment</span></p>
    <div class="container form">
<form class="row g-3">
  <div class="col-md-4">
    <label for="inputfname" class="form-label">Patient Full Name </label>
    <input type="text" class="form-control" id="inputfname">
  </div>
  <div class="col-md-4">
    <label for="inputid" class="form-label">ID Number</label>
    <input type="number" class="form-control" id="inputid">
  </div>
  <div class="col-md-4">
    <label for="inputphone" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="inputphone">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Clince Name </label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
</div>
<div class="col-md-4">
    <label for="inputState" class="form-label">Doctor/Specialty</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
</div>
<div class="col-md-4">
    <label for="inputState" class="form-label">Health Insurance
</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
</div>
<div class="col-md-4">
    <label for="inputapp" class="form-label">Date of Appointment</label>
    <input type="date" class="form-control" id="inputapp">
</div>
<div class="col-md-4">
    <label for="inputState" class="form-label">Time of appointment</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
</div>
<div class="col-md-4">
    <label for="inputdata" class="form-label">Date of Birth </label>
    <input type="date" class="form-control" id="inputdate">
  </div>
  <div class="col-md-8">
    <label for="inputcomm" class="form-label">Any Note or medical history
You want to tell us about
</label>
    <textarea class="form-control" name="inputcomm" id="inputcomm" cols="25" rows="6"></textarea>
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      This is Your Frist Time 
      </label>
    </div>
    <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      Emergency situation

      </label>
     
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-lg butt">Make an appointment</button>
  </div>
</form>
</div>
</section>

@endsection