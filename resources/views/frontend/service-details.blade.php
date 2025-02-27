<x-master-layout>
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper" style="background-image: url({{ asset($service->image) }});">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title" style="color: wheat">{{ $service->name }}</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span>
                                <a title="" href="{{ route('home') }}" class="home"><span>Home</span></a>
                            </span>
                            <span class="sep"><i class="pbmit-base-icon-angle-right"></i></span>
                            <span>
                                <a title="" href="{{ route('services.index') }}" class="home"><span>Services</span></a>
                            </span>
                            <span class="sep"><i class="pbmit-base-icon-angle-right"></i></span>
                            <span><span class="post-root post post-post current-item" style="color: wheat">{{ $service->name }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="page-content" id="page">
        <!-- Service Details -->
        <section class="site-content service-details">
            <div class="container">
                <div class="row">
                    <!-- Service Content -->
                    <div class="col-md-12 col-xl-9 service-left-col">
                        <div class="pbmit-entry-content">
                            <div class="pbmit-service_content">
                                <div class="pbmit-heading animation-style2">
                                    <h3 class="pbmit-title mb-3">{{ $service->name }}</h3>
                                </div>
                                <p class="pbmit-firstletter">{!! $service->description !!}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-12 col-xl-3 service-right-col sidebar">
                        <aside class="service-sidebar">
                            <!-- Dynamic Service List -->
                            <aside class="widget post-list">
                                <h2 class="widget-title">Our Services</h2>
                                <div class="all-post-list">
                                    <ul>
                                        @foreach($allServices as $item)
                                            <li class="{{ $service->id == $item->id ? 'post-active' : '' }}">
                                                <a href="{{ route('service.details', $item->id) }}">{{ $item->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>

                            <!-- Contact Widget -->
                            <aside class="widget pbmit-service-ad">
                                <div class="textwidget">
                                    <div class="pbmit-service-ads">
                                        <div class="pbmit-ads-call">Call +234 701 647 9781</div>
                                        <h4 class="pbmit-ads-subtitle">We Provide</h4>
                                        <h3 class="pbmit-ads-title">Best Services</h3>
                                        <a class="pbmit-btn pbmit-btn-global" href="#">
                                            <span class="pbmit-button-content-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                        <title>black-arrow</title>
                                                        <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                        <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                        <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                    </svg>
                                                </span>
                                                <span class="pbmit-button-text">Contact us Now</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </aside>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-master-layout>