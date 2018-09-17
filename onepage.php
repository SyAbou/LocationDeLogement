<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin="">
   	</script>

   
   
   
	<link rel="stylesheet" href="style.css" />
	<title>Location de logement</title>
<body>
	<div id="container">
		<div id="recherche">
			<div id="lieu">
				<input type="text" name="recherche" class="champs" placeholder="Lieux">
			</div>
			<div id="description">
				
			</div>
			


		</div>

		<div id="mapid">

		</div>
	</div>
		<script type="text/javascript">
   			var map = L.map('mapid').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();

   		
   	</script>
</body>
</html>