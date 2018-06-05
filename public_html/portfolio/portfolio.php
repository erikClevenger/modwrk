<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Animsition | Page 3";
/*inject the entire head tag via php */
require_once(dirname(__DIR__) . "/php/head-utils.php");
?>

<body>
	<div id="paraBG" class="">
		<div id="paraImg" class="animated fadeInUp"></div>
	</div>
	<?php require_once(dirname(__DIR__) . "/php/navbar.php"); ?>
	<div class="animsition" data-animsition-in-class="fade-in-down-sm" data-animsition-out-class="fade-out-left-sm">
		<div id="paraBG" class="">
			<div id="paraImg" class="animated fadeInUp"></div>
		</div>
		<section class="page " id="portfolio">
		<div class="container">
			<div id ="portfolioHeadline" class="row mt-5 justify-content-center">
				<h2 class="col-12 text-center">Portfolio</h2>
				<p class="mb-4"> A small smattering of past work.</p>
			</div>
			<div id="verticalScroll" class="row justify-content-center">
				<div class="text-light col-5 text-center mb-5">
					<a data-toggle="modal" data-target="#ksModal"><img class="card-img-portfolioImg" src="https://picsum.photos/200?random"
																						alt="placeholder images from Picsum"/></a>
					<h4 id="portfolio-1" class=" portfolio-item portfolio mt-5">Portfolio Item 1</h4>
				</div>
				<div class="text-light col-5 text-center mb-5">
					<img class="card-img portfolioImg" src="https://picsum.photos/200?random" alt="placeholder
								images
								from
								Picsum">
					<div class="card-img-overlay">
						<h4 id="portfolio-2" class=" portfolio-item portfolio">Portfolio Item 2</h4>
					</div>
				</div>
				<div class="text-light col-5 text-center mb-5">
					<img class="card-img portfolioImg" src="https://picsum.photos/200?random" alt="placeholder
								images from
								Picsum">
					<div class="card-img-overlay">
						<h4 id="portfolio-1" class=" portfolio-item portfolio">Portfolio Item 1</h4>
					</div>
				</div>
				<div class="text-light col-5 text-center mb-5">
					<img class="card-img portfolioImg" src="https://picsum.photos/200?random" alt="placeholder
								images
								from
								Picsum">
					<div class="card-img-overlay">
						<h4 id="portfolio-2" class=" portfolio-item portfolio">Portfolio Item 2</h4>
					</div>
				</div>
				<div class="modal fade align-self-center" id="ksModal" tabindex="-1" role="dialog"
					  aria-labelledby="Killerspin"
					  aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	</div>
</body>
