<?php require_once("head-utils.php") ?>
<div class="container smallHide animated fadeInDown">
	<ul id="menu" class="nav justify-content-center">
		<li class="nav-item">
			<a class="nav-link animsition-link" href="<?php echo $PREFIX; ?>">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link animsition-link" href="<?php echo $PREFIX; ?>contact/contact.php">Contact</a>
		</li>
		<li class="nav-item">
			<a class="nav-link animsition-link" href="<?php echo $PREFIX; ?>portfolio/portfolio.php">Portfolio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="resume-ErikClevenger.pdf">Resume</a>
		</li>
	</ul>
</div>
<div class="container bigHide fixed-bottom">
	<div class="collapse " id="btmNavToggle">
		<div class="d-flex flex-row mb-3 justify-content-around" aria-label="navigation">
			<a href="<?php echo $PREFIX; ?>" role="button" class="btn backWhite" >Home</a>
			<a href="<?php echo $PREFIX; ?>contact/contact.php" role="button" class="btn backWhite animsition-link"
			>Contact</a>
			<a href="<?php echo $PREFIX; ?>portfolio/portfolio.php" role="button" class="btn backWhite
			animsition-link">Portfolio</a>
		</div>
	</div>
	<nav class="navbar navbar-light justify-content-center">
		<button class="navbar-toggler backWhite" type="button" data-toggle="collapse" data-target="#btmNavToggle"
				  aria-controls="btmNavToggle" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
</div>