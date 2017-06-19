<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />

		<meta name="description" content="LES TONDEURS PLUS est une entreprise spécialisée dans les services paysagers" />
		<meta name="keywords" content="Les tondeurs, tonte de pelouse, Tondeurs, aménagement paysagé, PAVÉ-UNI *produits Permacon, Pose de tourbe, plates-bandes, terrautage, fertilisation, taille de haies, irrigation, plantation de cèdres, déchaumage mécanique, aération mécanique, livraison de terre" />

		<meta name="author" content="Nicolas Gillespie" />
		<?php
			require_once(dirname(dirname(dirname(__FILE__))) .'/require_config.php');

			$title;
			if($page == 'home') {
				$title = ' | Notre entreprise';
			} else if($page == "realisations") {
				$title = ' | Nos réalisations';
			} else if($page == "services") {
				$title = ' | Nos services';
			} else if($page == "contact") {
				$title = ' | Contactez-nous';
			}
		 ?>
		<title>Les Tondeurs plus<?php echo $title; ?></title>

		<link rel="stylesheet" media="all" href="/assets/css/styles.css"></link>

		<!-- Add fancybox plugin styles -->
		<link rel="stylesheet" media="all" href="<?php echo $_ng_conf['medias']['paths']['lib']; ?>fancy-box/jquery.fancybox.css"></link>
		<!-- Add ng.filter plugin styles -->
		<link rel="stylesheet" media="all" href="<?php echo $_ng_conf['medias']['paths']['lib']; ?>ng-filter/ng.filter.min.css"></link>
		<link rel="stylesheet" media="all" href="<?php echo $_ng_conf['medias']['paths']['css']; ?>ng.styles.css"></link>

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'></link>

		<script type="text/javascript" src="<?php echo $_ng_conf['medias']['paths']['lib']; ?>jquery/jquery-2.2.3.min.js"></script>
		<!-- Add fancybox plugin script -->
		<script type="text/javascript" src="<?php echo $_ng_conf['medias']['paths']['lib']; ?>fancy-box/jquery.fancybox.pack.js"></script>
		<!-- Add ng.filter plugin script -->
		<script type="text/javascript" src="<?php echo $_ng_conf['medias']['paths']['lib']; ?>ng-filter/ng.filter.min.js"></script>

		<script type="text/javascript" src="<?php echo $_ng_conf['medias']['paths']['js']; ?>script.js"></script>
	</head>
	<body>
<?php
	include 'header-menu.php';
?>
