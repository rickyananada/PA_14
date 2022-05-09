<!DOCTYPE html>
<html lang="en">
@include('theme.web.head')
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		@include('theme.web.header')
        <!-- #header end -->
		

		<!-- Content
		============================================= -->
		{{ $slot }}
        <!-- #content end -->

		<!-- Footer
		============================================= -->
		@include('theme.web.footer')
        <!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	@include('theme.web.js')
	@yield('custom_js')

</html>