
<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Animsition | Home";
/*inject the entire head tag via php */
require_once("php/head-utils.php");
?>

<body>


		<div id="paraBG" class="bg-light">
			<div id="paraImg" class="animated fadeInUp"></div>
		</div>
		<?php require_once("php/navbar.php") ?>
		<div id="pages">
			<section class="page " id="home" data-page="home">
				<div class="container">
					<div class="row justify-content-center homeSection">
							<h1 class="blackText animated fadeIn col-10 col-md-4 text-center align-self-center">MOD</h1>
							<img class="animated fadeIn col-4 col-md-2" src="imgs/mwLogo.svg" alt="mwlogoSmall">
							<h1 class="blackText animated fadeIn col-10 col-md-4 text-center align-self-center">WRK</h1>

					</div>
				</div>
			</section>
		</div>

</body>
</html>