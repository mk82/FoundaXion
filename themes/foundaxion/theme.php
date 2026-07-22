<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="<?= $Wcms->getSiteLanguage() ?>">
	<head>
		<!-- Encoding, browser compatibility, viewport -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<!-- Website and page title -->
		<title>
			<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>

		</title>

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/custom.css') ?>">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

		<!-- AnimXYZ CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">

		<!-- AOS CSS -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	</head>

	<body>
		<!-- Admin settings panel and alerts -->
		<?= $Wcms->settings() ?>

		<?= $Wcms->alerts() ?>
		<!-- Top bar for logo and social links -->
		<nav id="topBar" class="navbar navbar-dark fixed-top">
			
					<div id="site-logo">
						<a href="<?= $Wcms->url('home') ?>"><svg xmlns="http://w3.org" viewBox="0 0 200 30" width="100%" height="100%">
  <rect width="200" height="30" fill="transparent" />
  <text x="0" y="21" font-family="Archivo-Black" font-size="20px" fill="rgba(255,255,255,0.8)">
    FoundaXion
  </text>
					</div>
					<ul class="social-icons">
						<li>
							<a href="https://instagram.com/YourIG" target="_blank"> <i class="fa fa-instagram"></i></a>
						</li>
						<li>
							<a href="https://facebook.com/YourFacebookURL" target="_blank"> <i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="https://linkedin.com" target="_blank"> <i class="fa fa-linkedin"></i></a>
						</li>
						<li>
							<a href="https://youtube.com/c/YourChannelURL" target="_blank"> <i class="fa fa-youtube"></i></a>
						</li>
					</ul>
		</nav>

		<!-- Add a top menu default? -->
		<section id="topMenu"> <!-- Change to <Header>? Extend - Logo, search, etc -->
			<div class="inner">
				<nav>
					<ul class="menu">
						<!-- Menu -->
						<?= $Wcms->menu() ?>

					</ul>
				</nav>
			</div>
		</section>

		<div id="wrapper"> <!-- Do we need this div? -->
			<section id="intro" class="wrapper style1 fullscreen">
				<div class="inner cover-container w-100 h-100">
					<!-- Main content for each page -->
					<?= $Wcms->page('content') ?>

				</div>
			</section>

			<section class="wrapper style2"> <!-- ID? Create this section in editor w/ new additional content block -->
					<div class="inner">
						<!-- Static editable block, same on each page -->
						<?= $Wcms->block('subside') ?>

					</div>
			</section>
		</div>

		<footer class="wrapper"> <!-- ID? -->
			<div class="inner">
				<!-- Footer -->
				<?= $Wcms->footer() ?>

			</div>
		</footer>

		<!-- Admin JavaScript. More JS libraries can be added below -->
		<?= $Wcms->js() ?>

		<!-- Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

		<!-- AOS JS Library -->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>AOS.init({duration: 1500});</script>
	</body>
</html>
