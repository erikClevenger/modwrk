<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./css/styles.css">
		<!-- Bootstrap, Jquery, Popper -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<!-- Fullpage.js
		<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
		<script src="vendors/jquery.easings.min.js"></script>
		<script type="text/javascript" src="vendors/scrolloverflow.min.js"></script>
		<script type="text/javascript" src="jquery.fullPage.js"></script>
		-->


		<title>Mod~Wrk</title>
	</head>
	<body>
		<div class="container">
			<div class="collapse" id="navToggle">
				<div class="d-flex flex-row mb-3 justify-content-center" aria-label="navigation">
					<a href="#slideContact" role="button" class="btn btn-outline-secondary" >Contact</a>
					<a href="#slideHome" role="button" class="btn btn-outline-secondary" >Home</a>
					<a href="#slidePortfolio" role="button" class="btn btn-outline-secondary">Portfolio</a>
				</div>
			</div>
			<nav class="navbar navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navToggle"
						  aria-controls="navToggle" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</nav>
		</div>
		<div id="mainContent" class="">
			<div id="scrollable" class="">
				<section class="slide" id="slideContact">
					<div class="container">
						<div class="row mt-5 justify-content-center">
							<h2 class="col-12 align-self-center text-center">Contact</h2>
							<p class="col-12 col-lg-6 offset-lg-1 mb-4">Interested in working with me?<br>Found a bug?<br>Don't like my
								face?<br><strong>Let me know.</strong></p>
							<form class="col-12 justify-content-center" id="contactForm">
								<div class="form-group col-lg-6 offset-lg-3">
									<input type="text" class="form-control" id="nameInput" placeholder="Name">
								</div>
								<div class="form-group col-lg-6 offset-lg-3">
									<input type="email" class="form-control" id="emailInput" placeholder="Email">
								</div>
								<div class="form-group col-lg-6 offset-lg-3">
									<textarea class="form-control" id="messageTextArea" rows="6"
												 placeholder="Message"></textarea>
								</div>
							</form>
							<button class="btn btn-outline-secondary col-6 col-lg-3 mt-4">Submit</button>
						</div>
					</div>
				</section>
				<section class="slide" id="slideHome"></section>
				<section class="slide" id="slidePortfolio">
					<div class="container">
						<div class="row mt-5 justify-content-center">
							<h2 class="col-12 text-center">Portfolio</h2>
							<p class="mb-4"> A small smattering of past work.</p>
							<div id="verticalScroll" class="col-10 offset-lg-3 card-columns">
								<div class="card bg-dark text-light">
									<img class="card-img" src="https://picsum.photos/200?random" alt="placeholder images from
									Picsum">
									<div class="card-img-overlay">
										<h4 id="portfolio-1" class=" portfolio-item portfolio">Portfolio Item 1</h4>
									</div>
								</div>
								<div class="card bg-dark text-light">
									<img class="card-img" src="https://picsum.photos/200?random" alt="placeholder images from Picsum">
									<div class="card-img-overlay">
										<h4 id="portfolio-2" class=" portfolio-item portfolio">Portfolio Item 2</h4>
									</div>
								</div>
								<div class="card bg-dark text-light">
									<img class="card-img" src="https://picsum.photos/200?random" alt="placeholder images from Picsum">
									<div class="card-img-overlay">
										<h4 id="portfolio-3" class=" portfolio-item portfolio">Portfolio Item 3</h4>
									</div>
								</div>
								<div class="card bg-dark text-light">
									<img class="card-img" src="https://picsum.photos/200?random" alt="placeholder images from Picsum">
									<div class="card-img-overlay">
										<h4 id="portfolio-4" class=" portfolio-item portfolio">Portfolio Item 4</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
</body>
</html>