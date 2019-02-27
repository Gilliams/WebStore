<?php
include('../templates/header.php');
?>
	<main class="contact">
		<div class="container-fluid">
			<?php include('../templates/breadcrumb.php');?>
			<div class="row justify-content-center">
				<h1 class="col-12 col-sm-10 col-md-8 col-lg-6">Formulaire de contact</h1>
			</div>
			<div class="row justify-content-center">
				<form class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
					<label for="cNom">Votre nom (obligatoire)</label>
					<input type="text" name="cNom">
					<label for="cMail">Votre adresse email (obligatoire)</label>
					<input type="text" name="cMail">
					<label for="cObjet">Objet</label>
					<input type="text" name="cObjet">
					<label>Votre message</label>
					<textarea></textarea>
					<!--<input type="submit" value="Envoyer">-->
					<button><span class="icon icon-Valid"><span class="path1"></span><span class="path2"></span></span></button>
				</form>
			</div>
	<?php
	include('../templates/footer.php');
	?>
</body>
</html>
