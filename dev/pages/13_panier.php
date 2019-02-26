<?php
include('../templates/header.php');
?>
	<main class="panier">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h1 class="col-6">Panier de commande</h1>
			</div>
			<div class="row justify-content-center">
				<table class="col-10">
					<thead>
						<tr>
							<th class="nom" scope="col">Nom de l'article</th>
							<th class="type" scope="col">Type d'article</th>
							<th class="prix" scope="col">Prix</th>
							<th class="supprimer" scope="col">Supprimer</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="nom" scope="row">Promotion éléctro</th>
							<td class="type">Musique</td>
							<td class="prix">19€99</td>
							<td class="supprimer icon icon-Poubelle"><span class="path1"></span><span class="path2"></span><span class="path3"></span></td>
						</tr>
						<tr>
							<th class="nom" scope="row">Promotion éléctro</th>
							<td class="type">Film</td>
							<td class="prix">9€99</td>
							<td class="supprimer icon icon-Poubelle"><span class="path1"></span><span class="path2"></span><span class="path3"></span></td>
						</tr>
						<tr>
							<th class="nom" scope="row">Promotion éléctro</th>
							<td class="type">Film</td>
							<td class="prix">14€99</td>
							<td class="supprimer icon icon-Poubelle"><span class="path1"></span><span class="path2"></span><span class="path3"></span></td>
						</tr>
						<tr class="total">
							<th scope="row" colspan="2">Total de la commande</th>
							<td class="prix">44€97</td>
						</tr>
					</tbody>
				</table>
			</div>
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