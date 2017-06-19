<?php
	$url_home = '/index';
	// $url_home = '#';
	$url_realisations = '/fr/realisations';
	// $url_realisations = '/fr/realisations.html';
	$url_services = '#';
	// $url_services = '/fr/services.html';
	$url_contact = '/fr/contact';
	// $url_contact = '#';

	// if($page == 'home') {
	//
	// }
?>

<header>
	<div class="info">Entretien et aménagement paysager - Saint-Bruno | Saint-Basile | Sainte-Julie</div>
	<div class="phone">450-262-1000</div>
	<div class="header-top">
		<div class="logo">
			<img src="/assets/images/logo.png" alt="Logo Les Tondeurs" />
		</div>
		<nav>
			<ul class="menu">
				<li class="entreprise <?php if($page == 'home') { echo 'selected'; } ?>">
					<a href="<?php echo $url_home; ?>">Entreprise</a>
				</li>
				<li class="realisations <?php if($page == 'realisations') { echo 'selected'; } ?>">
					<a href="<?php echo $url_realisations; ?>">Réalisations</a>
				</li>
				<li class="services <?php if($page == 'services') { echo 'selected'; } ?>">
					<a href="<?php echo $url_services; ?>">Services</a>
				</li>
				<li class="contact <?php if($page == 'contact') { echo 'selected'; } ?>">
					<a href="<?php echo $url_contact; ?>">Contact</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="bg-header img_rotator">
		<img src="/assets/images/img_rotator/amenagement-1.jpg" alt="" />
		<h1>
			<?php
				if($page == 'home') {
					echo 'Les Tondeurs plus';
				} else if($page == 'realisations') {
					echo 'Nos réalisations';
				} else if($page == 'services') {
				} else if($page == 'contact') {
					echo 'Pour nous contacter';
				}
			?>
		</h1>
	</div>
</header>
