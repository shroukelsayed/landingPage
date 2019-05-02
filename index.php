<!DOCTYPE html>																																			
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="author" content="Fragrance">
	<!-- <meta name="keywords" content="responsive html template, portfolio, creative, flat, green, light, modern, gallery"> -->
	<meta name="description" content="Mustafa Hosny Official Website">
	<title>Mustafa Hosny Official Website</title>

	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/headerWithSlider.css" type="text/css" media="screen" />
	<!-- <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" /> -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen" />
    <link href="css/least.min.css" rel="stylesheet">
    <link href="css/jquery.easy-pie-chart.css" rel="stylesheet">   
	
	<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
	 <style>
		  html, body{ margin: 0; padding: 0; height: 100%; }
	</style>
	
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jQuery.appear.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/easypiechart.js"></script>
	<script type="text/javascript" src="js/canvas.js"></script>
	<script type="text/javascript" src="js/niceScroll.js"></script>
	
	<script src="js/jquery.lazyload.js"></script>
    <script src="js/least.min.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script type="text/javascript" src="js/map.js"></script>

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
	<style>
		/*body {margin:0;height:2000px;}*/
		#left-arrow, #right-arrow{
			background-color: rgba(0,0,0,.2); !important;
padding: 3px 10px;
background-position: center !important;
z-index: 5;
		}

.linkslider{
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 1
}
		.icon-bar {
		  position: fixed;
		  top: 50%;
		  -webkit-transform: translateY(-50%);
		  -ms-transform: translateY(-50%);
		  transform: translateY(-50%);
		  z-index: 10;
			background-color: rgba(255,255,255,.3); !important;
			border-radius: 0 20px 20px 0;
			box-shadow: 0 0 2px rgba(0,0,0,.4); !important;
		}

		.icon-bar a {
		  display: block;
		  text-align: center;
		  padding: 16px;
		  transition: all 0.3s ease;
		  color: white;
		  font-size: 20px;
		}

		.icon-bar a:hover {
		  background-color: #000;
		}

		.icon {
		  background: transparent;
		  color: white;
		}

		.content {
		  /*margin-left: 75px;*/
		  font-size: 30px;
		}

		.fa{
			color: #000;
		}
	</style>
