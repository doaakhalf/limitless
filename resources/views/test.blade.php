<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
	  <img src="assets/images/clients/2.png" class="d-block w-100" alt="...">
	</div>
	  @foreach($clients as $client)
	  <div class="carousel-item" data-interval="2000">
		<div class="client-logo"> <a href="{{url('product')}}/{{$client['product_id']}}/{{$client['cat_id']}}"><img class="img-responsive client-logoimg" src="assets/images/clients/{{$client->logo}}" alt="01"/></a></div>
		</div>
		@endforeach
    
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>