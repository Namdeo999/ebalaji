@extends('layouts.web.app')
@section('page_title', 'Ebala Ji Services')

@section('content')

<div class="banner-five-area" style='background:linear-gradient(0deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), radial-gradient(77.36% 256.97% at 77.36% 57.52%, #EEEFAF 0%, #C3E3FA 100%)'>
    <div class="container-fluid" >
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-five-content">
                    <h1>Welcome to <b>Ebalaji</b> Online PAN Services</h1>
                    <p>PAN Cards have become more prominent in the recent past, as the government has mandated using PAN Card for most official purposes. With Ebalaji PAN Card API, businesses can now assist their clients to acquire their PAN Card without having to go through the hassle of long queues and confusing documentation. </p>
                    {{-- <a href="contact.html" class="default-btn btn-bg-two border-radius-50 ">Get A Quote</a> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-five-img">
                    <img src="{{asset('assets/images/pan-image.png')}}" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<section class="work-process-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Our Working Process</span>
            <h2>How Our Services Will Help You to Grow Your Business</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-3 col-sm-6">
                <div class="work-process-card-three">
                    <div class="number-title">01.</div>
                    <h3>Instant and easy onboarding</h3>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p> --}}
                    <i class="flaticon-project"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="work-process-card-three">
                    <div class="number-title">02.</div>
                    <h3> No working capital requirement</h3>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p> --}}
                    <i class="flaticon-chip"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="work-process-card-three">
                    <div class="number-title">03.</div>
                    <h3> Trusted systems, with industry best </h3>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p> --}}
                    <i class="flaticon-effective"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="work-process-card-three">
                    <div class="number-title">04.</div>
                    <h3> Support business at all times</h3>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p> --}}
                    <i class="flaticon-bullhorn"></i>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="about-area pt-80 pb-70" style="background-color: #ffffff;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="{{asset('assets/images/online-pan-card-application.jpg')}}" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <h1 class="font-bold text-primary">EBalaji Pay Online PAN Card Services</h1>
                        <p>
                            PAN card service is most demanding service in the industry, so we have developed software for PAN card service, using PAN card software or application, admin can create PAN card agents in all over india, and enable UTI/NSDL PAN card service for all registered PAN card agents to your business PAN card panel.
                        </p>
                        <p>
                            Ebalaji pay is one of the best PAN cards service and API solution provider in India, offering PAN card service extremely economical. And all PAN card application can be processed using eKYC..
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="services-area-four pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="services-left">
                    <div class="section-title">
                        <span class="sp-color2">Our Services</span>
                        <h2>Searching for a Solution!</h2>
                        <!-- <p class="margin-auto">
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris Morbi accumsan ipsum velit.
                        </p> -->
                    </div>
                    <a href="services" class="default-btn btn-bg-two border-radius-50 text-center">View All Services</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="services-card services-card-color-bg">
                            <i class="flaticon-consultant"></i>
                            <h3><a href="service-details.html">Bill Payments & Recharge</a></h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at ligula eget lectus consequat volutpat.</p> -->
                            <!-- <a href="service-details.html" class="learn-btn">Learn More <i class='bx bx-chevron-right'></i></a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="services-card services-card-color-bg">
                            <i class="flaticon-consulting"></i>
                            <h3><a href="service-details.html">Banking Services</a></h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at ligula eget lectus consequat volutpat.</p> -->
                            <!-- <a href="service-details.html" class="learn-btn">Learn More <i class='bx bx-chevron-right'></i></a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="services-card services-card-color-bg">
                            <i class="flaticon-web-development"></i>
                            <h3><a href="service-details.html">Payment Services</a></h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at ligula eget lectus consequat volutpat.</p> -->
                            <!-- <a href="service-details.html" class="learn-btn">Learn More <i class='bx bx-chevron-right'></i></a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="services-card services-card-color-bg">
                            <i class="flaticon-stats"></i>
                            <h3><a href="service-details.html">Travel Services</a></h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at ligula eget lectus consequat volutpat.</p> -->
                            <!-- <a href="service-details.html" class="learn-btn">Learn More <i class='bx bx-chevron-right'></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="counter-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Numbers Are Talking</span>
            <h2>Let’s Check Our Business Growth and Success Story</h2>
            {{-- <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris Morbi accumsan ipsum velit. </p> --}}
        </div>
        <div class="row pt-45">
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-another-content">
                    <i class="flaticon-web-development"></i>
                    <h3>170+</h3>
                    {{-- <span>Delivered Goods</span> --}}
                </div>
            </div>
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-another-content">
                    <i class="flaticon-consulting-1"></i>   
                    <h3>245+</h3>
                    {{-- <span>IT Consulting</span> --}}
                </div>
            </div>
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-another-content">
                    <i class="flaticon-startup"></i>
                    <h3>3550+</h3>
                    {{-- <span>Fully Launched</span> --}}
                </div>
            </div>
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-another-content">
                    <i class="flaticon-tick"></i>
                    <h3>6545+</h3>
                    {{-- <span>Project Completed</span> --}}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- /Applications/XAMPP/xamppfiles/htdocs --}}





@endsection