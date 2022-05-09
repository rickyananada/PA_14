
<x-webLayout title="CakeGift">
    <div class="shop-body mb-90">
        <div class="container-fluid">
            <nav aria-label="breadcrumb" class="mb-40">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">CakeGift</li>
                </ol>
            </nav>
            <div class="shop-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="filter-heading">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                    <div class="filter-shown-item">
                                        <p class="mb-0">Showing <span>1</span>–<span>24</span> of <span
                                                class="total_count">56</span> results</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-12"></div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-12 d-flex justify-content-end position-static">
                                    <div class="shop-filter-tab">
                                        <ul class="nav nav-pills">
                                            <li><span>Views</span></li>
                                            <li class="nav-item" >
                                                <a data-toggle="pill" href="#shop-tab-3" data-placement="top"
                                                    title="4 grid" class="active"><i class="fal fa-border-center-v"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-toggle="pill" href="#shop-tab-4" data-placement="top"
                                                    title="list view"><i class="fal fa-list"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /. filter heading -->
                        <div class="filter-content">
                            <div class="tab-content">

                                {{-- 4 Coloum --}}
                                <div class="tab-pane fade  show active" id="shop-tab-3">
                                    <div class="product-wrapper mt-55">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="{{ route('product') }}" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="{{ route('product') }}" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box mb-40">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-img">
                                                            <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                                            <a href="single-product-4.html" class="d-block">
                                                                <div class="second-img">
                                                                    <img src="{{ asset('img/12.jpeg') }}" alt=""
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="product-img-link quick-view-1 text-capitalize">Quick
                                                                view</a>
                                                        </div>

                                                        <div class="product-desc pb-20">
                                                            <a href="single-product-4.html" class="product-title">Light green crewnec...</a>
                                                            <div class="price-switcher">
                                                                <span class="price switcher-item">$58.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-20">
                                            <a href="shop.html" class="load-more">LOAD MORE...</a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Description --}}
                                <div class="tab-pane fade" id="shop-tab-4">
                                    <div class="product-wrapper mt-55">
                                        <div class="product-box mb-40">
                                            <div class="product-box-wrapper">
                                                <div class="list-product mb-50">
                                                    <div class="list-product-wrapper">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-4 col-md-4">
                                                                <div class="list-product-img">
                                                                    <div class="product-img">
                                                                        <img src="{{ asset('img/12.jpeg') }}" class="w-100"
                                                                            alt="">
                                                                        <a href="{{ route('product') }}" class="d-block">
                                                                            <div class="second-img">
                                                                                <img src="img/product/8-hover.jpg"
                                                                                    alt="" class="w-100">
                                                                            </div>
                                                                        </a>
                                                                        <a href="{{ route('product') }}"
                                                                            class="product-img-link quick-view-1 text-capitalize">Quick
                                                                            view</a>
                                                                        <span
                                                                            class="sale bg-red text-white">sale!</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-8 col-lg-8 col-md-8">
                                                                <div class="list-product-desc">
                                                                    <h3><a href="{{ route('product') }}" class="title mb-15">Blandit vel eros condimentum ulla</a></h3>
                                                                    <div class="rating">
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star"></i>
                                                                    </div>
                                                                    <div class="price"><span>$90.00</span></div>
                                                                    <div class="desc">
                                                                        <p>Typi non habent claritatem insitam, est usus
                                                                            legentis in iis qui facit eorum claritatem.
                                                                            Investigationes demonstraverunt lectores legere
                                                                            me lius quod ii legunt saepius. Claritas est
                                                                            etiam processus A Capitalize on low hanging
                                                                            fruit to identify a ballpark value added
                                                                            activity to beta test. Override the digital
                                                                            divide with additional clickthroughs from DevOps
                                                                            Typi non habent claritatem insitam, est usus
                                                                            legentis in iis qui facit eorum claritatem.
                                                                            Investigationes demonstraverunt lectores legere
                                                                            me lius quod ii legunt saepius. Claritas est
                                                                            etiam processus A Capitalize on low hanging
                                                                            fruit to identify a ballpark value added
                                                                            activity to beta test. Override the digital
                                                                            divide with additional clickthroughs from DevOps</p>
                                                                        <ul>
                                                                            <li>– Light green crewneck sweatshirt.</li>
                                                                            <li>– Hand pockets.</li>
                                                                            <li>– Relaxed fit.</li>
                                                                        </ul>
                                                                        <a href="cart.html"
                                                                            class="list-add-cart-btn text-capitalize mt-40">Pesan Sekarang!
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /. list product -->
                                            </div>
                                        </div>
                                        <div class="product-box mb-40">
                                            <div class="product-box-wrapper">
                                                <div class="list-product mb-50">
                                                    <div class="list-product-wrapper">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-4 col-md-4">
                                                                <div class="list-product-img">
                                                                    <div class="product-img">
                                                                        <img src="{{ asset('img/12.jpeg') }}" class="w-100"
                                                                            alt="">
                                                                        <a href="single-product-4.html" class="d-block">
                                                                            <div class="second-img">
                                                                                <img src="img/product/9-hover.jpg"
                                                                                    alt="" class="w-100">
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)"
                                                                            class="product-img-link quick-view-1 text-capitalize">Quick
                                                                            view</a>
                                                                        <span
                                                                            class="sale bg-red text-white">sale!</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-8 col-lg-8 col-md-8">
                                                                <div class="list-product-desc">
                                                                    <h3><a href="single-product-4.html" class="title mb-15">Blossom Porcelain Side Plates</a></h3>
                                                                    <div class="rating">
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star"></i>
                                                                    </div>
                                                                    <div class="price"><span class="red-color">$399</span><del>$499</del></div>
                                                                    <div class="desc">
                                                                        <p>Typi non habent claritatem insitam, est usus
                                                                            legentis in iis qui facit eorum claritatem.
                                                                            Investigationes demonstraverunt lectores legere
                                                                            me lius quod ii legunt saepius. Claritas est
                                                                            etiam processus A Capitalize on low hanging
                                                                            fruit to identify a ballpark value added
                                                                            activity to beta test. Override the digital
                                                                            divide with additional clickthroughs from DevOps
                                                                            […]</p>
                                                                        <ul>
                                                                            <li>– Light green crewneck sweatshirt.</li>
                                                                            <li>– Hand pockets.</li>
                                                                            <li>– Relaxed fit.</li>
                                                                        </ul>
                                                                        <a href="cart.html"
                                                                            class="list-add-cart-btn text-capitalize mt-40">Pesan Sekarang!
                                                                            </a>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /. list product -->
                                            </div>
                                        </div>
                                        <div class="product-box mb-40">
                                            <div class="product-box-wrapper">
                                                <div class="list-product mb-50">
                                                    <div class="list-product-wrapper">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-4 col-md-4">
                                                                <div class="list-product-img">
                                                                    <div class="product-img">
                                                                        <img src="{{ asset('img/12.jpeg') }}" class="w-100"
                                                                            alt="">
                                                                        <a href="single-product-4.html" class="d-block">
                                                                            <div class="second-img">
                                                                                <img src="img/product/farniture-1-hover.jpg"
                                                                                    alt="" class="w-100">
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)"
                                                                            class="product-img-link quick-view-1 text-capitalize">Quick
                                                                            view</a>
                                                                        <span
                                                                            class="sale bg-red text-white">sale!</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-8 col-lg-8 col-md-8">
                                                                <div class="list-product-desc">
                                                                    <h3><a href="single-product-4.html" class="title mb-15">Blossom Porcelain Side Platess</a></h3>
                                                                    <div class="rating">
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star"></i>
                                                                    </div>
                                                                    <div class="price"><span class="red-color">$399</span><del>$499</del></div>
                                                                    <div class="desc">
                                                                        <p>Typi non habent claritatem insitam, est usus
                                                                            legentis in iis qui facit eorum claritatem.
                                                                            Investigationes demonstraverunt lectores legere
                                                                            me lius quod ii legunt saepius. Claritas est
                                                                            etiam processus A Capitalize on low hanging
                                                                            fruit to identify a ballpark value added
                                                                            activity to beta test. Override the digital
                                                                            divide with additional clickthroughs from DevOps
                                                                            […]</p>
                                                                        <ul>
                                                                            <li>– Light green crewneck sweatshirt.</li>
                                                                            <li>– Hand pockets.</li>
                                                                            <li>– Relaxed fit.</li>
                                                                        </ul>
                                                                        <a href="cart.html"
                                                                            class="list-add-cart-btn text-capitalize mt-40">Pesan Sekarang!
                                                                            </a>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /. list product -->
                                            </div>
                                        </div>
                                        <div class="product-box mb-40">
                                            <div class="product-box-wrapper">
                                                <div class="list-product mb-50">
                                                    <div class="list-product-wrapper">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-4 col-md-4">
                                                                <div class="list-product-img">
                                                                    <div class="product-img">
                                                                        <img src="{{ asset('img/12.jpeg') }}" class="w-100"
                                                                            alt="">
                                                                        <a href="single-product-4.html" class="d-block">
                                                                            <div class="second-img">
                                                                                <img src="img/product/9-hover.jpg"
                                                                                    alt="" class="w-100">
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)"
                                                                            class="product-img-link quick-view-1 text-capitalize">Quick
                                                                            view</a>
                                                                        <span
                                                                            class="sale bg-red text-white">sale!</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-8 col-lg-8 col-md-8">
                                                                <div class="list-product-desc">
                                                                    <h3><a href="single-product-4.html" class="title mb-15">Blossom Porcelain Side Plates</a></h3>
                                                                    <div class="rating">
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star"></i>
                                                                    </div>
                                                                    <div class="price"><span class="red-color">$399</span><del>$499</del></div>
                                                                    <div class="desc">
                                                                        <p>Typi non habent claritatem insitam, est usus
                                                                            legentis in iis qui facit eorum claritatem.
                                                                            Investigationes demonstraverunt lectores legere
                                                                            me lius quod ii legunt saepius. Claritas est
                                                                            etiam processus A Capitalize on low hanging
                                                                            fruit to identify a ballpark value added
                                                                            activity to beta test. Override the digital
                                                                            divide with additional clickthroughs from DevOps
                                                                            […]</p>
                                                                        <ul>
                                                                            <li>– Light green crewneck sweatshirt.</li>
                                                                            <li>– Hand pockets.</li>
                                                                            <li>– Relaxed fit.</li>
                                                                        </ul>
                                                                        <a href="cart.html"
                                                                            class="list-add-cart-btn text-capitalize mt-40">Pesan Sekarang!
                                                                            </a>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /. list product -->
                                            </div>
                                        </div>
                                        <div class="product-box mb-40">
                                            <div class="product-box-wrapper">
                                                <div class="list-product mb-50">
                                                    <div class="list-product-wrapper">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-4 col-md-4">
                                                                <div class="list-product-img">
                                                                    <div class="product-img">
                                                                        <img src="{{ asset('img/12.jpeg') }}" class="w-100"
                                                                            alt="">
                                                                        <a href="single-product-4.html" class="d-block">
                                                                            <div class="second-img">
                                                                                <img src="img/product/farniture-1-hover.jpg"
                                                                                    alt="" class="w-100">
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)"
                                                                            class="product-img-link quick-view-1 text-capitalize">Quick
                                                                            view</a>
                                                                        <span
                                                                            class="sale bg-red text-white">sale!</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-8 col-lg-8 col-md-8">
                                                                <div class="list-product-desc">
                                                                    <h3><a href="single-product-4.html" class="title mb-15">Blossom Porcelain Side Platess</a></h3>
                                                                    <div class="rating">
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star active"></i>
                                                                        <i class="fal fa-star"></i>
                                                                    </div>
                                                                    <div class="price"><span class="red-color">$399</span><del>$499</del></div>
                                                                    <div class="desc">
                                                                        <p>Typi non habent claritatem insitam, est usus
                                                                            legentis in iis qui facit eorum claritatem.
                                                                            Investigationes demonstraverunt lectores legere
                                                                            me lius quod ii legunt saepius. Claritas est
                                                                            etiam processus A Capitalize on low hanging
                                                                            fruit to identify a ballpark value added
                                                                            activity to beta test. Override the digital
                                                                            divide with additional clickthroughs from DevOps
                                                                            […]</p>
                                                                        <ul>
                                                                            <li>– Light green crewneck sweatshirt.</li>
                                                                            <li>– Hand pockets.</li>
                                                                            <li>– Relaxed fit.</li>
                                                                        </ul>
                                                                        <a href="cart.html"
                                                                            class="list-add-cart-btn text-capitalize mt-40">Pesan Sekarang!
                                                                            </a>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /. list product -->
                                            </div>
                                        </div>
                                        <!-- /. product box -->
                                        <div class="text-center mt-20">
                                            <a href="shop.html" class="load-more">LOAD MORE...</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /. filter content -->
                    </div>
                    <!-- /. shop products -->
                </div>
            </div>
        </div>
    </div>

</x-webLayout>