<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('theme.admin.head')
<body id="kt_body" class="page-loading-enabled page-loading header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	
	<div class="page-loader flex-column">
		<img alt="Logo" style="width:5%;" class="max-h-25px" src="{{ asset('img/admin/logo.png') }}" />
		<div class="d-flex align-items-center mt-5">
			<span class="spinner-border text-primary" role="status"></span>
			<span class="text-muted fs-6 fw-bold ms-5">Tunggu Sebentar...</span>
		</div>
	</div>

	<div class="d-flex flex-column flex-root">

		<div class="page d-flex flex-row flex-column-fluid">

			@include('theme.admin.side')
			@if (request()->is('home'))
        	@endif
			
			<div id="kt_header" style="" class="header align-items-stretch">
				<div class="container-fluid d-flex align-items-stretch justify-content-between">
					<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
						<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
									<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
								</svg>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
				<div class="post d-flex flex-column-fluid" id="kt_post">
					<div id="kt_content_container" class="container-xxl">
			
					
					{{ $slot }}

					</div>
				</div>
			</div>
			
			@include('theme.admin.footer')
				
			

		</div>

	</div>
	@include('theme.admin.js')
	@yield('custom_js')
</body>
</html>