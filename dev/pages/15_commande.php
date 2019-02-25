<?php
include('../templates/header.php');
?>
	<main class="commande">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h1 class="col-6">Récapitulatif de commande</h1>
			</div>
			<div class="row justify-content-center">
				<table class="col-8">
					<thead>
						<tr>
							<th class="nom" scope="col">Nom de l'article</th>
							<th class="type" scope="col">Type d'article</th>
							<th class="prix" scope="col">Prix</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="nom" scope="row">Promotion éléctro</th>
							<td class="type">Musique</td>
							<td class="prix">19€99</td>
						</tr>
						<tr>
							<th class="nom" scope="row">Promotion éléctro</th>
							<td class="type">Film</td>
							<td class="prix">9€99</td>
						</tr>
						<tr>
							<th class="nom" scope="row">Promotion éléctro</th>
							<td class="type">Film</td>
							<td class="prix">14€99</td>
						</tr>
						<tr class="total">
							<th scope="row" colspan="2">Total de la commande</th>
							<td class="prix">44€97</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row justify-content-center">
				<h1 class="col-6">Paiement de la commande</h1>
			</div>
			<form>
				<div class="row justify-content-center">
					<div class="wrap col-3">
						<div class="row justify-content-between">
							<label>Moyen de paiement :</label>
							<div>
								<input type="radio" name="moyenPaiement" id="visa" value=0>
								<label for="visa">Visa</label>
							</div>
							<div>
								<input type="radio" name="moyenPaiement" id="mastercard" value=1>
								<label for="mastercard">Mastercard</label>
							</div>
						</div>
						<div class="row">
								<label for="numeroCB">Numéro de carte bancaire</label>
								<input type="text" name="numeroCB" id="numeroCB" class="col-12">
						</div>
						<div class="row justify-content-between">
							<div class="dateExp col-6">
								<label for="moisExp">Date d'expiration</label>
								<input type="text" name="moisExp" id="moisExp">
								<span>/</span>
								<input type="text" name="anneeExp">
							</div>
							<div class="crypto col-6">
								<label for="crypto">Cryptogramme visuel</label>
								<input type="text" name="crypto" id="crypto">
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="cgv col-8">
						<input type="checkbox" name="cgv" id="cgv">
						<label for="cgv">Je reconnais avoir pris connaissance des <a href="">Conditions générales de vente</a> et je les accepte</label>
					</div>
				</div>
			</form>
			<div class="row col-6 offset-3 justify-content-around">
				<a href="" class="valider button col-4">Valider la commande</a>
				<a href="" class="poursuivre button col-4">Poursuivre mes achats</a>
			</div>
		</div>
	</main>

	<?php
	include('../templates/footer.php');
	?>
</body>
</html>