<x-master-layout>
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper" style="background-image: url({{ asset($product->image) }});">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title" style="color: wheat">{{ $product->name }}</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span>
                                <a title="" href="{{ route('home') }}" class="home"><span>Home</span></a>
                            </span>
                            <span class="sep"><i class="pbmit-base-icon-angle-right"></i></span>
                            <span>
                                <a title="" href="{{ route('products.index') }}" class="home"><span>Products</span></a>
                            </span>
                            <span class="sep"><i class="pbmit-base-icon-angle-right"></i></span>
                            <span><span class="post-root post post-post current-item" style="color: wheat">{{ $product->name }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item-center justify-center flex text-center">
        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
    </div>
    <!-- Page Content -->
    <div class="page-content" id="page">
        <section class="site-content service-details">
            <div class="container">
                <div class="row">
                    <!-- Product Content -->
                    <div class="col-md-12 col-xl-9 service-left-col">
                        <div class="pbmit-entry-content">
                            <div class="pbmit-service_content">
                                <div class="pbmit-heading animation-style2">
                                    <h3 class="pbmit-title mb-3">{{ $product->name }}</h3>
                                </div>
                                <p class="pbmit-firstletter">{!! $product->description !!}</p>
                            </div>
                        </div>

                        <!-- Purchase Button -->
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                            Purchase Now
                        </button>

                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-12 col-xl-3 service-right-col sidebar">
                        <aside class="service-sidebar">
                            <!-- Dynamic Product List -->
                            <aside class="widget post-list">
                                <h2 class="widget-title">Our Products</h2>
                                <div class="all-post-list">
                                    <ul>
                                        @foreach($allProducts as $item)
                                            <li class="{{ $product->id == $item->id ? 'post-active' : '' }}">
                                                <a href="{{ route('product.details', $item->id) }}">{{ $item->name }}</a>
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
                                        <h3 class="pbmit-ads-title">Best Products</h3>
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

    <!-- Purchase Modal -->
    <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="purchaseModalLabel">Purchase {{ $product->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="purchaseForm" action="{{ route('purchase.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <button type="submit" class="btn btn-success">Submit Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master-layout>
