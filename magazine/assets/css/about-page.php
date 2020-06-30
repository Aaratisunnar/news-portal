<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 
	<title></title>
	
	<!---Facebook meta tags--->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	
	<!---Twitter card---->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@nytimes">
	<meta name="twitter:creator" content="@SarahMaslinNir">
	<meta name="twitter:title" content="Parade of Fans for Houston’s Funeral">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
	<!---Font Awesome--->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	<!---stylesheet---->
	<link rel="stylesheet" href="assets/css/reset.css">

	<!---stylesheet---->
	<link rel="stylesheet" href="assets/css/style.css">
	
	<!---Responsive---->
	<link rel="stylesheet" href="assets/css/responsive.css">
	
	<!---Google Fonts--->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

  </head>
  <body>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
	<?php include('header.php');?>
		<div class="container">
			<div class="bg_cover margin-top" style="background:url(assets/images/inner-bg.jpg);    background-position: center center;
			background-size: cover;
			background-repeat: no-repeat;
			width: 100%;
			height: 100%;">
				<div class="back-h">
					<h2>About Us</h2>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">About</li>
					  </ol>
					</nav>
				</div>
			</div>
			
			<article class="module1 margin-top">
				<header>
					<h3><a href="#">About</a></h3>
				</header>
				<section class="">
					<div class="about-detail clearfix">
						<figure>
							<img src="assets/images/banner.jpg" alt="">
						</figure>
						<h3>Welcome to Health and Hygiene</h3>
						<p class="padding-top">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris. 
						auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris</p>
					</div>
				</section>
			</article>
			<div class="row margin-top">
				<div class="col-md-4">
					<div class="obj-wrap">
						<h3><a href="#">Why Choose Us</a></h3>
						<p class="padding-top">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem quibibendum auci</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="obj-wrap">
						<h3><a href="#">Our Mission</a></h3>
						<p class="padding-top">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem quibibendum auci</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="obj-wrap">
						<h3><a href="#">Our Vision</a></h3>
						<p class="padding-top">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem quibibendum auci</p>
					</div>
				</div>
			</div>
		</div>
		
		
	<?php include('footer.php');?>
	<!--footer top sec end---->
	<a href="#" id="back-to-top" title="Back to top">&uarr;</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-1.11.2.min.js" ></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js" ></script>
	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
	
	<!---back to top---->
	<script>
		if ($('#back-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('#back-to-top').addClass('show');
				} else {
					$('#back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('#back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
	</script>
	
	<script>
		$('#carouselExample').on('slide.bs.carousel', function (e) {

		  
			var $e = $(e.relatedTarget);
			var idx = $e.index();
			var itemsPerSlide = 4;
			var totalItems = $('.carousel-item').length;
			
			if (idx >= totalItems-(itemsPerSlide-1)) {
				var it = itemsPerSlide - (totalItems - idx);
				for (var i=0; i<it; i++) {
					// append slides to end
					if (e.direction=="left") {
						$('.carousel-item').eq(i).appendTo('.carousel-inner');
					}
					else {
						$('.carousel-item').eq(0).appendTo('.carousel-inner');
					}
				}
			}
		});


		  $('#carouselExample').carousel({ 
						interval: 2000
				});


		  $(document).ready(function() {
		/* show lightbox when clicking a thumbnail */
			$('a.thumb').click(function(event){
			  event.preventDefault();
			  var content = $('.modal-body');
			  content.empty();
				var title = $(this).attr("title");
				$('.modal-title').html(title);        
				content.html($(this).html());
				$(".modal-profile").modal({show:true});
			});

		  });

	</script>
  </body>
</html>