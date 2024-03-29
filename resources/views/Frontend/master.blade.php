<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>India News Asia </title>
<link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{url('public/css/style.css')}}" rel="stylesheet" />
<script src="{{url('public/js/jquery.min.js')}}"></script>
<script src="{{url('public/js/bootstrap.min.js')}}"></script>
</head>

<body>
<div class="col-md-12 top" id="top">
	<div class="col-md-9 top-left">
    	<div class="col-md-3">
    		<span class="day">{{date('M d,Y')}}</span> 
        </div>
        <div class="col-md-9">
        	<span class="latest">Latest: </span> <a href="#">Wireless Headphones are now on Market</a>
        </div>
    </div>
    <div class="col-md-3">
    	<a href="#"><img src="{{url('public/images/icon-fb.png')}}" /></a>
    	<a href="#"><img src="{{url('public/images/icon-twitter.png')}}" /></a>
    	<a href="#"><img src="{{url('public/images/icon-google.png')}}" /></a>
    	<a href="#"><img src="{{url('public/images/icon-insta.png')}}" /></a>
    	<a href="#"><img src="{{url('public/images/icon-pin.png')}}" /></a>
    	<a href="#"><img src="{{url('public/images/icon-youtube.png')}}" /></a>
    </div>
</div>

<div class="col-md-12 brand">
	<div class="col-md-4 name">
    	<font color="#555555">INDIA</font><font color="#2ca0c9"> NEWS </font><font color="#555555">ASIA</font>
    </div>
    <div class="col-md-8">
    	<img src="{{url('public/images/final-news-site_06.gif')}}" width="100%" />
    </div>
</div>

<div class="col-md-12 main-menu">
	<div class="col-md-10 menu">
		<nav class="navbar">
			<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar"> 
					<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
        		</button>
        		<span class="navbar-brand"><font color="#555555">COLOR</font><font color="#2ca0c9">MAG</font></span>
    		</div>
    		<div class="collapse navbar-collapse" id="mynavbar">
    			<ul class="nav nav-justified">
    				<li><a href="{{url('/')}}" class="active">
					<span class="glyphicon glyphicon-home"></span></a></li>
    				@foreach($categories as $cat)
					<li><a href="{{url('category')}}/{{$cat->slug}}" class="text-uppercase">{{$cat->category_name}}</a></li>
    				@endforeach
        		</ul> 
			</div>
		</nav>
	</div>
	<div class="col-md-2 search">
    	<input type="search" class="form-control" /><span class="glyphicon glyphicon-search btn"></span>
    </div>
</div>
<!-- HEADER-->
@yield('content')


<!--FOOTER -->


<div class="col-md-12 bottom">
    	<div class="col-md-4">
        	<h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">About Us</span></h3>
            <img src="{{url('public/images/book.png')}}" align="left" /><span class="name"><font color="#e03521">INDIA</font><font color="#fff">NEWS</font> <font color="#e03521">ASIA</font></span>
            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4">
        	<div class="col-md-12">
            	<h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Quick Links</span></h3>
            </div>    
            <div class="col-md-6">
            	<div class="row">
              	<ul class="nav">
    				<li><a href="#">POLITICS</a></li>
    				<li><a href="#">BUSINESS</a></li>
    				<li><a href="#">ENTERTAINMENT</a></li>
    				<li><a href="#">TECHNOLOGY</a></li>
        		</ul> 
                </div>
            </div>
            <div class="col-md-6">
            	<div class="row">
              	<ul class="nav">
    				<li><a href="#">SPORTS</a></li>
    				<li><a href="#">TRAVEL</a></li>
    				<li><a href="#">STYLE</a></li>
    				<li><a href="#">HEALTH</a></li>
        		</ul> 
                </div>
            </div>    
        </div>
        <div class="col-md-4">
        	<h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Contact Us</span></h3>
            <span class="name"><font color="#e03521">INDIA</font><font color="#fff">NEWS</font> <font color="#e03521">ASIA</font></span><br />
            Follow us at:<br /><br />
            <a href="#"><img src="{{url('public/images/icon-fb.png')}}" /></a>
    		<a href="#"><img src="{{url('public/images/icon-twitter.png')}}" /></a>
    		<a href="#"><img src="{{url('public/images/icon-google.png')}}" /></a>
    		<a href="#"><img src="{{url('public/images/icon-insta.png')}}" /></a>
    		<a href="#"><img src="{{url('public/images/icon-pin.png')}}" /></a>
    		<a href="#"><img src="{{url('public/images/icon-youtube.png')}}"></a>
            <br>
			<a href="#top" class="to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
</div>

<div class="col-md-12 text-center copyright">
	Copyright &copy; {{date('Y')}} <a href="#">INA</a> Powered by: <a href="#">RPR</a>
</div>
	


<script>            
	$(document).ready(function() {
		var duration = 500;
	$(window).scroll(function() {
			if ($(this).scrollTop() > 500) {
				$('.to-top').fadeIn(duration);
			} else {
				$('.to-top').fadeOut(duration);
			}
		});

		$('.to-top').click(function(event) {
			event.preventDefault();
			$('html').animate({scrollTop: 0}, duration);
			return false;
		})
	});
</script>	
</body>
</html>