<x-master-layout>
    <!-- Title Bar -->
		<div class="pbmit-title-bar-wrapper" style="background-image: url({{asset('classic/images/banner-slider-img/demo1-slide03.png')}});">
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
		<!-- Title Bar End-->

		<div class="page-content">  

			<!-- Services Start --> 
			<section class="section-xl">
				<div class="container">
					<div class="pbmit-element-posts-wrapper row">
						<article class="pbmit-service-style-1 col-md-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-box-content-wrap">
									<div class="pbmit-service-image-wrapper">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="{{asset('classic/images/remodelling.jpeg')}}" class="img-fluid" alt="Remodeling Bathroom & Homes">
											</div>
										</div>
										<div class="pbmit-service-btn-wrapper">
											<a class="pbmit-service-btn" href="{{ route('service-details-remodeling-bathroom-homes') }}" title="Remodeling Bathroom & Homes">
												<span class="pbmit-button-icon">
													<i class="pbmit-base-icon-angle-right"></i>
												</span>
											</a>
										</div>
										<a class="pbmit-link" href="{{ route('service-details-remodeling-bathroom-homes') }}"></a>
									</div>
									<div class="pbmit-content-box">
										<div class="pbminfotech-box-number">01</div>
										<div class="pbmit-serv-cat">
											<a href="services.html" rel="tag">Remodeling</a>
										</div>
										<h3 class="pbmit-service-title">
											<a href="{{ route('service-details-remodeling-bathroom-homes') }}">Bathrooms Consulting/Designs & Remodelling</a>
										</h3>
										<div class="pbmit-service-description">
											<p>We specialize in transforming your bathroom and home spaces into something truly remarkable.</p>
										</div>
										<!-- <div class="pbmit-service-icon">
											<i class="pbmit-xclean-icon pbmit-xclean-icon-store"></i>
										</div> -->
									</div>
								</div>
							</div>
						</article>
			
						<article class="pbmit-service-style-1 col-md-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-box-content-wrap">
									<div class="pbmit-service-image-wrapper">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="{{ asset('classic/images/slide01.jpg')}}" class="img-fluid" alt="Interior Design">
											</div>
										</div>
										<div class="pbmit-service-btn-wrapper">
											<a class="pbmit-service-btn" href="{{ route('service-details-interior-design') }}" title="Interior Design">
												<span class="pbmit-button-icon">
													<i class="pbmit-base-icon-angle-right"></i>
												</span>
											</a>
										</div>
										<a class="pbmit-link" href="{{ route('service-details-interior-design') }}"></a>
									</div>
									<div class="pbmit-content-box">
										<div class="pbminfotech-box-number">02</div>
										<div class="pbmit-serv-cat">
											<a href="services.html" rel="tag">Design</a>
										</div>
										<h3 class="pbmit-service-title">
											<a href="{{ route('service-details-interior-design') }}">Interior Design</a>
										</h3>
										<div class="pbmit-service-description">
											<p>Enhance your spaces with our creative and innovative interior design solutions tailored to your style.</p>
										</div>
										<!-- <div class="pbmit-service-icon">
											<i class="pbmit-xclean-icon pbmit-xclean-icon-dusting"></i>
										</div> -->
									</div>
								</div>
							</div>
						</article>
			
						<article class="pbmit-service-style-1 col-md-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-box-content-wrap">
									<div class="pbmit-service-image-wrapper">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="{{ asset('classic/images/slide06.jpeg')}}" class="img-fluid" alt="Project Management">
											</div>
										</div>
										<div class="pbmit-service-btn-wrapper">
											<a class="pbmit-service-btn" href="{{ route('service-details-project-management') }}" title="Project Management">
												<span class="pbmit-button-icon">
													<i class="pbmit-base-icon-angle-right"></i>
												</span>
											</a>
										</div>
										<a class="pbmit-link" href="{{ route('service-details-project-management') }}"></a>
									</div>
									<div class="pbmit-content-box">
										<div class="pbminfotech-box-number">03</div>
										<div class="pbmit-serv-cat">
											<a href="services.html" rel="tag">Management</a>
										</div>
										<h3 class="pbmit-service-title">
											<a href="{{ route('service-details-project-management') }}">Project Management</a>
										</h3>
										<div class="pbmit-service-description">
											<p>We help you manage your projects from start to finish, ensuring everything is completed on time and within budget.</p>
										</div>
										<!-- <div class="pbmit-service-icon">
											<i class="pbmit-xclean-icon pbmit-xclean-icon-vaccum-cleaner"></i>
										</div> -->
									</div>
								</div>
							</div>
						</article>
			
						<article class="pbmit-service-style-1 col-md-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-box-content-wrap">
									<div class="pbmit-service-image-wrapper">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="{{ asset('classic/images/slide03.jpg')}}" class="img-fluid" alt="Cleaning Services">
											</div>
										</div>
										<div class="pbmit-service-btn-wrapper">
											<a class="pbmit-service-btn" href="{{ route('service-details-cleaning-services') }}" title="Cleaning Services">
												<span class="pbmit-button-icon">
													<i class="pbmit-base-icon-angle-right"></i>
												</span>
											</a>
										</div>
										<a class="pbmit-link" href="{{ route('service-details-cleaning-services') }}"></a>
									</div>
									<div class="pbmit-content-box">
										<div class="pbminfotech-box-number">04</div>
										<div class="pbmit-serv-cat">
											<a href="services.html" rel="tag">Cleaning</a>
										</div>
										<h3 class="pbmit-service-title">
											<a href="{{ route('service-details-cleaning-services') }}">Cleaning Services</a>
										</h3>
										<div class="pbmit-service-description">
											<p>Our cleaning services will leave your home or office spotless, ensuring a healthy and welcoming environment.</p>
										</div>
										<!-- <div class="pbmit-service-icon">
											<i class="pbmit-xclean-icon pbmit-xclean-icon-duster"></i>
										</div> -->
									</div>
								</div>
							</div>
						</article>
						<article class="pbmit-service-style-1 col-md-4">
							<div class="pbminfotech-post-item">
								<div class="pbmit-box-content-wrap">
									<div class="pbmit-service-image-wrapper">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="{{ asset('classic/images/slide05.jpeg')}}" class="img-fluid" alt="Solar Analysis">
											</div>
										</div>
										<div class="pbmit-service-btn-wrapper">
											<a class="pbmit-service-btn" href="{{ route('service-details-solar-analysis') }}" title="Solar Analysis">
												<span class="pbmit-button-icon">
													<i class="pbmit-base-icon-angle-right"></i>
												</span>
											</a>
										</div>
										<a class="pbmit-link" href="{{ route('service-details-solar-analysis') }}"></a>
									</div>
									<div class="pbmit-content-box">
										<div class="pbminfotech-box-number">04</div>
										<div class="pbmit-serv-cat">
											<a href="{{ route('service-details-solar-analysis') }}" rel="tag">Analysis</a>
										</div>
										<h3 class="pbmit-service-title">
											<a href="{{ route('service-details-solar-analysis') }}">Solar Analysis</a>
										</h3>
										<div class="pbmit-service-description">
											<p>With our analysis, your solar gadgets ae in safe hands.</p>
										</div>
										<!-- <div class="pbmit-service-icon">
											<i class="pbmit-xclean-icon pbmit-xclean-icon-duster"></i>
										</div> -->
									</div>
								</div>
							</div>
						</article>
			
						<!-- Repeat similarly for additional services -->
			
					</div>
				</div>
			</section>			
			<!-- Services end --> 
</x-master-layout>