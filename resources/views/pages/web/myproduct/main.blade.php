<x-webLayout>
    <div id="content_list">
        <section id="content">
            @php
                $categories = \App\Models\ProductCategory::get();
                $category = \App\Models\ProductCategory::count();
            @endphp
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row gutter-40 col-mb-80">
                        <div class="postcontent col-lg-9 order-lg-last">
                            <div id="list_result"></div>
                        </div>
                        <div class="sidebar col-lg-3">
                            <div class="sidebar-widgets-wrap">
                                <div class="widget widget-filter-links">
                                    <h4>Pilih Kategori</h4>
                                    <ul class="custom-filter ps-2" >
                                        <li class="widget-filter-reset active-filter"><a href="javascript:;" onchange="load_list();" data-filter="*">Clear</a></li>
                                        <form id="content_filter">
                                            <select class="form-control" onchange="load_list();" name="category">
                                                <option value="all" selected>Pilih Kategori</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name_product_category }}</option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </ul>
                                </div>
                                {{-- <div class="widget widget-filter-links">
                                    <h4>Sort By</h4>
                                    <ul class="shop-sorting ps-2">
                                        <li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Clear</a></li>
                                        <li><a href="#" data-sort-by="name">Name</a></li>
                                        <li><a href="#" data-sort-by="price_lh">Price: Low to High</a></li>
                                        <li><a href="#" data-sort-by="price_hl">Price: High to Low</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    @section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection
</x-webLayout>