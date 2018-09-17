$(document).ready( () => {

	// Chargement de tous les éléments de materialize
	M.AutoInit();

	// Gestion de l'onglet actif dans le menu
	let urlPath = window.location.pathname;
	let url = urlPath.replace(/\//g, '');
	$("a[href='" + url + "']").toggleClass("text-lighten-3 text-lighten-1");
	if(urlPath === "/index.php" || urlPath === "/") {
		$("a[href='/']").toggleClass("text-lighten-3 text-lighten-1");
	}

	// Titre dans le menu en small device
	if (urlPath === "/" || urlPath === "/index.php") {
		$("#titreMenuSmall").text("Accueil");
	}
	else {
		$("#titreMenuSmall").text(urlPath.replace(/\//g,'').replace(/.php/g,'').replace(/_/g, ' '));
	}

	// Gestion du menu en small device
	$("#hamburger").on("click", () => {
		$(".overlay").fadeToggle(200);
		($("#hamburger i").text() === "menu") ? $("#hamburger i").text("close") : $("#hamburger i").text("menu");
	});
	$(".overlay").on("click", () => {
		$(".overlay").fadeToggle(200);
		($("#hamburger i").text() === "menu") ? $("#hamburger i").text("close") : $("#hamburger i").text("menu");
	});
	
	// Gestion du carousel
	$('.pgwSlideshow').pgwSlideshow({
		"maxHeight": 500
	});
});