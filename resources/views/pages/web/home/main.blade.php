<x-webLayout title="Home">

    <div class="intro11-slider-wrap section-2 mrl-50">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="intro11-section swiper-slide slide-4 slide-bg-2 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content-2 text-center">
                        <h1 class="different-title">Welcome</h1>
                        <h2 class="title">2020 Flower Trend</h2>
                        <a href="product-details.html" class="btn flosun-button secondary-btn theme-color rounded-0">Shop Now</a>
                    </div>
                    <!-- Intro Content End -->
                </div>
                <div class="intro11-section swiper-slide slide-3 slide-bg-2 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content text-left">
                        <h3 class="title-slider text-uppercase">Top Trend</h3>
                        <h2 class="title">Flowers and Candle <br> Birthday Gift</h2>
                        <p class="desc-content">Lorem ipsum dolor sit amet, pri autem nemore bonorum te. Autem fierent ullamcorper ius no, nec ea quodsi invenire. </p>
                        <a href="product-details.html" class="btn flosun-button secondary-btn rounded-0">Shop Now</a>
                    </div>
                    <!-- Intro Content End -->
                </div>
            </div>
            <!-- Slider Navigation -->
            <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
            <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
            <!-- Slider pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="product-area mt-text-2 mb-text-3">
        <div class="container custom-area-2 overflow-hidden">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center mb-30">
                        <span class="section-title-1">Wonderful gift</span>
                        <h3 class="section-title-3">Our Product</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row product-row">
                <div class="col-12 col-custom">
                    <div class="product-slider swiper-container anime-element-multi">
                        <div class="swiper-wrapper">
							@foreach ($collection as $item)
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="{{ route('product.show',$item->id) }}">
                                            <img src="{{ asset('asset/gambar/'.$item->image_product) }}" alt="" class="product-image-1 w-100">
                                            <img src="{{ asset('asset/gambar/'.$item->image_product) }}" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="{{ route('product.show',$item->id) }}">{{ $item->name_product }}</a></h4>
                                        </div>
                                        <div class="price-box">
											<span class="regular-price ">Rp. {{ $item->price_product }}</span>
                                        </div>
                                        <a href="{{ route('product.show',$item->id) }}" title="Quick View" class="btn product-cart">View...</a>
                                    </div>
                                </div>
                            </div>
							@endforeach
                        </div>
                        <!-- Slider pagination -->
                        <div class="swiper-pagination default-pagination"></div>
						<br>
						<div class="section-title text-center mb-30"><a href="{{ route('product.index') }}">See More . . .</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	{{-- <div class="modal flosun-modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
					<span class="close-icon" aria-hidden="true">x</span>
				</button>
				<div class="modal-body">
					<div class="container-fluid custom-area">
						<div class="row">
							<div class="col-md-6 col-custom">
								<div class="modal-product-img">
									<a class="w-100" href="#">
										<img class="w-100" src="{{ asset('asset/gambar/'.$item->image_product) }}" alt="Product">
									</a>
								</div>
							</div>
							<div class="col-md-6 col-custom">
								<div class="modal-product">
									<div class="product-content">
										<div class="product-title">
											<h4 class="title">{{ $item->name_product }}</h4>
										</div>
										<div class="price-box">
											<span class="regular-price ">Rp. {{ $item->price_product }}</span>
										</div>
										<p class="desc-content">{!! $item->description_product !!}</p>
										<div class="quantity-with-btn">
											<div class="add-to_btn">
												<a class="btn flosun-button secondary-btn rounded-0" href="#">Pesan Sekarang!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

    
    

	
    {{-- <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="clear"></div>
				@php
					$categories = \App\Models\ProductCategory::get();
					$category = \App\Models\ProductCategory::count();
				@endphp
				<div class="tabs topmargin-lg clearfix" id="tab-12">
					<ul class="tab-nav clearfix">
						@foreach ($categories as $item )
							<li><a href="#tabs-{{ $item->id }}">{{ $item->name_product_category }}</a></li>
						@endforeach
					</ul>
					<div class="tab-container">
						@foreach ($collection as $item)
						<div class="tab-content" id="tabs-{{ $item->id_product_category }}">
						
							<div class="shop row gutter-30">
								<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="grid-inner">
										<div class="product-image">
											<img src="{{ asset('asset/gambar/'.$item->image_product) }}" alt="Checked Short Dress">
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">{{ $item->name_product }}</a></h3></div>
											<div class="product-price">Rp. {{ $item->price_product }}</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						@endforeach
					</div>
				</div>
				<div class="clear bottommargin-sm"></div>
            </div>
        </div>
    </section> --}}


	{{-- <section id="content">
		<div class="content-wrap">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto mb-4">
						<h3 class="fw-medium h1">All <span data-animate="svg-underline-animated" class="svg-underline nocolor"><span>Products</span></span></h3>
					</div>
					<div class="col-auto mb-4 d-flex">
					</div>
				</div>
				<div id="shop" class="shop row gutter-30 col-mb-30 mt-3">
					@foreach ($collection as $item)
					<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="grid-inner">
							<div class="product-image">
								<a href="{{ route('product.show',$item->id) }}"><img src="{{ asset('asset/gambar/'.$item->image_product) }}" alt="Light Grey Sofa"></a>
								<div class="bg-overlay">
									<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
										<a href="#" class="btn btn-light me-2"><i class="icon-line-shopping-cart"></i></a>
										<a href="demos/furniture/ajax/quick-view.html" class="btn btn-light" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
									</div>
								</div>
							</div>
							<div class="product-desc">
								<div class="product-title mb-0"><h4 class="mb-0"><a class="fw-medium" href="{{ route('product.show',$item->id) }}">{{ $item->name_product }}</a></h4></div>
								<h5 class="product-price fw-normal">Rp. {{ $item->price_product }}</h5>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section> --}}
</x-webLayout>