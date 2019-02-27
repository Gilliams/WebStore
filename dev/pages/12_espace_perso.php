<?php
include('../templates/header.php');
?>
	<main class="espace_perso">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h1 class="col-6">Informations personnelles</h1>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 bienvenue">Bienvenue [insert name here]</div>
				<form class="col-4">
					<label for="id">Votre identifiant</label>
					<input type="text" name="id">
					<label for="mail">Votre adresse mail</label>
					<input type="text" name="mail">
					<label for="mdp">Nouveau mot de passe</label>
					<input type="text" name="mdp">
					<label for="mdp2">Confirmez votre nouveau mot de passe</label>
					<input type="text" name="mdp2">
					<label for="nom">Nom</label>
					<input type="text" name="nom">
					<label for="prenom">Prénom</label>
					<input type="text" name="prenom">
					<label for="telephone">Téléphone</label>
					<input type="text" name="telephone">
					<div>Adresse postale</div>
					<label for="rue">Nom et n° de rue</label>
					<input type="text" name="rue">
					<label for="cp">Code postal</label>
					<input type="text" name="cp">
					<label for="ville">Ville</label>
					<input type="text" name="ville">
					<label for="pays">Pays</label>
					<input type="text" name="pays">
					<!--<input type="submit" value="Envoyer">-->
					<button><span class="icon icon-Valid"><span class="path1"></span><span class="path2"></span></span></button>
				</form>
			</div>
		</div>
	</main>

	<?php
	include('../templates/footer.php');
	?>
</body>
</html>