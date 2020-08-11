
@extends('layouts.layout')

@section('content')
<div class="transition-none">
      <section class="title-hero-bg parallax-effect" style="background-image: url(&quot;assets/images/title-bg/title-bg-9.jpg&quot;); transform: translateY(0px);">
        <div class="container">
            <div class="page-title text-center white-color">
                <h1>Careers</h1>
                <h4 class="text-uppercase mt-30">We would like to  hire You</h4>
            </div>
        </div>
      </section>
  </div>
<section class="white-bg">
<div class="text-center">
                <h3 class="career">We are looking for</h3>
                
            </div>
  	<div class="container">
    
    	<div class="row">
     
      @foreach($careers as $career)
      <div class="col-md-4 col-sm-4 col-xs-12 xs-mb-30 wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
          <h4 class="mb-0"> {{$career['name'] }}</h4>
          
          <hr class="left-line default-bg">
          <p></p>
          <a  href="{{url('upload_cv')}}/{{$career['id']}}" class="btn btn-md btn-color btn-animate btn-square mt-20"><span>Apply Now <i class="tr-icon icofont icofont-arrow-right"></i></span></a>
        </div>
              @endforeach
       
      </div>
    </div>
  </section>

  <section class="white-bg serv_bg">
    <div class="container">
      <div class="row">
        	<div class="col-sm-8 section-heading">
            <h2 class="mt-0 font-700">Like a Family</h2>
            <h5 class="grey-color font-300 text-uppercase">We have built our team on a rock-solid</h5>
        	</div>
      </div>
      <div class="row">
        <div class="col-md-8 centerize-col">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="box-icon text-center mb-20">
      					<i class="icon-wallet font-50px default-color"></i>
      					<div class="title-section">
      						<h4 class="mt-0 font-600">Attractive Salary</h4>
      						<p class="font-400">At PBC, we appreciate the good life, we appreciate our team, our family; monetarily and emotionally too.</p>
      					</div>
      				</div>
              <div class="box-icon text-center">
      					<i class="icon-heart font-50px default-color"></i>
      					<div class="title-section">
      						<h4 class="mt-0 font-600">Health Insurance</h4>
      						<p class="font-400">Our team is our main pillar, we can’t afford not seeing one of their faces at the office everyday, their health and yours is of great importance to PBC.</p>
      					</div>
      				</div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="box-icon text-center">
      					<i class="icon-hourglass font-50px default-color"></i>
      					<div class="title-section">
      						<h4 class="mt-0 font-600">Fun Environment</h4>
      						<p class="font-400">Food and fun are our top priority at PBC, we love each other, but we don’t share food. You’ll enjoy our fits of laughter and huge appetite.</p>
      					</div>
      				</div>
              <div class="box-icon text-center">
      					<i class="icon-notebook font-50px default-color"></i>
      					<div class="title-section">
      						<h4 class="mt-0 font-600">Education Support</h4>
      						<p class="font-400">Our family is our asset and there’s no greater investment than their professional education which will benefit all parties..</p>
      					</div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection

  