<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('theme.auth.head')
<body class="nk-body body-wider bg-light-alt">
	<div id="loader-wrapper">
        <div id="loader"></div>
    </div>
	<!-- Document Wrapper ============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- Header ============================================= -->
        <!-- #header end -->
        @if (request()->is('home'))
        @endif
		<!-- Content ============================================= -->
		{{ $slot }}
        <!-- #content end -->
		<!-- Footer ============================================= -->
        <!-- #footer end -->
	</div>
	<div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" id="contentReviewModal">
				
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
    <!-- #wrapper end -->
	<!-- Go To Top ============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	<!-- JavaScripts ============================================= -->
	@include('theme.auth.js')
	@yield('custom_js')
</body>
</html>