<x-webLayout>
    <section id="page-title">
        <div class="container clearfix">
            <h1>{{ $product->name_product }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Gift Bouquet</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name_product }}</li>
            </ol>
        </div>
    </section>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="single-product">
                    <div class="product">
                        <div class="row gutter-40">
                            <div class="col-md-5">
                                <div class="product-image">
                                    <div id="oc-images" class="owl-carousel carousel-widget" data-lightbox="gallery" data-margin="0" data-items="1" data-pagi="false" data-nav="false" data-loop="true">
                                        <div class="oc-item">
                                            <img src="{{ asset('asset/gambar/'.$product->image_product) }}" alt="Pink Printed Dress">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 product-desc">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="product-price">Rp. {{ $product->price_product }}</ins></div>
                                </div>
                                <div class="line"></div>
                                <form class="cart mb-0 d-flex justify-content-between align-items-center" method="post" enctype='multipart/form-data'>
                                    
                                    <button type="submit"  class="add-to-cart button m-0">Add to cart</button>
                                </form>
                                <div class="line"></div>
                                <p>{!! $product->description_product !!}</p>
                            </div>
                            <div class="w-100"></div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
            </div>
        </div>
    </section>

</x-webLayout>