@extends('layout.master')
@section ('title', 'Home')

@section('link')
<link rel="stylesheet" href=" {{ asset('css/home.css') }} ">


@endsection



@section('contant')
<header>
<section class="search-sec text-center">
<h1 style="margin-top:100px;">WELCOMT TO MYCLINC </h1>
<p>Here you can book your medical appointment in your clinic  <br> with the push of a button</p> <br>
<button type="button" class="btn btn-lg">Book your appointment</button> 
    <div class="container ">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <input type="text" class="form-control search-slt" placeholder="Enter Search">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 ">
                            <input type="text" class="form-control search-slt" placeholder="Enter Search">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 ">
                            <select class="form-control search-slt">
                                <option>Choose Rating</option>
<!--                               4 stars and up -->
                                <option>
                                  <a><p>&#9733; &#9733; &#9733; &#9733; &#x2606;</p></a href="#">
                                </option>
<!--                               3 stars and up -->
                                <option>
                                    <a><p>&#9733; &#9733; &#9733; &#x2606; &#x2606;</p></a href="#">
                                </option>
  <!--                               2 stars and up -->
                                <option>
                                    <a><p>&#9733; &#9733; &#x2606; &#x2606; &#x2606;</p></a href="#">
                                </option>
  <!--                               1 star and up -->
                                <option>
                                    <a><p>&#9733; &#x2606; &#x2606; &#x2606; &#x2606;</p></a href="#">
                                </option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn  wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</header>
<div class="arr">
        <i class="fa-solid fa-angles-down down"></i>
    </div>

    <!-- section -->
<div class="hero ">
  <div class="container">
	<div class="row d-flex align-items-center p-5">
		<div class="col-lg-7 hero-left ">
		    <h1 class="  mb-5">people-friendly software making health care work better</h1>
            <p class="">At HealthCare we’re on a mission to be the SaaS solution of choice for
rental operators looking for growth and stability in a disruptive sector.</p> <br><br>
		    <div class="mb-2">
		    	<a class="btn butt btn-shadow btn-lg" href="#" role="button">Book Your Demo Now</a>
			   
		    </div>
		   
		    

	    </div>
	    <div class="col-lg-5 hero-right">
	    	<img src="{{asset('img/doctors.png')}}" height="500" width="100%" alt="" class="img-fluid">
	    </div>
	</div>
  </div>
</div>
<!--end header -->

<section class="container fe mt-4 ">
<div class="row">
  <div class="col-lg-4 text-center">
    <div >
      <div class="card-body">
          <div class="img ">
          <i class="fa-solid fa-hospital "></i>
          </div>
        <h5 >Book an appointment for treatment in the hospital</h5>
        <p class="card-text">Are you looking for treatment in a hospital? Through Us, you can book an appointment for treatment in one of the internationally accredited hospitals.</p>
        <a href="#" class="btn butt">Book an appointment</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 text-center">
    <div >
      <div class="card-body">
      <div class="img">
      <i class="fa-solid fa-laptop-medical"></i>
          </div>
        <h5 >Book a consultation online</h5>
        <p class="card-text">Get a doctor consultation from the best doctors remotely without the need to wait.</p>
        <a href="#" class="btn butt ">Book an appointment</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 text-center">
    <div >
      <div class="card-body">
      <div class="img">
      <i class="fa-solid fa-user-doctor"></i>
          </div>
        <h5 >Find a doctor</h5>
        <p class="card-text">the easiest way to book the best and largest doctors in Jordan, book online for free.</p>
        <a href="#" class="btn butt">Book an appointment</a>
      </div>
    </div>
  </div>
</div>

</section>
<!-- service start -->
<div class="container slide">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="mx-auto text-center">
                <img src="{{asset('img/doctor4.jpg')}}" class="rounded img" alt="..." >
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ps-lg-6 ps-xl-10 w-lg-90">
                <div class="mb-4">
                    <div class="main-title title-left">Getting a Loan<span class="line-left"></span></div>
                    <h2 class="w-90">The greater part of the people trust on us</h2>
                </div>
                <p class="mb-4">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>



                <div id="accordion" class="accordion-style">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">How quick will my credit be subsidized?</button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion" style="">
                            <div class="card-body position-relative">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations
                                of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What is outsourced financial support?</button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                            <div class="card-body position-relative">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                                content here', making it look like readable English.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How long is an affirmed financing cost and credit offer substantial?</button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                            <div class="card-body position-relative">
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,
                                sometimes on purpose (injected humour and the like).
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">What sorts of commercial enterprise financing do you offer?</button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                            <div class="card-body position-relative">
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How might I roll out an improvement to my application?</button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
                            <div class="card-body position-relative">
                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
                                generate Lorem Ipsum which looks reasonable.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
</div>
</div>
</div>

<!-- service start  -->

<!-- slider start -->
<<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/mbd.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/mbd1.webp')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/mbd2.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- slider end -->
  

@endsection