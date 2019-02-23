<!DOCTYPE HTML>
<html>
	<head>
	@include('index_partials.head')
	</head>
	<body>
		
	<div class="fh5co-loader"></div>	
	<div id="page">
    @include('index_partials.nav')
    
    @yield('content')
    
    </div>
    
    <div class="container-wrap">
       @include('index_partials.footer')
	</div><!-- END container-wrap -->
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
        @include('index_partials.index_scripts')

	</body>
</html>

