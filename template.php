<?php if (!isset($contenu)) {
	echo "Erreur 403";
	die;
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin="">
   	</script>
	<title>Locations de meublés</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<meta charset="utf-8">

	<!-- Responsive design -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Materialize -->
	<link rel="stylesheet" href="lib/materialize/css/materialize.min.css">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- PgwSlideShow -->
	<link rel="stylesheet" type="text/css" href="lib/pgwslideshow/pgwslideshow.css">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>

	<!-- Menu -->
	<?php include "menu.html"; ?>

	<!-- Contenu -->
	<main>
		<?= $contenu; ?>
		
	</main>

	<!-- Pied de page -->
	<?php include "footer.html"; ?>
	<script type="text/javascript">
   			var map = L.map('mapid').setView([48.8534, 2.3488], 13);
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);   		
   	</script>

	<script src="lib/jquery/jquery-3.3.1.min.js"></script>
	<script src="lib/materialize/js/materialize.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<script src="lib/pgwslideshow/pgwslideshow.js" type="text/javascript"></script>

</body>
</html>