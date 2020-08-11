
@extends('layouts.layout')

@section('content')

<div class="transition-none">
      <section class="title-hero-bg parallax-effect" style="background-image: url(&quot;/assets/images/title-bg/title-bg-9.jpg&quot;); transform: translateY(0px);">
        <div class="container">
            <div class="page-title text-center white-color">
                <h1></h1>
                <h4 class="text-uppercase mt-30"></h4>
            </div>
        </div>
      </section>
  </div>
<section class="white-bg">
    <div class="container">
    	<div class="row">
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        	<div class="col-sm-8 section-heading">
              <h1 class="roboto-font font-700">{{$career->name}} Job</h1>
              <hr class="center_line default-bg">
              <h3 class="roboto-font font-300"></h3>
              
        	</div>
        	
        	
        
        </div>
        @if($career->details !=null)
        
         <div class="col-md-12 col-sm-4 col-xs-12 xs-mb-30 wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
             <h2 class="roboto-font font-400">Job Description</h1>
          <h4 class="mb-0"> {!!$career->details !!}</h4>
          
          <hr class="left-line default-bg">
          <p></p>
         
        </div>
        
        @endif
        
          @if($career->requierments !=null)
         <div class="col-md-12 col-sm-4 col-xs-12 xs-mb-30 wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;margin-bottom: 40px;">
             <h2 class="roboto-font font-400">Job Requierments</h1>
          <h4 class="mb-0"> {!!$career->requierments !!}</h4>
          
          <hr class="left-line default-bg">
          <p></p>
         
        </div>
        @endif
       
        <div class="row mt-50">
            <div class="col-md-12">
              <form   action="{{url('upload')}}" method="POST"  enctype="multipart/form-data" class="contact-form-style-01">
              @csrf  
              <div class="messages"></div>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="name">Name</label>
                      <input type="text" name="name" class="md-input" id="name" placeholder="Name *" required="" data-error="Your Name is Required">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="email">Email</label>
                      <input type="email" name="email" class="md-input" id="email" placeholder="Email *" required="" data-error="Please Enter Valid Email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                 
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="sr-only" for="message">Phone</label>
                      <input type="phone" name="phone" class="md-input" id="phone" placeholder="Phone *">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="sr-only" for="message">file</label>
                      <input type="file" name="file" class="md-input" id="file" placeholder="file">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <input type="number" name="career_id" class="md-input" hidden id="career_id" placeholder="career_id" value={{$career_id}}>
                  <div class="col-md-12 col-sm-12">
                    <div class="text-left mt-20">
                      <button type="submit" name="submit" class="btn btn-outline btn-md btn-square btn-animate remove-margin disabled"><span>Apply Now <i class="ion-android-arrow-forward"></i></span></button>
                    </div>
                  </div>
                </div></form>
              
            </div>
        </div>
    </div>
  </section>
@endsection