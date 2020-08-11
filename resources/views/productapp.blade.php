@extends('layouts.layout')

@section('content')
 <!--== Hero Slider Start ==-->
 <?php $details=explode("$",$product->details);?>
  <?php $icons=explode("$",$product->icon);
  ?>
  <?php  $length=count($details);?>
  <?php  $lengthIcons=count($icons);?>
 <section class="parallax-bg fixed-bg view-height-100vh lg-section" data-parallax-bg-image="{{asset('assets/images/background/parallax-bg-13.jpg')}}" data-parallax-speed="0.5" data-parallax-direction="up">
      <div class="color-overlay-bg"></div>
      <div class="hero-text-wrap transparent-bg">
        <div class="hero-text">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-12 xs-mb-30">
                <div class="all-padding-50 white-color">
                    <h3 class="roboto-font font-700 line-height-50">{{$product->name}}</h3>
                    <h5 class="roboto-font font-300">{{$product->description}}</h5>
                    
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-mobile-wrap">
                    <?php
                    
                    if(count($product_images)!=0)
                    {
                    $im=$product_images[0]->image;
                    $im2=$product_images[1]->image;
                    }
                    else
                {
                    $im= 'iphone-3.png';
                    $im2='iphone-4.png';
                }
                    ?>
               
                <img src="{{asset('/assets/images/announce/'.$im)}}" />
               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>


  <!--== Hero Slider End ==-->
 <!--== Features Start ==-->
 <section class="white-bg">
 
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading text-center">
        @if($product->id==57||$product->id==52||$product->id==58)
          <h1 class="font-700 roboto-font">Web Features</h1>
           <hr class="center_line default-bg">
          <h5 class="roboto-font font-300 font-20px">Filling the blanks with codes, features, services, and all what our clients need.</h5>
          @else
          <h1 class="font-700 roboto-font">App Features</h1>
           <hr class="center_line default-bg">
          <h5 class="roboto-font font-300 font-20px">A perfect design doesn’t just happen, like the perfect code wouldn’t write itself, our team of developers and designers are behind all the magic that happens on your clients’ screens!</h5>
          @endif
         
        </div>
      </div>
      <div class="row mt-50">
     
        @if ($length< 6  && $length>= 4 )
        <div class="col-md-4" style="margin-top: 100px;">
        @elseif ($length< 4)
        <div class="col-md-4" style="margin-top: 200px;">
        @else
        <div class="col-md-4" style="margin-top: 0px;">
        @endif
        @for ($i=0;$i<=$length-1;$i++)
                @if($i%2==0)
                <!-- EM-T1.png -->
        	  <div class="text-left mt-50" style="margin-top: 41px;
    padding-bottom: 38px;">
             
              
                    <i class=""><img style="max-width: 27%; margin-left: 75px; " src="{{asset('/assets/images/announce/'.$icons[$i])}}"></i>
                
              <!-- <h5 class="mt-0 font-600"></h5> -->
            
              <p class="font-300" style="color: black; margin-top: 10px; font-size: 16px;">{{$details[$i]}}</p>
            </div>
           
            @endif
            @endfor
        </div>

        <div class="col-md-4">
            <img class="img-responsive" src="{{asset('/assets/images/announce/'.$im2)}}" alt="" />
   	    	<!-- <img class="img-responsive" src="/assets/images/iphone-4.png" alt=""/> -->
           </div>

        @if ($length< 6 && $length>= 4)
        <div class="col-md-4" style="margin-top: 73px;">
        @elseif ($length< 4)
        <div class="col-md-4" style="margin-top: 200px;">
        @else
        <div class="col-md-4" style="margin-top: 0px;">
        @endif
        @for ($i=0;$i<=$length-1;$i++)
                @if($i%2!=0)
                @if($length==2)
              <div class="text-left mt-50" style="margin-top: 11px;" >
              @else
              <div class="text-left mt-50" >
            @endif
             
             
      
              <i class=""><img style="max-width: 34%; margin-left: 75px;" src="{{asset('/assets/images/announce/'.$icons[$i])}}"></i>
                
              <!-- <h5 class="mt-0 font-600"></h5> -->
           
             
              <p class="font-300" style="color: black; margin-top: 10px; font-size: 16px;">{{$details[$i]}}</p>
            </div>
           
            @endif
            @endfor
        </div>

       
      </div>
    </div>
   
  </section>
  <!--== Features End ==-->
<!--== Go to next and prev  ==-->

 
<?php
// $products=array($products); $prod=array_rand($products,5);
// dd($prod)
?>

<a style="position: fixed;
    bottom: 50%;
    right: 20px;
    background: rgba(0, 0, 0, 0.7);
    width: 30px;
    height: 30px;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 100px;
    display: block;
    z-index: 99;
}" href='{{url("productwebsite")}}/{{$productnext["id"]}}' id="next"><i style="color:white;font-size: 28px;" class="icofont icofont-arrow-right"></i></a> 



<a style="position: fixed;
    bottom: 50%;
    left: 20px;
    background: rgba(0, 0, 0, 0.7);
    width: 30px;
    height: 30px;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 100px;
    display: block;
    z-index: 99;
}" href='{{url("productwebsite")}}/{{$productlast["id"]}}' id="previous"><i  style="color:white;font-size: 28px;"class="icofont icofont-arrow-left"></i></a>
  <!--== Go to next and prev End ==-->
  <!--== Screenshot Gallery Start ==-->
  <section class="dark-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading text-center white-color">
          <h1 class="font-700 roboto-font">Screenshot Gallery</h1>
          <hr class="center_line default-bg">
          <h5 class="roboto-font font-300 font-20px"></h5>
        </div>
      </div>
      <div class="row mt-50">
        <div class="app-gallery-slider slick">
        @if($length>0)
          @foreach($product_images as $product_image)
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="img-item">
              <div class="portfolio gallery-image-hover text-center">
                <div class="folio-overlay"></div>
                <img src="{{asset('assets/images/announce/'.$product_image->image)}}" alt="">
                <div class="portfolio-wrap">
                  <ul class="portfolio-details top-80">
                    <li><a class="magnific-lightbox" href="{{asset('assets/images/announce/'.$product_image->image)}}"><i class="icofont icofont-search"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        @endif

         

        </div>
      </div>
    </div>
  </section>
  <!--== Screenshot Gallery End ==-->

  @endsection