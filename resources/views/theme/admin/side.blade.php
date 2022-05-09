<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
            <img alt="Logo" src="{{ asset('img/admin/logo.png') }}" class="h-40px logo" />
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">

        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item menu-accordion">
                        <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
                            <div class="symbol symbol-50px">
                                <img src="{{ asset('img/admin/blank.png') }}" />
                            </div>
                            <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                                <div class="d-flex">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-white text-hover-primary fs-6 fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">{{Auth::user()->name}}</a>
                                        <span class="text-gray-600 fw-bold d-block fs-8 mb-1">{{Str::title(Auth::user()->role)}}</span>
                                        <div class="d-flex align-items-center text-success fs-9">
                                        <span class="bullet bullet-dot bg-success me-1"></span>online</div>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo" src="{{ asset('img/admin/blank.png') }}" />
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">{{Auth::user()->name}}
                                                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">{{Str::title(Auth::user()->role)}}</span></div>
                                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{Auth::user()->email}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="separator my-2"></div>
                                            <div class="menu-item px-5">
                                                <a href="{{ route('home') }}" class="menu-link px-5">Home</a>
                                            </div>
                                            <div class="menu-item px-5">
                                                <a href="{{ route('admin.auth.logout') }}" class="menu-link px-5">Keluar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('admin.productcategory.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Product Category</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('admin.product.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Product</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('admin.critics.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Kritik dan Saran</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('admin.webprofile.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Profil Halaman</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">