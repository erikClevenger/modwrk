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
			<div id="verticalScroll" class="row justify-content-center">
				<div id="killerspin" class="col-10 portfolioItem data-fancybox ">

				</div>
				<div id="demarcated" class="col-10 portfolioItem"></div>
				<div id="mypingo" class="col-10 portfolioItem"></div>
			</div>
		</div>
	</section>
	</div>
</body>
