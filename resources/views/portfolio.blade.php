@extends('layouts.layout')

@section('content')

<div class="transition-none">
      <section class="title-hero-bg parallax-effect " style="background-image: url(&quot;assets/images/THECOSTMER.jpg&quot;); transform: translateY(0px);">
        <div class="container">
            <div class="page-title text-center white-color">
               
            </div>
        </div>
      </section>
  </div>

<script type='text/javascript'>

         
         
function getprod(id)
{
 
  $(document).ready(function () {
                    $.ajax({
                        header: '@csrf',
                        url: 'getproductbyid/' + id,
                        type: "GET",
                        dataType: 'json',
                        success: function (data) {
                          document.getElementById("products").innerHTML=""
                          for(i=0;i<data.length;i++)
                          {
                           
                            // var url = "{{ route('product', ['product' => '"+data[i] "']) }}";
                            //website and apps id =2
                    
                            if(id ==2){
                            var url = '{{ route("productwebsite", ":id") }}';
                            url = url.replace(':id', data[i]["id"]);
                              document.getElementById("products").innerHTML += '<div class="cbp-item '+data[i]['category_id']+'x col-md-3 col-sm-6" ">'+
                  '<div class=" portfolio gallery-image-hover text-center" >'+
                    '<div class="folio-overlay "></div>'+
                    '<img src="assets/images/announce/'+data[i]['image']+'" alt="" >'+
                    '<div class="portfolio-wrap">'+
                      '<ul class="portfolio-details top-80">'+
                        '<li><a class="" href='+url+'><i class="icofont icofont-search"></i>x</a></li>'+
                      '</ul></div></div></div>';
                            }
                      
                            //branding  id =4
                            else if(id==4)
                            {
                              var url = '{{ route("product", [":id",":cat_id"]) }}';
                            url = url.replace(':id', data[i]["id"]).replace(':cat_id', id);
                            
                          document.getElementById("products").innerHTML += '<div class="cbp-item '+data[i]['category_id']+'x col-md-3 col-sm-6" ">'+
                  '<div class=" portfolio gallery-image-hover text-center" >'+
                    '<div class="folio-overlay "></div>'+
                    '<img src="assets/images/announce/'+data[i]['logo']+'" alt="" >'+
                    '<div class="portfolio-wrap">'+
                      '<ul class="portfolio-details top-80">'+
                        '<li><a class="" href='+url+'><i class="icofont icofont-search"></i>x</a></li>'+
                      '</ul></div></div></div>';
                            }
                            
                            else if(id ==5)
                            {
                             
                          document.getElementById("products").innerHTML += '<div class="cbp-item '+data[i]['category_id']+'x col-md-3 col-sm-6" ">'+
                  '<div class=" portfolio gallery-image-hover text-center" >'+
                    '<div class="folio-overlay "></div>'+
                    '<img src="assets/images/announce/'+data[i]['image']+'" alt="" >'+
                    
                      '<div class="portfolio-wrap"></div></div></div>';
                            }
                            else{
                            
                              var url = '{{ route("product", [":id",":cat_id"])}}';
                            url = url.replace(':id', data[i]["id"]).replace(':cat_id', id);;
                          document.getElementById("products").innerHTML += '<div class="cbp-item '+data[i]['category_id']+'x col-md-3 col-sm-6" ">'+
                  '<div class=" portfolio gallery-image-hover text-center" >'+
                    '<div class="folio-overlay "></div>'+
                    '<img src="assets/images/announce/'+data[i]['image']+'" alt="" >'+
                    '<div class="portfolio-wrap">'+
                      '<ul class="portfolio-details top-80">'+
                        '<li><a class="" href='+url+'><i class="icofont icofont-search"></i>x</a></li>'+
                      '</ul></div></div></div>';
                              
                            }
                          }



                          
                          

                          
                        }
                    })
            });
}
</script>

  <!--== Portfolio Start ==-->
  <section class="white-bg pb-0">
  	<div class="container-fluid remove-padding">
    	<div class="row">
         <div class="col-md-12 text-center">
          <h2 class="mt-0 font-700">Our Work</h2>
        	<hr class="center_line line2 default-bg bold-line">
        </div>
 
        	<div class="col-md-12">
        	    	<div id="portfolio-gallery-filter" class="cbp-l-filters-alignCenter text-sm-center mb-100">
    @foreach($categories as $catrgory)
    
              <div data-filter=".{{$catrgory['id']}}x" class="cbp-filter-item" value="{{ $catrgory['id'] }}" onclick="getprod({{ $catrgory['id'] }})">
                   {{ $catrgory['name'] }}
              </div>
              @endforeach
              
    
            </div>
            </div>
            <div class="col-md-12 portofiliogall">
<div id="products">
</div>
 <div id="portfolio-gallery" class="cbp" >

 <!-- @foreach($products as $product)
          <div class="cbp-item {{$product->category->id}}x col-md-3 col-sm-6">
                  <div class="portfolio gallery-image-hover text-center">
                    <div class="folio-overlay"></div>
                    <img src="assets/images/announce/{{$product->image}}" alt="" >
                    <div class="portfolio-wrap">
                      <ul class="portfolio-details top-80">
                        <li><a class="" href="{{ url('/product',[$product]) }}"><i class="icofont icofont-search"></i>x</a></li>
                      </ul></div></div></div>
@endforeach -->
              
          
           
                
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
              <h6 class="mb-30 font-50px font-700 mt-0">Caught your attention?</h6>
              <a class="btn btn-md btn-color btn-animate btn-square" href="{{ url('/contact') }}"><span>Contact Us <i class="tr-icon icofont icofont-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
  </section>
  <!--== Call to Actions End ==-->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script type='text/javascript'>
  
  window.addEventListener('load', function() {
    console.log('All assets are loaded')
})
$(window).on('load', function() {
  
  $.ajax({
                        header: '@csrf',
                        url: 'getproductbyid/' + 1,
                        type: "GET",
                        dataType: 'json',
                        success: function (data) {
                          document.getElementById("products").innerHTML=""
                          for(i=0;i<data.length;i++)
                          {
                            console.log(data[i]['id']);
                            var url = '{{ route("product", [":id",":cat_id"]) }}';
                            url = url.replace(':id', data[i]["id"]).replace(':cat_id', 1);;
                            // var url = "{{ route('product', ['product' => '"+data[i]["id"] "']) }}";
                          document.getElementById("products").innerHTML += '<div class="cbp-item '+data[i]['category_id']+'x col-md-3 col-sm-6" ">'+
                  '<div class=" portfolio gallery-image-hover text-center" >'+
                    '<div class="folio-overlay "></div>'+
                    '<img src="assets/images/announce/'+data[i]['image']+'" alt="" >'+
                    '<div class="portfolio-wrap">'+
                      '<ul class="portfolio-details top-80">'+
                        '<li><a class=""  href='+url+'><i class="icofont icofont-search"></i>x</a></li>'+
                      '</ul></div></div></div>';
                          }



                          
                          

                          
                        }
                    })
  

})
  </script>
@endsection

