

@extends('layouts.layout')

@section('content')
  

  <!--== Portfolio Start ==-->
  <section class="white-bg pb-0">
  	<div class="container-fluid remove-padding">
    	<div class="row">
         <div class="col-md-12 text-center">
          <h2 class="mt-0 font-700">Our Amazing Work</h2>
        	<hr class="center_line line2 default-bg bold-line">
        </div>
 
        	<div class="col-md-12">
        	    	<div id="portfolio-gallery-filter" class="cbp-l-filters-alignCenter text-sm-center mb-100">
                     @foreach($categories as $catrgory)
              <div data-filter=".{{$catrgory['id']}}x" class="cbp-filter-item" value="{{ $catrgory }}" onclick="getcat({{$catrgory['id']}});" >
                   
                   {{ $catrgory['name'] }}
              </div>
              @endforeach
              
    
            </div>
            </div>
     <script>
  
    function getcat(catid){
         document.getElementById("portfolio-gallery").innerHTML = "";
       var cat = {!! $products !!};
              // for(i=0;i<cat.length-1;i++){
              // if(cat[i]['category']['id'] == catid){
              //     document.getElementById("portfolio-gallery").innerHTML += '<div class="cbp-item '+cat[i]['category']['id']+'x col-md-3 col-sm-6" ">'+
              //     '<div class="portfolio gallery-image-hover text-center">'+
              //       '<div class="folio-overlay"></div>'+
              //       '<img src="assets/images/announce/'+cat[i]['image']+'" alt="" >'+
              //       '<div class="portfolio-wrap">'+
              //         '<ul class="portfolio-details top-80">'+
              //           '<li><a class="" href="#"><i class="icofont icofont-search"></i>x</a></li>'+
              //         '</ul></div></div></div>';
              // }

              document.getElementById("portfolio-gallery").innerHTML += '<div class="cbp-item print 1x col-md-3 col-sm-6">'+
                  '<div class="portfolio gallery-image-hover text-center">'+
                    '<div class="folio-overlay"></div>'+
                    '<img src="assets/images/portfolio/grid/74.jpg" alt="">'+
                    '<div class="portfolio-wrap">'+
                      '<ul class="portfolio-details top-80">'+
                        '<li><a class="cbp-lightbox" href="assets/images/portfolio/grid/74.jpg"><i class="icofont icofont-search"></i></a></li>'+
                      '</ul></div> </div></div>';

                      document.getElementById("portfolio-gallery").innerHTML += '<div class="cbp-item print 1x col-md-3 col-sm-6">'+
                  '<div class="portfolio gallery-image-hover text-center">'+
                    '<div class="folio-overlay"></div>'+
                    '<img src="assets/images/portfolio/grid/74.jpg" alt="">'+
                    '<div class="portfolio-wrap">'+
                      '<ul class="portfolio-details top-80">'+
                        '<li><a class="cbp-lightbox" href="assets/images/portfolio/grid/74.jpg"><i class="icofont icofont-search"></i></a></li>'+
                      '</ul></div> </div></div>';

              // }
      
       
    }
</script>

<!-- 
<div class="col-md-12">

<div id="portfolio-gallery" class="cbp">
   

    <div class="cbp-item print 1x col-md-3 col-sm-6">
      <div class="portfolio gallery-image-hover text-center">
        <div class="folio-overlay"></div>
        <img src="assets/images/portfolio/grid/74.jpg" alt="">
        <div class="portfolio-wrap">
          <ul class="portfolio-details top-80">
            <li><a class="cbp-lightbox" href="assets/images/portfolio/grid/74.jpg"><i class="icofont icofont-search"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="cbp-item print 2x col-md-3 col-sm-6">
      <div class="portfolio gallery-image-hover text-center">
        <div class="folio-overlay"></div>
        <img src="assets/images/portfolio/grid/75.jpg" alt="">
        <div class="portfolio-wrap">
          <ul class="portfolio-details top-80">
            <li><a class="cbp-lightbox" href="assets/images/portfolio/grid/75.jpg"><i class="icofont icofont-search"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="cbp-item branding photography col-md-3 col-sm-6">
      <div class="portfolio gallery-image-hover text-center">
        <div class="folio-overlay"></div>
        <img src="assets/images/portfolio/grid/76.jpg" alt="">
        <div class="portfolio-wrap">
          <ul class="portfolio-details top-80">
            <li><a class="cbp-lightbox" href="assets/images/portfolio/grid/76.jpg"><i class="icofont icofont-search"></i></a></li>
          </ul>
        </div>
      </div>
    </div>


   
</div> -->
            <div class="col-md-12">

            <div id="portfolio-gallery" class="cbp test" >

              
          
           
                
    		      </div>
            </div>

        </div>
    </div>
  </section>
  <!--== Portfolio End ==-->

  

  <!--== Call to Actions Start ==-->
  <section class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-xs-12 centerize-col text-center">
              <h6 class="mb-30 font-50px font-700 mt-0">Interested?</h6>
              <a class="btn btn-md btn-color btn-animate btn-square" href="{{ url('/contact') }}"><span>Contact Us <i class="tr-icon icofont icofont-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
  </section>
  <!--== Call to Actions End ==-->

@endsection
