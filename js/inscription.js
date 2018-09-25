
	let form = document.querySelector('.form');

	form.addEventListener('submit', onSubmit);

	function onSubmit(e){
		e.preventDefault();
		let valid = true;
		var mot_de_passe1= document.getElementById('mot_de_passe1').value;
		var mot_de_passe2= document.getElementById('mot_de_passe2').value;
		var mail = document.getElementById('mail');
		//console.log(verifMail(mail));
		//console.log((mot_de_passe1 == mot_de_passe2));
		if((mot_de_passe1 == mot_de_passe2) && verifMail(mail))
		{   
			valid = true;
		}
		else
		{
			alert("Verification");
			valid = false;
		}

		if(valid){
			form.submit();
		}
	}

	function verifMail(champ)
{
   var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

   if(!regex.test(champ.value))
   {
      //surligne(champ, true);
      return false;
   }
   else
   {
      //surligne(champ, false);
      return true;
   }
}
