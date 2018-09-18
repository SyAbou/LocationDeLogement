export default class Recherche{
	constructor(){
		this.champs = document.querySelector('.champs');
		this.champs.addEventListener('input', this.inputChamps.bind(this));
	}

	getMaps(map){
		this.map = map;

	}


	inputChamps(e){
		let value = e.target.value;
		let url = `https://photon.komoot.de/api/?q=${value}&limit=5`;

		let request = new Request(url, {
			method: 'GET'
		});

		fetch(request)
			.then( response => response.json() )
			.then( data =>{
				console.log("this.map"+this.map)
				let lat = data.features[0].geometry.coordinates[1];
				let long = data.features[0].geometry.coordinates[0];
				this.map.panTo([lat,long]);
				
				this.createMarkers(lat, long);


			}) //console.log(data.features[0].properties.name,data.features[0].properties.state)  )
		;
		
	}

	createMarkers(lat, long){
		let url = `api/locationPoints.php?GeoCor={"type": "Point","coordinates": [${long},${lat}]}`;

		let request = new Request(url, {
			method: 'GET'
		});

		fetch(request)
			.then( response => response.json() )
			.then( data => console.log(data) )
		;
	}
}