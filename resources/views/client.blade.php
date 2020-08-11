@extends('layouts.layout')

@section('content')

    <!--== Page Title Start ==-->
    <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url(&quot;assets/images/THECOSTMER.jpg&quot;); transform: translateY(0px);">
            <div class="container">
                <div class="page-title text-center white-color">
                    <h1>Our Clients</h1>
                    <h4 class="text-uppercase mt-30">Be one of our valuable clients</h4>
                </div>
            </div>
        </section>
    </div>
    <!--== Page Title End ==-->


    <section class="white-bg">
        <div class="container">
            <div class="row mt-50">
                 @foreach($clients as $client)
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
                        <div class="">
                            <a href="#"><img src="assets/images/clients/{{$client->logo}}" alt="01"></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
{{--            {!! $clients->render() !!}--}}

        </div>
    </section>



@endsection
