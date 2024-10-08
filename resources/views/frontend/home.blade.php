@extends('layouts.frontend')

@section('title', 'Home')

@section('content')
    @if($home && $home->count() > 0)
        @foreach ($home as $item)        
            <div id="home" class="header-hero" style="background-image: url(images/banner-bg.svg)">
                <div class="container">
                    <div class="justify-center row">
                        <div class="w-full lg:w-2/3">
                            <div class="pt-32 mb-12 text-center lg:pt-48 header-hero-content">
                                <h2 class="mb-3 text-4xl font-bold text-white header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                    {{ $item->title ?? 'No Title' }}
                                </h2>
                                <p class="mb-8 text-white text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                    {{ $item->text ?? 'No Content' }}
                                </p>
                                <a href="#features" class="page-scroll main-btn gradient-btn gradient-btn-2 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="justify-center row">
                        <div class="w-full lg:w-2/3">
                            <div class="text-center header-hero-image wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                                <img src="/image/{{ $item->image ?? 'default.jpg' }}" alt="Hero Image" />
                            </div>
                        </div>
                    </div>
                </div>
                <div id="particles-1" class="particles"></div>
            </div>
        @endforeach
    @else
        <p>No home content available.</p>
    @endif

    <!-- Customer Section -->
    <div class="pt-24 brand-area">
        <div class="container">
            <div class="row">
                <div class="w-full">
                    <div class="items-center justify-center row lg:justify-between">
                        @if($customer && $customer->count() > 0)
                            @foreach ($customer as $brand)
                                <div class="single-logo hover:opacity-100 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <img src="/image/{{ $brand->image ?? 'default-logo.jpg' }}" alt="brand" />
                                </div>
                            @endforeach
                        @else
                            <p>No customer brands available.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-10 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title">Clean and simple design, <span> Comes with everything you need to get started!</span></h3>
                    </div>
                </div>
            </div>
            <div class="justify-center row">
                @if($card && $card->count() > 0)
                    @foreach ($card as $service)
                        <div class="w-full sm:w-2/3 lg:w-1/3">
                            <div class="mt-8 text-center single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                                <div class="services-icon">
                                    <img class="shape" src="/image/{{ $service->image ?? 'default-service.jpg' }}" alt="shape">
                                </div>
                                <div class="mt-8 services-content">
                                    <h4 class="mb-8 text-xl font-bold text-gray-900">{{ $service->title ?? 'No Title' }}</h4>
                                    <p class="mb-8">{{ $service->text ?? 'No Description' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No services available.</p>
                @endif
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="relative pt-20 about-area">
        <div class="container">
            <div class="row">
                @if($about && $about->count() > 0)
                    @foreach ($about as $info)
                        <div class="w-full lg:w-1/2">
                            <div class="mx-4 mt-12 about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="mb-4 section-title">
                                    <div class="line"></div>
                                    <h3 class="title">{{ $info->text ?? 'About Us' }}</h3>
                                </div>
                                <p class="mb-8">{{ $info->title ?? 'No Details' }}</p>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="mx-4 mt-12 text-center about-image wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="/image/{{ $info->image ?? 'default-about.jpg' }}" alt="about" />
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No about information available.</p>
                @endif
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer id="footer" class="relative z-10 footer-area pt-120">
        <div class="footer-bg" style="background-image: url({{ url('images/footer-bg.svg') }})"></div>
        <div class="container">
            <div class="footer-widget pb-120">
                <div class="row">
                    <div class="w-4/5 sm:w-2/3 md:w-3/5 lg:w-2/6">
                        <div class="row">
                            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
                                <div class="mt-12 link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="footer-title">
                                        <h4 class="mb-8 text-2xl font-bold text-white">Resources</h4>
                                    </div>
                                    <ul class="link">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="gallery">Gallery</a></li>
                                        <li><a href="blog">Blog</a></li>
                                        <li><a href="portfolio">Portfolio</a></li>
                                        <li><a href="contact">Contact</a></li>
                                        <li><a href="profile">Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-4/5 sm:w-1/3 md:w-2/5 lg:w-2/6">
                        <div class="mt-12 footer-contact wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="mb-8 text-2xl font-bold text-white">Contact Us</h4>
                            </div>
                            <ul class="contact">
                                @if($about && $about->count() > 0)
                                    @foreach ($about as $info)
                                        <li>{{ $info->phone ?? 'No phone' }}</li>
                                        <li>{{ $info->emails ?? 'No email' }}</li>
                                        <li>{{ $info->locations ?? 'No location' }}</li>
                                    @endforeach
                                @else
                                    <li>No contact information available</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
