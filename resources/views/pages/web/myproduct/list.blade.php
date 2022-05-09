
    <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">
        @foreach ($collection as $item)
        <div class="product col-md-4 col-sm-6 sf-{{ $item->id_product_category }}">
            <div class="grid-inner">
                <div class="product-image">
                    <a href="{{ route('product.show',$item->id) }}"><img src="{{ asset('asset/gambar/'.$item->image_product) }}" height="350px" ></a>
                    <a href="{{ route('product.show',$item->id) }}"><img src="{{ asset('asset/gambar/'.$item->image_product) }}" height="350px"></a>
                </div>
                <div class="product-desc">
                    <div class="product-title"><h3><a href="{{ route('product.show',$item->id) }}">{{ $item->name_product }}</a></h3></div>
                    <div class="product-price">Rp. {{ $item->price_product }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
{{ $collection->links('theme.web.pagination') }}