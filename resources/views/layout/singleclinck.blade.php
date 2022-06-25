@extends('layout.master')
@section ('title', 'one clinic')
@section('link')
<link rel="stylesheet" href=" {{ asset('css/clinic.css') }} ">
@endsection
@section('contant')
<!--  -->
<div aria-label="breadcrumb" class="main-breadcrumb ">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">Clinics</li>
            </ol>
          </div>
<!--  -->


<div class="">
	<div class="row">
	<aside class="col-md-3 asid">
		
<div class="card">
	<article class="filter-group">
		<header class="mt-4">
			<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="title1">
			
				<h6 class="color">Specialty</h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_1" style="">
			<div class="card-body">
				<form class="pb-3">
				<div class="input-group">
				  <input type="text" class="form-control rounded-0" placeholder="Search">
				  <div class="input-group-append">
				    <button class="btn btn-light rounded-0" type="button"><i class="fa fa-search"></i></button>
				  </div>
				</div>
				</form>
				
				 <div>
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span > Ear, Nose and Throat </span>
			  </label>
              </div>


              <div>
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span > Dermatology specialty </span>
			  </label>
              </div>


              <div>
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span > Children's specialty</span>
			  </label>
              </div>

              <div>
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span >Obstetrics and Gynecology </span>
			  </label>
              </div>

              
              <div>
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span >Dental and orthodontics </span>
			  </label>
              </div>

              <br><a href="">See More</a>
              <i class="icon-control fa fa-chevron-down"></i>

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- filter-group  .// -->
	<article class="filter-group">
		<header class="mt-4">
			<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="title1">
			
				<h6 class="color">health insurance </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_4" style="">
			<div class="card-body">

            <form class="pb-3">
				<div class="input-group">
				  <input type="text" class="form-control rounded-0" placeholder="Search">
				  <div class="input-group-append">
				    <button class="btn btn-light rounded-0" type="button"><i class="fa fa-search"></i></button>
				  </div>
				</div>
				</form>

                <div>
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span > Lorem Ipsum </span>
			  </label>
              </div>


              <div>
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span > Lorem Ipsum </span>
			  </label>
              </div>


              <div>
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span > Lorem Ipsum </span>
			  </label>
              </div>

              <div>
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span > Lorem Ipsum </span>
			  </label>
              </div>

              <br><a href="">See More</a>
              <i class="icon-control fa fa-chevron-down"></i>
              
		</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	
	
	
</div> <!-- card.// -->

	</aside>


	<main class="col-md-8">

	<!--  -->

	<div class="row mt-5" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="flex" >
			<img src="{{ asset('img/clinc.jpg') }} " height="100" width= "100px" alt="clinic name" >
			<!-- <span>Clinic Name</span>  -->
			<div style="margin-left: 15px;"><span class="color"> Clinic Name </span><br><span>specialty</span></div>
		</div> <br>
		<h5>Description</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn butt">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card ">
      <div class="card-body center">
        <h class="card-title text-center font-weight-bold color" >Choose the  time to book your appointment</h>
        <table>
			<tr>
				<th>Today <br> May 15</th>
				<th>Tomorrow <br> May 16</th>
				<th>Monday <br> May 17</th>
			</tr>
			<tr>
				<td>11:00 AM</td>
				<td>11:00 AM</td>
				<td>11:00 AM</td>
			</tr>
			<tr>
				<td>11:00 AM</td>
				<td>11:00 AM</td>
				<td>11:00 AM</td>
			</tr>
			<tr>
				<td>11:00 AM</td>
				<td>11:00 AM</td>
				<td>11:00 AM</td>
			</tr>
		</table>
        <a href="#" class="btn butt">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
</main>
</div>
</div>

@endsection