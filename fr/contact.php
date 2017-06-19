<?php
	$page = 'contact';

	global $page;

	// header
	include '../assets/pages/header.php';
?>
		<!-- content -->
		<div class="content">
			<div class="box half">
				<h2>Contactez-nous</h2>
				<p>Tél: <em class="normal">450-262-1000</em></p>
				<p>Téléphonez-nous pour une estimation gratuite</p>
				<br />
				<p>Vous pouvez nous contacter par courriel à <em class="normal">lestondeurs@hotmail.com</em> ou en remplissant le formulaire suivant:</p>
			</div>
			<div class="box half">
				<form>
					<label for="name">Nom</label>
					<input type="text" name="name" id="name" value="" placeholder="Nom" />
					<label for="email">Courriel</label>
					<input type="text" name="email" id="email" value="" placeholder="Courriel" />
					<label for="message">Message</label>
					<textarea type="text" name="message" id="message" value="" placeholder="Message"></textarea>
					<input type="submit" name="" value="Envoyer!">
				</form>
			</div>

		</div>
		<footer>
			<div class="footer">
				Copyright &#169; 2017 Les Tondeurs Enr. Tous droits réservés
			</div>
		</footer>
	</body>
</html>
