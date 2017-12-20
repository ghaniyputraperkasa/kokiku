
<!DOCTYPE html>
<html lang="en">
<head>
    @include('koki.includes.headSection')
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			@include('koki.includes.headerTop')
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			@include('koki.includes.headerMiddle')
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			@include('koki.includes.headerBottom')
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="slider"><!--slider-->
		@include('koki.includes.slider')
	</section><!--/slider-->

	@yield('content')

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			@include('koki.includes.footerTop')
		</div>

		<div class="footer-widget">
			@include('koki.includes.footerWidget')
		</div>

		<div class="footer-bottom">
			@include('koki.includes.footerBottom')
		</div>

	</footer><!--/Footer-->

  <script src="{{asset('koki/js/jquery.js')}}"></script>
	<script src="{{asset('koki/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('koki/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('koki/js/price-range.js')}}"></script>
  <script src="{{asset('koki/js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('koki/js/main.js')}}"></script>
  @yield('scripts')
</body>
</html>
