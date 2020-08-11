<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Designsninja">
<!-- description -->
<meta name="description" content="PBC is a full fledged Marketing Agency">
<!-- keywords -->
<meta name="keywords" content="creative, fullscreen, business, photography, portfolio,   start-up, ui/ux,studio, branding, creative design, multipurpose, parallax, personal, masonry, grid,  carousel, career">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>PBC</title>
<link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}">

<!-- Core Style Sheets -->
<link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
<!-- Responsive Style Sheets -->
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
<!-- Revolution Style Sheets -->
<link rel="stylesheet" type="text/css" hsref="{{asset('revolution/css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('revolution/css/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('revolution/css/navigation.css')}}">
<link rel="stylesheet" type="text/css"href="{{asset('assets/css/masteredit.css')}}">
 <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '198582904670506');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=198582904670506&ev=PageView&noscript=1"
/></noscript>
</head>
<body>
    <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '198582904670506');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=198582904670506&ev=PageView&noscript=1"
/></noscript>
<!--== Loader Start ==-->
<div id="loader-overlay">
  <div class="loader">
    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
      <rect x="20" y="50" width="4" height="10" fill=" #792b71">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0" dur="0.6s" repeatCount="indefinite" />
      </rect>
      <rect x="30" y="50" width="4" height="10" fill=" #792b71">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0.2s" dur="0.6s" repeatCount="indefinite" />
      </rect>
      <rect x="40" y="50" width="4" height="10" fill=" #792b71">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0.4s" dur="0.6s" repeatCount="indefinite" />
      </rect>
    </svg>
  </div>
</div>
<!--== Loader End ==-->

<!--== Wrapper Start ==-->
<div class="wrapper">

  

  <!-- start header -->
  @include('layouts.header')
  <!-- end header -->

  <!-- Content Section -->
    @yield('content')
  <!-- end of Content Section -->

    <!-- start footer -->
    @include('layouts.footer')
    <!-- end footer -->