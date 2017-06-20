<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />

		<meta name="robots" content="noindex, nofollow">

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

		<meta name="description" content="" />
 		<meta name="keywords" content="" />

		<link rel="icon" href="<?php echo $_ng_conf['medias']['paths']['images']; ?>favicon.png" sizes="112x112" type="image/png"></link>

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
