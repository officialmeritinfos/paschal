@extends('home.base')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('home/images/backgrounds/main-slider-2-1.jpg')}})">
        </div>
        <div class="page-header-bg-2" style="background-image: url({{asset('home/images/backgrounds/main-slider-2-1.jpg')}})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{$pageName}}</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">{{$pageName}}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!-- Start Services Details Area -->
    <div class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="services-details-desc">
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->short}}</p>
                        <img src="{{asset('home/serv/'.$service->photo)}}" alt="image">
                        <p>
                            {!! str_replace('MYSITE',$siteName,$service->content) !!}
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
