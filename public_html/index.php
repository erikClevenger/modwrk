
<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Animsition | Home";
/*inject the entire head tag via php */
require_once("php/head-utils.php");
?>

<body>


		<div id="paraBG" class="">
			<div id="paraImg" class="animated fadeInUp"></div>
		</div>
		<?php require_once("php/navbar.php") ?>
		<div id="pages">
			<section class="page " id="home" data-page="home">
				<div class="container">
					<div class="row justify-content-center homeSection">
						<div id="heroImg" class="col-12 animated fadeIn">
							<svg id="modwrkbanner" data-name="modwrkBanner"  viewBox="0 0 532.5 68.5"><defs><style>.cls-1{fill:#29323f;
										}</style></defs><title>modwrkBanner</title><path class="cls-1" d="M194,12c-6.49-6.9-16.28-8.67-25.27-8.67H142.66V28a29.08,29.08,0,0,0-8.43-17.41c-4.25-4.15-11.71-9-24.54-9s-20.3,4.86-24.55,9a29.32,29.32,0,0,0-8.51,18V3.31H55.78L39.89,48.22h-.4L23.61,3.31H2.75V65.19H17.51V24.35L17,19.13h.56L34.36,65.19H45L61.87,19.13h.56l-.56,5.22V65.19H76.63V40a29.32,29.32,0,0,0,8.51,18c4.25,4.15,11.71,9,24.55,9s20.29-4.86,24.54-9a29.08,29.08,0,0,0,8.43-17.41V65.19h24.71c7.7,0,19.09-.36,26.63-8.49C197.45,53,201.46,46,201.46,34,201.46,28.06,200.5,18.87,194,12ZM121.88,49.81c-3.85,4.15-8.42,4.77-12.19,4.77s-8.34-.62-12.2-4.77c-4.65-5-5.13-12-5.13-15.56s.48-10.52,5.13-15.56c3.86-4.15,8.43-4.77,12.2-4.77s8.34.62,12.19,4.77c4.65,5,5.14,12,5.14,15.56S126.53,44.77,121.88,49.81Zm58.73-1.24c-4.42,4.07-10.83,4.24-14.68,4.24h-8.51V15.69h9.39c4.09,0,9.87.17,14.12,4.24,2.32,2.21,5,6.72,5,14.23C185.9,41.32,183.41,46,180.61,48.57Z"/><path class="cls-1" d="M499.4,29.49,528.09,3.87H508.15L480.69,29.49V3.87H464.6V63.81a17.55,17.55,0,0,1-1.84-7.47l-.44-6.91c-.17-3.15-.17-6.29-3.06-9.27a12.92,12.92,0,0,0-7.17-3.67v-.35A17.49,17.49,0,0,0,460,31.86c3.06-3,4-6.74,4-10.85,0-3.32-.61-8-4.19-11.63C454.71,4.31,446,3.87,439.93,3.87H392.18L381.86,49.26,367.69,3.87H352.83L338.57,49.26,328.17,3.87H311.38l18.36,61.22h16.79l13.73-44.95,13.56,45h16.79l13.12-43.74V65.09h16.09V42.61h15c2.8,0,6.12.7,7.87,2.19,1.49,1.22,2.71,3.67,2.89,7.43l.26,5.07c.18,3,.44,5.08,2.36,7.79h32.45V45.67l8-7.17L510,65.09,529.75,65Zm-54-.87c-2.28,2.27-5.77,2.45-8.49,2.45H419.82v-15H436.7c1.75,0,5.77.09,7.69,1.32a6.76,6.76,0,0,1,3,5.94A7.33,7.33,0,0,1,445.36,28.62Z"/></svg>
						</div>
					</div>
				</div>
			</section>
<!--			<section class="page " id="contact" data-page="contact">
				<div class="container">
					<div class="row mt-5 justify-content-center">
						<h2 class="col-12 align-self-center text-center">Contact</h2>
						<p class="col-12 col-lg-6 offset-lg-1 mb-4">Interested in working with me?<br>Found a bug?<br>Don't like my
							face?<br><strong>Let me know.</strong></p>
						<form class="col-12 justify-content-center" id="contactForm" action="php/mailer.php" method="post">
							<div class="form-group col-lg-6 offset-lg-3">
								<input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Name">
							</div>
							<div class="form-group col-lg-6 offset-lg-3">
								<input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="Email">
							</div>
							<div class="form-group col-lg-6 offset-lg-3">
								<textarea class="form-control" id="messageTextArea" name="messageTextArea" rows="6"
											 placeholder="Message"></textarea>
							</div>
							<div class="g-recaptcha" data-sitekey="6LeMN10UAAAAAMigYYebRfF7A7YblTkUDPlIRAiY"></div>

							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
							<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>

						</form>
						<div id="output-area"></div>

					</div>
				</div>
			</section>-->
<!--			<section class="page " id="portfolio">
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


					</div>

				</div>
			</section>-->
		</div>

</body>
</html>