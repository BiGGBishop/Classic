<x-master-layout>
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper" style="background-image: url({{ asset('classic/images/banner-slider-img/demo1-slide03.png') }});">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title" style="color: wheat"> Services</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span>
                                <a title="" href="#" class="home"><span>Classic</span></a>
                            </span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item" style="color: wheat"> Services</span></span>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- Title Bar End -->

    <div class="page-content">  
        <!-- Services Start --> 
        <section class="section-xl">
            <div class="container">
                <div class="pbmit-element-posts-wrapper row">
                    @foreach($services as $key => $service)
                        <article class="pbmit-service-style-1 col-md-4">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-box-content-wrap">
                                    <div class="pbmit-service-image-wrapper">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset($service->image) }}" class="img-fluid" alt="{{ $service->title }}">
                                            </div>
                                        </div>
                                        <div class="pbmit-service-btn-wrapper">
                                            <a class="pbmit-service-btn" href="{{ route('service.details', $service->id) }}" title="{{ $service->title }}">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-angle-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <a class="pbmit-link" href="{{ route('service.details', $service->id) }}"></a>
                                    </div>
                                    <div class="pbmit-content-box">
                                        <div class="pbminfotech-box-number">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</div>
                                        <div class="pbmit-serv-cat">
                                            <a href="#" rel="tag">{{ $service->category }}</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="{{ route('service.details', $service->id) }}">{{ $service->name }}</a>
                                        </h3>
                                        <div class="pbmit-service-description">
                                            <p>{!! Str::limit($service->description, 50) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>			
        <!-- Services end --> 
    </div>
</x-master-layout>
