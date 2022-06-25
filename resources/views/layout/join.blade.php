@extends('layout.master')
@section ('title', 'join')
@section('link')
<link rel="stylesheet" href=" {{ asset('css/booking.css') }} ">
@endsection
@section('contant')

<!--  -->
<div aria-label="breadcrumb" class="main-breadcrumb ">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">Join Us</li>
            </ol>
          </div>
<!--  -->
<section>
    <p class="h5 container "><span> Add your clinic to our site</span></p>
    <div class="container form">
<form class="row g-3">
  <div class="col-md-4">
    <label for="inputfname" class="form-label">Full name  </label>
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
    <label for="inputcname" class="form-label">Clince Name </label>
    <input type="text" class="form-control" id="inputcname">
</div>
<div class="col-md-4">
    <label for="inputdoc" class="form-label">Doctor/Specialty</label>
    <input type="text" class="form-control" id="inputdoc">
</div>
<div class="col-md-4">
    <label for="inputState" class="form-label">Email
</label>
<input type="email" class="form-control" id="inputStatec">
</div>
<div class="col-md-4">
    <label for="inputapp" class="form-label">Clinic commercial register
</label>
    <input type="text" class="form-control" id="inputapp">
</div>
<div class="col-md-4">
    <label for="inputState" class="form-label">Clinic start time
</label>
<input type="text" class="form-control" id="inputState">
</div>
<div class="col-md-4">
    <label for="inputdata" class="form-label">Clinic end time
</label>
    <input type="text" class="form-control" id="inputdate">
  </div>
  <div class="col-md-8">
    <label for="inputcomm" class="form-label">Any Note 
You want to tell us about
</label>
    <textarea class="form-control" name="inputcomm" id="inputcomm" cols="25" rows="6"></textarea>
  </div>
  
 
    
  <div class="col-12">
    <button type="submit" class="btn btn-lg butt">Join Us</button>
  </div>
</form>
</div>
</section>

@endsection