</head>
<body class="home">
	<div id="container">
		<div id="wrapper">
			<header id="main_header">
				<div class="icon-bar">
					<a href="https://www.facebook.com/MustafaHosny" class="icon" target="_blank"><img src="images/social_icons/facebook.png" alt="img" height="35" width="35"/></a> 
					<a href="https://twitter.com/mustafahosny" class="icon" target="_blank"><img src="images/social_icons/twitter.png" alt="img" height="35" width="35" /></a> 
					<a href="https://www.instagram.com/mustafahosnyofficial/" class="icon" target="_blank"><img src="images/social_icons/instgram.png" alt="img" height="35" width="35" /></a> 
					<a href="https://soundcloud.com/mustafahosny" class="icon" target="_blank"><img src="images/social_icons/soundcloud.png" height="35" width="35"></a>
					<a href="https://www.youtube.com/user/MustafaHosnyOfficial"class="icon" target="_blank"><img src="images/social_icons/youtube.png" alt="img" height="35" width="35"/></a> 
				</div>
				<!--MENU-->
				<div id="menu" class="clearfix">
					<a href="#" id="mobile_nav" class="closed">Navigation Menu</a>
					<nav id="main-menu">
						<ul id="menu-main_menu" class="nav">
							<li><a href="#main_header">يعرض حاليا</a></li>
							<li><a href="#newest_video">أجدد حلقات برنامج كنوز</a></li>
							<li><a href="#services">حسابات التواصل اﻻجتماعى</a></li>
							<li><a href="#main_header">عن مصطفى حسنى </a></li>
						</ul>	
					</nav>
				</div> <!-- end #menu -->
				<!--MENU-->
				
				<!--SLIDER-->
				<div id="header_featured" class="flexslider clearfix">
					<ul class="slides">
					
					<!--IMAGE SLIDE-->
					
						<li class="slide fr_slide_image">
							<a href="https://www.facebook.com/MustafaHosny" class="linkslider" target="_blank">							
						
							<div class="slide_wrap">
								<div class="featured_box">
										<img src="images/slider/1.png" alt='img' />
									
									<div class="fr_image_description">
										<!-- <div class="fr_inner_description"> -->
											<!-- <h2 class="title"><a href="#">أهلا بكم في</a></h2>
											<h2 class="title"><a href="#">الموقع الرسمي </a></h2>
											<h2 class="title"><a href="#">للداعية مصطفى حسني </a></h2> -->
											<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.</p> -->
										<!-- </div> end .fr_inner_description -->
									</div>
								</div> <!-- end .featured_box -->
							</div> <!-- end .slide_wrap -->
						</a>
							
						</li>
						<li class="slide fr_slide_image">
							<div class="slide_wrap">
								<div class="featured_box">
									<a href="#">							
										<img src="images/slider/2.png" alt='img' />
									</a>
								</div> 
							</div> <!-- end .slide_wrap -->
						</li>
						<li class="slide fr_slide_image">
							<div class="slide_wrap">
								<div class="featured_box">
									<a href="#">							
										<img src="images/slider/3.png" alt='img' />
									</a>
								</div> 
							</div> <!-- end .slide_wrap -->
						</li>
						<li class="slide fr_slide_image">
							<div class="slide_wrap">
								<div class="featured_box">
									<a href="#">							
										<img src="images/slider/4.png" alt='img' />
									</a>
								</div> <!-- end .featured_box -->
							</div> <!-- end .slide_wrap -->
						</li>						
						
					</ul>

					<a id="left-arrow" class="flex-prev" href="#">Previous</a>
					<a id="right-arrow" href="#">Next</a>
				</div>	<!-- end #header_featured -->
				<!--SLIDER-->
			
			</header> <!-- end #main-header -->
			<div id="content">
				
				<!--SERVICES SECTION-->
				<div id="services">
					<div class="sizers clearfix">
						<div class="section_description">
							<h3 class="section_name">حسابات التواصل اﻻجتماعى</h3>
						</div>
						<div class="team_person">
							<a href="https://soundcloud.com/mustafahosny" target="_blank">
								<img src="images/social_icons/soundcloud.png" alt="img" />
							</a>
							<h6 class="team_name">حســاب ساوندكلود</h6>
						</div>
						<div class="team_person">
							<a href="https://www.youtube.com/user/MustafaHosnyOfficial" target="_blank">
								<img src="images/social_icons/youtube.png" alt="img" />
							</a>
							<h6 class="team_name">قنــــــاة اليوتيوب</h6>
						</div>
						<div class="team_person">
							<a href="https://www.instagram.com/mustafahosnyofficial/" target="_blank">
								<img src="images/social_icons/instgram.png" alt="img" />
							</a>
							<h6 class="team_name">حســاب انستجرام</h6>
						</div>
						<div class="team_person">
							<a href="https://twitter.com/mustafahosny" target="_blank">
								<img src="images/social_icons/twitter.png" alt="img" />
							</a>
							<h6 class="team_name">حســــاب تويتــــر</h6>
						</div>
						<div class="team_person">
							<a href="https://www.facebook.com/MustafaHosny" target="_blank">
								<img src="images/social_icons/facebook.png" alt="img" />
							</a>
							<h6 class="team_name">صفحــة الفيسبوك</h6>
						</div>
					</div> <!-- end of .sizers -->
				</div>
				
				<!--SERVICES SECTION-->
				
				<?php
					$API_key = 'AIzaSyCSqCVTGu-LAQ5au48FakISW3c-GJ-tjrk';
					$channelID  = 'UCwttCEi9Fq1DgTd5Anil6rQ';
					$playlistId = 'PLiJggHtOlnN2VRTPbKjXycqLwvp0cPyU7';
					$maxResults = 50;
					$video_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId='.$playlistId.'&maxResults='.$maxResults.'&key='.$API_key.''));
					$video = end($video_list->items)->snippet->resourceId->videoId;
						?>
						<article class="entry post clearfix ">
							<div class="post-content clearfix" id="newest_video">
								<div class="video_box ">
									<iframe src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</div> <!-- end .thumb -->
								</div>
						</article> <!-- end article -->
				
				<div class="fixed_block quote" style="height: 760px;">

			<!-- <blockquote>Design is not just what it looks like and feels like. Design is how it works.</blockquote> -->
			<!-- <p class="author">Steve Jobs</p> -->
		</div>
				
				<!--FOOTER-->
				<div id="footer">
					<div id="footer-widgets" class="">
						<!-- <div class=" clearfix"> -->
							<section class="social" style="margin-left: 350px">
								<!-- <h4>Follow us</h4> -->
								<div id="social-icons">
									<a href="https://www.facebook.com/MustafaHosny" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
									<a href="https://twitter.com/mustafahosny" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
									<a href="https://www.instagram.com/mustafahosnyofficial/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
									<a href="https://soundcloud.com/mustafahosny" target="_blank"><img src="images/media.ico" height="75" width="75"></a>
									<a href="https://www.youtube.com/user/MustafaHosnyOfficial" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
								</div> <!-- end #social-icons -->
							</section>
						<!-- </div> -->
					</div>
					<p id="copyright"> 2019 &#169; جميع الحقوق محفوظة  .Three60 Dgree تصمصم وتطوير شركة </span></p>
				</div> <!-- end #footer -->
				<!--FOOTER-->
			
			</div> <!-- end #content -->
	</div> <!-- end #wrapper -->
</div> <!-- end #container -->

<!--CUSTOM JS-->
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/headerWithSlider.js"></script>
<script>
	$(document).ready(function(){
		$('#gallery').least({
			random: 0,
		});
	});
	
	$(function() {
    $('.chart').easyPieChart({
		barColor: 'rgba(255,255,255,0.8)',
		trackColor: 'rgba(0,0,0,0.5)',
        scaleColor: false,
		lineWidth: 5,
		size: 80
    });
});
    </script>
</body>
</html>