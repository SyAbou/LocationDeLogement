<header>
<?php
session_start();
?>
	<div id="menuHorizontal" class="center hide-on-small-only">
		<a href="#" class="grey-text text-lighten-3">Accueil</a><div class="separator"></div>
<?php if(isset($_SESSION['role'])&&($_SESSION['role']==1)){ ?>
		<a href="ajout-offre.php" class="grey-text text-lighten-3">Ajout de locations</a><div class="separator"></div>
<?php } ?>
		
		<a href="appartements.php" class="grey-text text-lighten-3">Locations</a><div class="separator"></div>
<?php 
if(!isset($_SESSION['id']))
{ 
?>
		<a href="login.php" class="grey-text text-lighten-3">Login</a><div class="separator"></div>
		<a href="inscription.php" class="grey-text text-lighten-3">Sign up</a>
<?php 
}
?>
	</div>

	<h6 id="titreMenuSmall" class="center hide-on-med-and-up"></h6>

	<a id="hamburger" class="white primary-text center hide-on-med-and-up"><i class="material-icons">menu</i></a>
	<div class="overlay">
		<div id="menuVertical">
			<ul>
				<li><a href="#" class="primary-text">Accueil</a></li>
				<li><a href="#" class="primary-text">Ajout de locations</a></li>
				<li><a href="/appartements.php" class="primary-text">Locations</a></li>
				<li><a href="/login.php" class="primary-text">Login</a></li>
				<li><a href="/inscription.php" class="grey-text text-lighten-3">Sign up</a></li>

			</ul>
		</div>
	</div>


</header>