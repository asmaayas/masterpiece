<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
    @yield('link')

    <title>@yield('title')</title>
    <style>
        nav{
            background-color: #354259 ;
            color: #fff; 
        }

        .sticky {
	
	position: -webkit-sticky;
	position: sticky;
	top: 0;
    z-index: 99;
}
       
       
        footer{
            background-color: #354259;
        }
  

        nav a{
            margin-right: 15px;
            color: #fff;
        }
        .navbar-nav a{
            color: #fff;
        }
        .navbar-nav .nav-link.active, .navbar-nav .show>.nav-link {
    color: #99D9DB ;
    font-weight: bold;
}
.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}
    </style>
</head>
<body>



<nav class="navbar navbar-expand-lg sticky ">
    <div class="container-fluid">
    <img src="{{ asset('img/logo.png') }} " height="80"  alt="CoolBrand" class="logo">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <div class="navbar-nav">
                
                <a href="/home" class="nav-item nav-link " >Home</a>
                <a href="/clinics" class="nav-item nav-link"  >Clinics</a>
                <a href="/book" class="nav-item nav-link" >Book</a>
                <a href="/join" class="nav-item nav-link" >Join Us</a>
                <a href="/about" class="nav-item nav-link" >About Us</a>
                <a href="/contact" class="nav-item nav-link" >Contact Us</a>
            </div>
            </div>
         
            <div class="navbar-nav justify-content-end">
                <a href="#" class="nav-item nav-link" data-toggle="tab">Login</a>
            </div>
            
        
    </div>
</nav>