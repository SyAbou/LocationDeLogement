export default class Recherche{
	constructor(){
		this.champs = document.querySelector('.champs');
		this.champs.addEventListener('input', this.inputChamps.bind(this));

        let requestSess = new Request(`api/userId.php`, {
            method: 'GET'
        });

        fetch(requestSess)
            .then( response => response.json() )
            .then( data => {
                window.sessionStorage.setItem('id',data);
            });

        let requestAdmin = new Request(`api/userId.php`, {
            method: 'GET'
        });

        fetch(requestAdmin)
            .then( response => response.json() )
            .then( data => {
                window.sessionStorage.setItem('admin',data);
            });
	}





	getMaps(map){
		this.map = map;

	}




	inputChamps(e){
		let value = e.target.value;
		let url = `https://photon.komoot.de/api/?q=${value}&limit=5&lang=fr`;

		let request = new Request(url, {
			method: 'GET'
		});

		fetch(request)
			.then( response => response.json() )
			.then( data =>{
				//console.log("this.map"+this.map)
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
		var result;

		fetch(request)
			.then( response => response.json() )
			.then( data => {
				result = data;
				console.log(data)
				for(var item of data)
				{

					let cordonne = JSON.parse(item.cordonne);
					//console.log(cordonne.coordinates);
					//console.log(item);
					//pas touche a la popup
				    L.marker([cordonne.coordinates[1],cordonne.coordinates[0] ]).addTo(map)
						.bindPopup('<div><h1>reservation</h1><div><input type="date" name="dateD" placeholder="date de debut"><br /><input type="date" name="dateF" placeholder="date de fin"><button class="button-popup" data-id="'+item.id_offre+'">Click me</button></div></div>')
						.on('click', function() { Recherche.clickPopupButtons(cordonne.coordinates[1],cordonne.coordinates[0]) })
						//.openPopup()
					;
				}
				
			})
//		console.log(result);.

	}

	static clickPopupButtons(lat,long){

		let infoOffre = Array.from(document.querySelectorAll('#description'));

		infoOffre.map(elem=>{
            let url = `api/PointInfo.php?GeoCor={"type": "Point","coordinates": [${long},${lat}]}`;
            let request = new Request(url, {
                method: 'GET'
            });

            fetch(request)
                .then( response => response.json() )
                .then( data => {
                	//sonny a faire les info dans innerhtml
                	elem.innerHTML=console.log(data);
                	elem.innerHTML= '<div class="title">'+data[0].libelle_offre+'</div><div class="desc">'+data[0].desc_offre+'</div><div class="prix">'+data[0].tarif_offre+'€/sem'+'</div>';
                });


		})

		let buttonsPopup = Array.from(document.querySelectorAll('.button-popup'));
		buttonsPopup.map( el => {
			el.addEventListener('click', () => {
				let id = el.dataset.id;
				let dateD = el.previousElementSibling.previousElementSibling.previousElementSibling.value;
				let dateF = el.previousElementSibling.value;

					if (dateD>dateF)
					{
						let tempdate;
						tempdate = dateF;
						dateF = dateD;
						dateD = tempdate;
					}

					console.log('toto');
					let url = `api/reservation.php`;
					let formData = new FormData();
					formData.append('user', window.sessionStorage.getItem('id'));
					formData.append('offre', id);
					formData.append('dateD', dateD);
					formData.append('dateF', dateF);
					let request = new Request(url, {
						method: 'POST',
						body: formData
					});

					fetch(request)
						.then( response => response.json() )
						.then( data => {
							console.log(data);
							map.closePopup();
						});
			})
		}) 
	}


	 


	    
     

	/*infoMarkers(lat, long){
		let url = `api/pointInfo.php?GeoCor={"type": "Point","coordinates": [lat,long]}`;

		let request = new Request(url, {
			method: 'GET'
		});

		fetch(request)
			.then( response => response.json() )
			.then( data => console.log(data) )
	 
		;
	}*/


}