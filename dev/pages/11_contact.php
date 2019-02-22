<?php
include('../templates/header.php');
?>
	<main class="contact">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h1 class="col-6">Formulaire de contact</h1>
			</div>
			<div class="row justify-content-center">
				<form class="col-4">
					<label for="cNom">Votre nom (obligatoire)</label>
					<input type="text" name="cNom">
					<label for="cMail">Votre adresse email (obligatoire)</label>
					<input type="text" name="cMail">
					<label for="cObjet">Objet</label>
					<input type="text" name="cObjet">
					<label>Votre message</label>
					<textarea></textarea>
					<input type="submit" value="Envoyer">
				</form>
			</div>
	<?php
	include('../templates/footer.php');
	?>
</body>
</html>