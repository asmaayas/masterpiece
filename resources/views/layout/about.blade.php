@extends('layout.master')
@section ('title', 'About')
@section('link')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- jQuery first, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Slick Slider JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" href=" {{ asset('css/about.css') }} ">
@endsection

@section('contant')
<div aria-label="breadcrumb" class="main-breadcrumb ">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
          </div>
<!--  -->
<div class="container con">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="{{asset('img/clinic.webp')}}" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->

                        
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="{{asset('img/doctor2.webp')}}" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="{{asset('img/doctors.png')}}" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end col-->

        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
            <div class="section-title ml-lg-5">
                <h5 class="text-custom font-weight-normal mb-3">About Us</h5>
                <h4 class="title mb-4">
                    Our mission is to <br />
                    make your life easier.
                </h4>
                <p class="text-muted mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>

                <!-- <div class="row">
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-play h4 mb-0 text-custom"></i>
                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Responsive</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-file-download h4 mb-0 text-custom"></i>
                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Free Download</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-user h4 mb-0 text-custom"></i>
                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Support</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-image h4 mb-0 text-custom"></i>
                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Development</a></h6>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!--end col-->
    </div>
    <!--enr row-->
</div>
</div>
</div>
<!--  -->





<!--  -->
<div class="container bootstrap snippets bootdey">
<section id="services" class="current">
    <div class="services-top">
        <div class="container bootstrap snippets bootdey">
            <div class="row text-center">
                <div class="col-sm-12 col-md-12 col-md-12">
                    <h3>What We Offer</h3>
                    <h1 style="font-weight: bold;">Our Services</h1>
                    <p>Our <span class="highlight">experienced</span> and <span class="highlight">dedicated</span> staff provide these services with a smile.</p>
                </div>f
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-sm-12 col-md-12 col-md-10">
                    <div class="services-list">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-magic highlight" style="color:#99D9DB;"></div>
                                    <div class="text-block">
                                        <div class="name">Web Design</div>
                                        <div class="info">Beauty and function</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-code highlight" style="color:#99D9DB;"></div>
                                    <div class="text-block">
                                        <div class="name">Development/Coding</div>
                                        <div class="info">Quality code that lasts</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-pencil highlight" style="color:#99D9DB;"></div>
                                    <div class="text-block">
                                        <div class="name">Copy Writing</div>
                                        <div class="info">Words that tell your story</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-bullhorn highlight" style="color:#99D9DB;"></div>
                                    <div class="text-block">
                                        <div class="name">SEO/PPCM</div>
                                        <div class="info">Converting users to customers</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-eye highlight" style="color:#99D9DB;"></div>
                                    <div class="text-block">
                                        <div class="name">Branding/Identity</div>
                                        <div class="info">Leave a lasting impression</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-umbrella highlight" style="color:#99D9DB;"></div>
                                    <div class="text-block">
                                        <div class="name">Strategy/Planning</div>
                                        <div class="info">Thinking beyond tomorrow</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>  


    <!--  -->

    <div class="row">
  <div class="container black">
    <section class="logo-carousel slider" data-arrows="true">
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image1.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image2.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image3.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image4.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image5.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image6.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image7.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image8.png"></div>
    </section>
  </div>
</div>

<!--  -->

<script>
  $(document).ready(function() {
  $('.logo-carousel').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
  });
});
</script>


    
@endsection