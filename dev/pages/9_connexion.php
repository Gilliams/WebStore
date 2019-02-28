<?php
include('../templates/header.php');
?>
	<main class="connexion">
		<div class="container-fluid">
			<?php include('../templates/breadcrumb.php');?>
			<section class="seConnecter">
				<div class="row justify-content-center">
					<h1 class="col-12 col-sm-10 col-md-8 col-lg-6">Se connecter</h1>
				</div>
				<div class="row justify-content-center">
					<form class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
						<label for="id">Identifiant</label>
						<input type="text" name="id">
						<label for="mdp">Mot de passe</label>
						<input type="text" name="mdp">
						<a href="" class="oubliMdP">Mot de passe oublié?</a>
						<!--<input type="submit" value="Envoyer">-->
						<a href="10_accueil_connecte" class="button">
							<span class="icon icon-Valid"><span class="path1"></span><span class="path2"></span></span>
						</a>
					</form>
				</div>
			</section>
			<section class="inscription">
				<div class="row justify-content-center">
					<h1 class="col-12 col-sm-10 col-md-8 col-lg-6">S'inscrire</h1>
				</div>
				<div class="row justify-content-center">
					<form class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
						<label for="id">Votre identifiant (obligatoire)</label>
						<input type="text" name="id">
						<label for="mail">Votre adresse email (obligatoire)</label>
						<input type="text" name="mail">
						<label for="mdp">Entrez votre mot de passe (obligatoire)</label>
						<input type="text" name="mdp">
						<label for="mdp2">Confirmez votre mot de passe (obligatoire)</label>
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
			</section>
		</div>
	</main>

	<?php
	include('../templates/footer.php');
	?>
</body>
</html>
