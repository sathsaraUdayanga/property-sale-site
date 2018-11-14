@extends('layouts/app')

@section('content')
    <!--<div class="jumbotron text-center">
        <h1>Welcome to Laravel</h1>
        <p>Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="#" role="button">Register</a></p>
    </div>-->

    <div class="container col-sm-12 col-md-12 col-lg-12" " style="margin-left:0px">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          
            <div class="item active">
              <img src="{{asset('images/slider1.jpg')}}">
               <div class="carousel-caption">
                <h3>Headline</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
              </div>
            </div><!-- End Item -->
     
             <div class="item">
              <img src="{{asset('images/slider2.jpg')}}">
               <div class="carousel-caption">
                <h3>Headline</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
              </div>
            </div><!-- End Item -->
            
            <div class="item">
              <img src="{{asset('images/slider3.jpg')}}">
               <div class="carousel-caption">
                <h3>Headline</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
              </div>
            </div><!-- End Item -->
            
            <div class="item">
              <img src="{{asset('images/slider4.jpg')}}">
               <div class="carousel-caption">
                <h3>Headline</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
              </div>
            </div><!-- End Item -->
                    
          </div><!-- End Carousel Inner -->
    
        
          <ul class="nav nav-pills">
              <li  data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem ipsum dolor sit hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</small></a></li>
              <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum dolor sit</small></a></li>
              <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum dolor sit</small></a></li>
              <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum dolor sit</small></a></li>
            </ul>
            
    
        </div><!-- End Carousel -->
    </div>


@endsection    
