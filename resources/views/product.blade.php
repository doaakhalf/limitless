

@extends('layouts.layout')

@section('content')

  <!--== About Project Start ==-->
  
     <!-- <section class="white-bg parallax-effect " style='background-image: url("/assets/images/THECOSTMER.jpg"); transform: translateY(0px);'>
    <div class="container">
      <div class="row">
		      <div class="col-md-8 col-sm-12 centerize-col wow fadeInUp text-center"  data-wow-delay="0.1s">
          	<h2 class="mt-0 font-300 roboto-font mb-0">{{$product->name}}</h2>
          	
          </div>
      </div>
    </div>
  </section>  -->
<style>
li a{
  color:black !important;
}
</style>
  <div class="transition-none">
      <section class="title-hero-bg parallax-effect removegray" style='background:white transform: translateY(70.4537px);'>
        <div class="container">
            <div class="page-title text-center white-color">
                <!--<h1>{{$product->client}}</h1>-->
                <img  width="400" src="{{asset('/assets/images/clients/'.$product->logo)}}" style="max-height: 315px;">

            </div>
        </div>
      </section>
  </div>


  
  <!--== About Project End ==-->

  <!--== Single Project Start ==-->
  <section class="white-bg bordered-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 xs-mb-30">
          <h2 class="roboto-font font-300">
          @if($product->id==9)
          Sea Taj Hurghada
          
          @else
          {{$product->name}}
          
          @endif
          </h2>
          @if($product->viedo)
          <iframe width="560" height="315" src="{{$product->viedo }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <!-- <p>{{$product->description}}.</p> -->
          @else
          <img  width="500" src="{{asset('assets/images/announce/'.$product->image)}}" style="max-height: 315px;">
          @endif
          <!-- <p class="mt-30"><a class="btn btn-md btn-dark-outline btn-animate btn-square"><span>Visit Project <i class="tr-icon icofont icofont-arrow-right"></i></span></a></p> -->
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 xs-mb-30">
          <ul class="portfolio-meta">
          <!-- <li><span> Name </span> {{$product->name}}</li> -->
            <li><span> Client </span> {{$product->client}}</li>
            <li><span> Category </span> {{$product->category->name}}</li>
            <!-- <li><span> Completed on </span> {{$product->date}}</li> -->
            <!-- <li><span> Visit </span> {{$product->url}}</li> -->
            <!-- <li><span> Website </span> <a href="{{$product->url}}" target="_blank">{{$product->url}}</a></li> -->
          </ul>
          <p>{{$product->description}}.</p>
        </div>
      </div>
    </div>
  </section>
  <!--== Single Project End ==-->

  <!--== Project Slides Start ==-->
  <!-- <section class="parallax-bg fixed-bg" data-parallax-bg-image="{{asset('assets/images/background/pattern-bg-memphis.jpg')}}" data-parallax-speed="0.5" data-parallax-direction="left">
    <div class="parallax-overlay"></div>
    <div class="container">
      <div class="row">
          <div class="single-project-slider slick">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <img src="{{asset('assets/images/portfolio/project-imgs/single-project-img-02.jpg')}}" />
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <img src="{{asset('assets/images/portfolio/project-imgs/single-project-img-03.jpg')}}" />
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <img src="{{asset('assets/images/portfolio/project-imgs/single-project-img-04.jpg')}}" />
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <img src="{{asset('assets/images/portfolio/project-imgs/single-project-img-05.jpg')}}" />
            </div>
          </div>
      </div>
    </div>
  </section> -->
  <!--== Project Slides End ==-->

 


  

 

  @endsection