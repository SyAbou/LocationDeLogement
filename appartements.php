<?php ob_start(); ?>

<div class="row withoutMarginBot">
	<div id="divTitre" class="col l8 m8 s10 offset-l2 offset-m2 offset-s1 hide-on-small-only">
		<h1 id="titre" class="white-text center">Recherche des locations</h1>
	</div>

	<div id="divTitreSmall" class="parallax-container hide-on-med-and-up valign-wrapper">
		<div class="col s10 offset-s1">
			<h3 id="titreSmall" class="white-text center">Recherche des locations</h3>
		</div>
		<div class="parallax"><img src="images/Lac_du_Bourget_et_le_Revard.min.jpg"></div>
	</div>
</div>
<div id="container">
		<div id="recherche">
			<div id="lieu">
				<input type="text" name="recherche" class="champs" placeholder="Lieux">
			</div>
			<div id="description">
				<div class="title"><!--recuperation BDD-->
					<p>Très bel appartement (RER Nanterre-Ville)</p>
				</div>

				<div class="picture"><!--recuperation BDD-->
					<div id="slider">
						<figure>
						<img src="austin-fireworks.jpg" alt>
						<img src="taj-mahal.jpg" alt>
						<img src="ibiza.jpg" alt>
						<img src="ankor-wat.jpg" alt>
						<img src="austin-fireworks.jpg" alt>
						</figure>
					</div>
				</div>

				<div class="information"><!--recuperation BDD--></div>
			</div>
			


		</div>

		<div id="mapid">

		</div>
	</div>



<div class="hide-on-small-only">
	<br><br><br><br>
</div>
<div class="parallax-container col s12 hide-on-med-and-up hauteur260">
	<div class="parallax"><img src="images/lac-du-bourget.jpg"></div>
</div>

<?php $contenu = ob_get_clean(); ?>
<?php require_once 'template.php'; ?>