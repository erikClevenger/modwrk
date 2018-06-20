<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Animsition | Page 3";
/*inject the entire head tag via php */
require_once(dirname(__DIR__) . "/php/head-utils.php");
?>

<body>
	<?php require_once(dirname(__DIR__) . "/php/navbar.php"); ?>
	<div id="paraBG" class="bg-light">
		<div id="paraImg" class="animated fadeInUp"></div>
	</div>
	<div class="animsition" data-animsition-in-class="fade-in-down-sm" data-animsition-out-class="fade-out-left-sm">
		<section class="page " id="portfolio">
			<div class="container">
				<div id ="portfolioHeadline" class="row mt-5 justify-content-center">
					<h2 class="col-12 text-center">Portfolio</h2>
					<p class="mb-4"> A small smattering of past work.</p>
				</div>
			</div>
			<div id="verticalScroll" class="container">
				<a href="#" data-trigger="ks-gallery" id="killerspin" class="portfolioItem row"><img
						class="featureImg" src="../imgs/ks/ks_FtrIMG.jpg" alt="Killerspin featured
				image">
				</a>
				<div class="hide">
					<img class="ks-gallery" data-fancybox="ks-gallery" src="../imgs/ks/sl_Achieve.jpg" alt="Killerspin
					achievements
					mock up">
					<img class="ks-gallery" data-fancybox="ks-gallery" src="../imgs/ks/sl_Challenge.jpg"
						  alt="Killerspin
					challenge flow
					mock up">
					<img class="ks-gallery" data-fancybox="ks-gallery" src="../imgs/ks/sl_Friends.jpg"
						  alt="Killerspin friends view">
					<img class="ks-gallery" data-fancybox="ks-gallery" src="../imgs/ks/sl_Home.jpg" alt="Killerspin
					friends view">
					<img class="ks-gallery" data-fancybox="ks-gallery" src="../imgs/ks/sl_Paddles.jpg" alt="Killerspin
					equipment picker">
					<img class="ks-gallery" data-fancybox="ks-gallery" src="../imgs/ks/sl_Settings.jpg" alt="Killerspin
					settings pane">
					<img class="ks-gallery" data-fancybox="ks-gallery" src="../imgs/ks/sl_Tables.jpg" alt="Killerspin tables
					picker">
					<img class="ks-gallery" data-fancybox="ks-gallery" src="../imgs/ks/sl_View.jpg" alt="Killerspin view
					profile flow">
				</div>
				<a href="#" data-trigger="dm-gallery" id="demarcated" class="portfolioItem row"><img class="featureImg" src="../imgs/dm/book_out_tsp.png"></a>
				<div class="hide">
					<img class="col-10" data-fancybox="dm-gallery" src="../imgs/dm/book-1.jpg" alt="book page">
					<img class="col-10" data-fancybox="dm-gallery" src="../imgs/dm/book-2.jpg" alt="book page">
					<img class="col-10" data-fancybox="dm-gallery" src="../imgs/dm/book-3.jpg" alt="book page">
					<img class="col-10" data-fancybox="dm-gallery" src="../imgs/dm/book-4.jpg" alt="book page">
					<img class="col-10" data-fancybox="dm-gallery" src="../imgs/dm/book-8.jpg" alt="book page">
					<img class="col-10" data-fancybox="dm-gallery" src="../imgs/dm/book-9.jpg" alt="book page">
					<img class="col-10" data-fancybox="dm-gallery" src="../imgs/dm/book-10.jpg" alt="book page">
					<img class="col-10" data-fancybox="dm-gallery" src="../imgs/dm/book-11.jpg" alt="book page">
					<img class="col-10" data-fancybox="dm-gallery" src="../imgs/dm/cover_rect.jpg" alt="book page">
				</div>
				<a href="#" data-trigger="mp-gallery" id="mypingo" class="portfolioItem row"><img
						class="featureImg" src="../imgs/mp/featured-image.jpg"></a>
				<div class="hide">
					<img class="mp-gallery" data-fancybox="mp-gallery" src="../imgs/mp/mp_BuyDevice.gif" alt="myPingo
					purchase
					flow">
					<img class="mp-gallery" data-fancybox="mp-gallery" src="../imgs/mp/mp_Context.gif" alt="myPingo tool
					menu
					 interaction flow">
					<img class="mp-gallery" data-fancybox="mp-gallery" src="../imgs/mp/mp_LikeDevice.gif" alt="myPingo image
					like interaction flow">
				</div>
			</div>

		</section>
	</div>
</body>
