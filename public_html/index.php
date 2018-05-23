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


		<title>Mod~Wrk</title>
	</head>
	<body>
		<div class="container smallHide">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a class="nav-link" href="#slideContact">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#slideHome">Home</a>
				</li>
				<li>
					<svg id="modwrkLogo" data-name="modwrkLogo" xmlns="http://www.w3.org/2000/svg"
						  viewBox="0 0 160.72
					67"><defs><style>.cls-1{fill:#29323f;}</style></defs><title>mwLogo</title><path class="cls-1" d="M156.66,13.59a3.1,3.1,0,0,1,3.06,5.22l-49.84,46.7a5.6,5.6,0,0,1-6.26.93L55,42.87A17.66,17.66,0,0,0,42.08,42l-38,12A3.1,3.1,0,0,1,1,48.8L51.45,1.49A5.62,5.62,0,0,1,57.71.55l49.17,23.83a17.71,17.71,0,0,0,12.89.89Z"/></svg>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#slidePortfolio">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="resume-ErikClevenger.pdf">Resume</a>
				</li>
			</ul>
		</div>
		<div class="container bigHide fixed-bottom">
			<div class="collapse " id="btmNavToggle">
				<div class="d-flex flex-row mb-3 justify-content-around" aria-label="navigation">
					<a href="#slideContact" role="button" class="btn backWhite" >Contact</a>
					<a href="#slideHome" role="button" class="btn backWhite" >Home</a>
					<a href="#slidePortfolio" role="button" class="btn backWhite">Portfolio</a>
				</div>
			</div>
			<nav class="navbar navbar-light justify-content-center">
				<button class="navbar-toggler backWhite" type="button" data-toggle="collapse" data-target="#btmNavToggle"
						  aria-controls="btmNavToggle" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</nav>
		</div>
		<div id="mainContent" class="">
			<div id="dragend" class="">
				<section class="dragend-page" id="slideContact">
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
				<section class="dragend-page" id="slideHome">
					<div class="container">
						<div class="row justify-content-center homeSection">
							<div class="col-12 h-100">
								<svg id="modwrkbanner" data-name="modwrkBanner" xmlns="http://www.w3.org/2000/svg" viewBox="0
								 0 532.5 68.5"><defs><style>.cls-1{fill:#29323f;}</style></defs><title>modwrkBanner</title><path class="cls-1" d="M194,12c-6.49-6.9-16.28-8.67-25.27-8.67H142.66V28a29.08,29.08,0,0,0-8.43-17.41c-4.25-4.15-11.71-9-24.54-9s-20.3,4.86-24.55,9a29.32,29.32,0,0,0-8.51,18V3.31H55.78L39.89,48.22h-.4L23.61,3.31H2.75V65.19H17.51V24.35L17,19.13h.56L34.36,65.19H45L61.87,19.13h.56l-.56,5.22V65.19H76.63V40a29.32,29.32,0,0,0,8.51,18c4.25,4.15,11.71,9,24.55,9s20.29-4.86,24.54-9a29.08,29.08,0,0,0,8.43-17.41V65.19h24.71c7.7,0,19.09-.36,26.63-8.49C197.45,53,201.46,46,201.46,34,201.46,28.06,200.5,18.87,194,12ZM121.88,49.81c-3.85,4.15-8.42,4.77-12.19,4.77s-8.34-.62-12.2-4.77c-4.65-5-5.13-12-5.13-15.56s.48-10.52,5.13-15.56c3.86-4.15,8.43-4.77,12.2-4.77s8.34.62,12.19,4.77c4.65,5,5.14,12,5.14,15.56S126.53,44.77,121.88,49.81Zm58.73-1.24c-4.42,4.07-10.83,4.24-14.68,4.24h-8.51V15.69h9.39c4.09,0,9.87.17,14.12,4.24,2.32,2.21,5,6.72,5,14.23C185.9,41.32,183.41,46,180.61,48.57Z"/><path class="cls-1" d="M499.4,29.49,528.09,3.87H508.15L480.69,29.49V3.87H464.6V63.81a17.55,17.55,0,0,1-1.84-7.47l-.44-6.91c-.17-3.15-.17-6.29-3.06-9.27a12.92,12.92,0,0,0-7.17-3.67v-.35A17.49,17.49,0,0,0,460,31.86c3.06-3,4-6.74,4-10.85,0-3.32-.61-8-4.19-11.63C454.71,4.31,446,3.87,439.93,3.87H392.18L381.86,49.26,367.69,3.87H352.83L338.57,49.26,328.17,3.87H311.38l18.36,61.22h16.79l13.73-44.95,13.56,45h16.79l13.12-43.74V65.09h16.09V42.61h15c2.8,0,6.12.7,7.87,2.19,1.49,1.22,2.71,3.67,2.89,7.43l.26,5.07c.18,3,.44,5.08,2.36,7.79h32.45V45.67l8-7.17L510,65.09,529.75,65Zm-54-.87c-2.28,2.27-5.77,2.45-8.49,2.45H419.82v-15H436.7c1.75,0,5.77.09,7.69,1.32a6.76,6.76,0,0,1,3,5.94A7.33,7.33,0,0,1,445.36,28.62Z"/></svg>
							</div>
						</div>
						<div class="row justify-content-center homeSection">
							<div class="col-12">
								<div class="collapse" id="topNavToggle">
									<div class="d-flex flex-row mb-3 justify-content-center" aria-label="navigation">
										<a href="#slideContact" role="button" class="btn btn-outline-secondary" >Contact</a>
										<a href="#slideHome" role="button" class="btn btn-outline-secondary" >Home</a>
										<a href="#slidePortfolio" role="button" class="btn btn-outline-secondary">Portfolio</a>
										<a href="#resume-ErikClevenger.pdf" role="button" class="btn btn-outline-secondary">Resume</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="dragend-page" id="slidePortfolio">
					<div class="container">
						<div class="row mt-5 justify-content-center">
							<h2 class="col-12 text-center">Portfolio</h2>
							<p class="mb-4"> A small smattering of past work.</p>
						</div>
						<div id="verticalScroll" class="row justify-content-center">
							<div class="text-light col-5 text-center">
								<img class="card-img portfolioImg" src="https://picsum.photos/200?random" alt="placeholder
								images from
								Picsum">
								<div class="card-img-overlay">
									<h4 id="portfolio-1" class=" portfolio-item portfolio">Portfolio Item 1</h4>
								</div>
							</div>
							<div class="text-light col-5 text-center">
								<img class="card-img portfolioImg" src="https://picsum.photos/200?random" alt="placeholder
								images
								from
								Picsum">
								<div class="card-img-overlay">
									<h4 id="portfolio-2" class=" portfolio-item portfolio">Portfolio Item 2</h4>
								</div>
							</div>

<!--							<div class="card text-light col-4">
								<img class="card-img" src="https://picsum.photos/200?random" alt="placeholder images from Picsum">
								<div class="card-img-overlay">
									<h4 id="portfolio-2" class=" portfolio-item portfolio">Portfolio Item 2</h4>
								</div>
							</div>
							<div class="card text-light col-4">
								<img class="card-img" src="https://picsum.photos/200?random" alt="placeholder images from Picsum">
								<div class="card-img-overlay">
									<h4 id="portfolio-3" class=" portfolio-item portfolio">Portfolio Item 3</h4>
								</div>
							</div>
							<div class="card text-light col-4">
								<img class="card-img" src="https://picsum.photos/200?random" alt="placeholder images from Picsum">
								<div class="card-img-overlay">
									<h4 id="portfolio-4" class=" portfolio-item portfolio">Portfolio Item 4</h4>
								</div>
							</div>
-->
						</div>
					</div>
				</section>
			</div>
		</div>
</body>
</html>