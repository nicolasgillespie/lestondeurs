<?php

	function get_realisations() {
		$link = 'realisations/';
		$prj = [
			0 => [
				'name' => 'dalles-cassara-1.jpg',
				'title' => 'Service complet d\'entretien et d\'aménagement',
				'desc' => 'Projet 2017 #2 - Nouveauté : Dalles Cassara gris scandina',
				'rel' => 'Project 2'
			],
			1 => [
				'name' => 'dalles-cassara-2.jpg',
				'title' => 'Service complet d\'entretien et d\'aménagement',
				'desc' => 'Projet 2017 #2 - Nouveauté : Dalles Cassara gris scandina',
				'rel' => 'Project 2'
			],
			2 => [
				'name' => 'dalles-cassara-3.jpg',
				'title' => 'Service complet d\'entretien et d\'aménagement',
				'desc' => 'Projet 2017 #2 - Nouveauté : Dalles Cassara gris scandina',
				'rel' => 'Project 2'
			],
			3 => [
				'name' => 'tonte-1.jpg',
				'title' => 'Service de tonte de gazon',
				'desc' => 'Service complet d\'entretien et d\'aménagement.',
				'rel' => 'Aménagement'
			],
			4 => [
				'name' => 'tonte-2.jpg',
				'title' => 'Service de tonte de gazon',
				'desc' => 'Service complet d\'entretien et d\'aménagement.',
				'rel' => 'Aménagement'
			],
			5 => [
				'name' => 'dompeur-1.jpg',
				'title' => 'Le mastodonte! Parfait pour faire de l\'aménagement.',
				'desc' => 'Service complet d\'entretien et d\'aménagement',
				'rel' => 'Aménagement'
			],
			6 => [
				'name' => 'paysagement-1.jpg',
				'title' => 'Projet 2017 #1',
				'desc' => 'Service complet d\'entretien et d\'aménagement.',
				'rel' => 'Projet 1'
			],
			7 => [
				'name' => 'paysagement-2.jpg',
				'title' => 'Projet 2017 #1',
				'desc' => 'Service complet d\'entretien et d\'aménagement.',
				'rel' => 'Projet 1'
			],
			8 => [
				'name' => 'services-electrique-1.jpg',
				'title' => 'Service entièrement électrique',
				'desc' => 'Cet été, une vingtaine (20) de clients profiteront d\'un service électrique, écologique et sans bruit!',
				'rel' => 'Service électrique, Aménagement'
			],
			9 => [
				'name' => 'services-electrique-2.jpg',
				'title' => 'Service entièrement électrique',
				'desc' => 'Cet été, une vingtaine (20) de clients profiteront d\'un service électrique, écologique et sans bruit!',
				'rel' => 'Service électrique, Aménagement'
			],
			10 => [
				'name' => 'nettoyage-printemps-1.jpg',
				'title' => 'Nettoyage du printemps',
				'desc' => 'Service complet d\'entretien et d\'aménagement.',
				'rel' => 'Nettoyage'
			],
			11 => [
				'name' => 'nettoyage-printemps-2.jpg',
				'title' => 'Nettoyage du printemps',
				'desc' => 'Service complet d\'entretien et d\'aménagement.',
				'rel' => 'Nettoyage'
			],
			12 => [
				'name' => 'nettoyage-printemps-3.jpg',
				'title' => 'Nettoyage du printemps',
				'desc' => 'Service complet d\'entretien et d\'aménagement.',
				'rel' => 'Nettoyage'
			],
			13 => [
				'name' => 'dechaumage-1.jpg',
				'title' => 'Déchaumage mécanique',
				'desc' => 'Service complet d\'entretien et d\'aménagement.',
				'rel' => 'Aménagement'
			],
			14 => [
				'name' => 'amenagement-1.jpg',
				'title' => 'Paillis de cèdres naturel',
				'desc' => 'Service complet d\'entretien et d\'aménagement.',
				'rel' => 'Aménagement'
			],
			15 => [
				'name' => 'terreautage-reensemencement-1.jpg',
				'title' => 'Service complet d\'entretien et d\'aménagement.',
				'desc' => 'Terreautage et réensemencement. Voyons voir les résultats dans 3 semaines!',
				'rel' => 'Terreautage et réensemencement'
			],
			16 => [
				'name' => 'terreautage-reensemencement-2.jpg',
				'title' => 'Service complet d\'entretien et d\'aménagement.',
				'desc' => 'Terreautage et réensemencement. Voyons voir les résultats dans 3 semaines!',
				'rel' => 'Terreautage et réensemencement'
			],
			17 => [
				'name' => 'terreautage-reensemencement-3.jpg',
				'title' => 'Service complet d\'entretien et d\'aménagement.',
				'desc' => 'Terreautage et réensemencement. Voyons voir les résultats dans 3 semaines!',
				'rel' => 'Terreautage et réensemencement'
			],
			18 => [
				'name' => 'terreautage-reensemencement-4.jpg',
				'title' => 'Service complet d\'entretien et d\'aménagement.',
				'desc' => 'Terreautage et réensemencement. Voyons voir les résultats dans 3 semaines!',
				'rel' => 'Terreautage et réensemencement'
			],
			19 => [
				'name' => 'terreautage-reensemencement-5.jpg',
				'title' => 'Service complet d\'entretien et d\'aménagement.',
				'desc' => 'Terreautage et réensemencement. Voyons voir les résultats dans 3 semaines!',
				'rel' => 'Terreautage et réensemencement'
			],
		];

		$realisations['link'] = $link;
		$realisations['prj'] = $prj;

		return $realisations;
	}

?>
