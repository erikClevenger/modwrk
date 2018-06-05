<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Animsition | Page 2";
/*inject the entire head tag via php */
require_once(dirname(__DIR__) . "/php/head-utils.php");
?>

<body>
	<?php require_once(dirname(__DIR__) . "/php/navbar.php"); ?>
	<div class="animsition" data-animsition-in-class="fade-in-down-sm" data-animsition-out-class="fade-out-left-sm">
		<div id="paraBG" class="">
			<div id="paraImg" class="animated fadeInUp"></div>
		</div>
		<section class="page " id="contact" data-page="contact">
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
		</section>
	</div>
</body>