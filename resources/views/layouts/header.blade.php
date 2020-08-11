<!--== Header Start ==-->
<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
  	<!--== Start Top Search ==-->
    <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="icofont icofont-close"></i></a>
      <div id="fullscreen-search-wrapper">
        <form method="get" id="fullscreen-searchform">
          <input type="text" value="" placeholder="Type and hit Enter..." id="fullscreen-search-input" class="search-bar-top">
          <i class="fullscreen-search-icon icofont icofont-search">
          <input value="" type="submit">
          </i>
        </form>
      </div>
    </div>
    <!--== End Top Search ==-->
    <div class="container">
      

       <!--== Start Header Navigation ==-->
       <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
        <div class="logo"> <a href="{{ url('/') }}"> <img class="logo logo-display" src="{{asset('assets/images/logo2.png')}}" alt=""> <img class="logo logo-scrolled" src="{{asset('assets/images/logo2.png')}}" alt=""> </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
          <li class="dropdown megamenu-fw"> <a href="{{ url('/') }}" class="nav-link" >Home</a>
     
          </li>
          <li class="dropdown"> <a href="{{ url('/about') }}" class="nav-link" >About</a>
      
          </li>
       
          <li class="dropdown"> <a href="{{ url('/portfolio') }}" class="nav-link" >Portofilio</a>
  
          </li>

 <li class="dropdown"> <a href="{{ url('/careers') }}" class="nav-link" >Careers</a>
 
 </li>
 
      
         
          <li class="dropdown megamenu-fw"> <a href="{{ url('/contact') }}" class="nav-link" >Contact</a>
            
      </div>
      <!--== /.navbar-collapse ==-->
    </div>
  </nav>
  <!--== Header End ==-->