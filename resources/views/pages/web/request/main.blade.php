<x-webLayout title="Reques Bouquet">
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Request Bouquet</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Bouquet Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Register Area Start Here -->
    <div class="login-register-area mt-no-text">
        <div class="container container-default-1 custom-area">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-15 offset-md-5 col-custom">
                    <div class="login-register-wrapper">
                        <div class="section-content text-center mb-">
                            <h2 class="title-8 mb-2">Request Bouquet</h2>
                            <p class="desc-content">Harap perhatikan pesanan yang anda masukkan</p>
                        </div>
                        <div class="col-lg- col-15 mt-5 col-custom">
                            <form action="#">
                                <div class="checkbox-form">
                                    <div class="row">
                                            <div class="col-md-12 col-custom">
                                                <div class="checkout-form-list">
                                                    <label>Nama Lengkap :</label>
                                                    <input placeholder="" type="text">
                                                </div>
                                            </div>
                                        <div class="col-md-6 col-custom">
                                            <div class="checkout-form-list">
                                                <label>E-mail : <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-custom">
                                            <div class="checkout-form-list">
                                                <label>No telepon <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="country-select clearfix">
                                            <label>Kategori Produk : <span class="required">*</span></label>
                                            <select class="myniceselect nice-select wide rounded-0">
                                                <option data-display="Flower Bouquet">Flower Bouquet</option>
                                                <option value="uk">Snack Bouquet</option>
                                                <option value="rou">Money Bouquet</option>
                                                <option value="fr">Doll Bouquet</option>
                                                <option value="de">Cake & Gift</option>
                                            </select>
                                        </div>
                                        <div class="order-notes mt-3">
                                            <div class="checkout-form-list checkout-form-list-2">
                                                <label>Detail Order :</label>
                                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="Masukkan rincian orderan anda"></textarea>
                                            </div>
                                        </div>
                                        <div class="order-notes mt-4">
                                            <div class="checkout-form-list checkout-form-list-2">
                                                <label>Notes :</label>
                                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="catatan untuk pesanan anda."></textarea>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <div class="order-notes mt-5">
                                            <button class="btn flosun-button secondary-btn black-color rounded-0 w-100">Detail Orderan</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-webLayout>