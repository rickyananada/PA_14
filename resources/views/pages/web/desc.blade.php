<x-webLayout title="Product">
    <!-- single product start -->
    <section class="single-product mb-90">
        <div class="container-fluid">
            <nav aria-label="breadcrumb" class="mb-40">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index3.html">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Product</li>
                    <li class="breadcrumb-item active" aria-current="page">single Product</li>
                </ol>
            </nav>
            <div class="shop-wrapper">
                <div class="single-product-top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-12">
                            <div class="shop-img">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="active" data-toggle="pill" href="#tab-1">
                                                <img src="{{ asset('img/12.jpeg') }}" class="w-100" alt="">
                                            </a>
                                            <a class="popup-images" data-toggle="pill" href="#tab-2">
                                                <img src="{{ asset('img/logo.png') }}" class="w-100 mt-5-px" alt="">
                                            </a>
                                            <a class="popup-images" data-toggle="pill" href="#tab-3">
                                                <img src="{{ asset('img/logo.jpg') }}" class="w-100 mt-5-px" alt="">
                                            </a>
                                            <a class="popup-images" data-toggle="pill" href="#tab-4">
                                                <img src="{{ asset('img/logo1.png') }}" class="w-100 mt-5-px" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="tab-1">
                                                <div class="product-img">
                                                    <a class="popup-image" href="{{ asset('img/12.jpeg') }}"><img
                                                            src="{{ asset('img/12.jpeg') }}" class="w-100" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-2">
                                                <div class="product-img">
                                                    <a class="popup-image" href="{{ asset('img/12.jpeg') }}"><img
                                                            src="{{ asset('img/logo.png') }}" class="w-100" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-3">
                                                <div class="product-img">
                                                    <a class="popup-image" href="{{ asset('img/12.jpeg') }}"><img
                                                            src="{{ asset('img/logo.jpg') }}" class="w-100" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-4">
                                                <div class="product-img">
                                                    <a class="popup-image" href="{{ asset('img/12.jpeg') }}"><img
                                                            src="{{ asset('img/logo1.png') }}" class="w-100" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12">
                            <div class="single-product-sidebar">
                                <div class="product-content">
                                    <div class="single-product-title">
                                        <h2>Elegant wooden leg design Replica</h2>
                                    </div>
                                    <div class="single-product-price">$<span>44.00</span>–<span>$250.00</span></div>
                                    <div class="single-product-desc mb-25">
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui
                                            facit eorum claritatem. Investigationes demonstraverunt lectores legere me
                                            lius
                                            quod ii legunt saepius. Claritas est etiam processus A Capitalize on low
                                            hanging
                                            fruit to identify a ballpark value added activity to beta test. Override the
                                            digital...ditional clickthroughs from DevOps. Nanotechnology immersion along
                                            the
                                            information highway will close the […]</p>
                                        <div class="product-list single-product-list">
                                            <ul>
                                                <li>– Light green crewneck sweatshirt.</li>
                                                <li>– Hand pockets.</li>
                                                <li>– Relaxed fit.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="quick-quantity mt-60">
                                        <form action="#" method="POST">
                                            <button type="submit" class="list-add-cart-btn red-hover-btn border-0"
                                                style="padding-left: 80px;padding-right: 80px;transition: all .5s;">Pesan Sekarang!
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-webLayout>