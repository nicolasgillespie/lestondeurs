<?php
	$page = 'realisations';

	global $page;

	// header
	include '../assets/pages/header.php';
	include '../assets/pages/functions.php';

	$realisations = get_realisations();
?>
		<!-- content -->
		<div class="content <?php echo $page; ?>">
			<?php
				$projects = $realisations['prj'];
				$link = $realisations['link'];

				foreach ($projects as $key => $value) {
					$title = $value['title'];
					$desc = $value['desc'];
					$name = $value['name'];
					$rel = $value['rel'];
			?>

			<a href="<?php echo $_ng_param['medias']['paths']['images'] . $link . $name; ?>" class="fancybox box" rel="Project 2">
				<img src="<?php echo $_ng_param['medias']['paths']['images'] . $link . 'thumbs/' . $name; ?>" alt="" />
				<div class="img_desc">
					<div class="title"><?php echo $title; ?></div>
					<div class="desc"><?php echo $desc; ?></div>
				</div>
			</a>

			<?php
				}
			?>
		</div>
		<footer>
			<div class="footer">
				Copyright &#169; 2017 Les Tondeurs Enr. Tous droits réservés
			</div>
		</footer>
	</body>
</html>
