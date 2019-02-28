<?php
include('../templates/header_connecte.php');
?>
	<main class="panier">
		<div class="container-fluid">
			<?php include('../templates/breadcrumb.php');?>
			<div class="row justify-content-center">
				<h1 class="col-12 col-sm-10 col-md-8 col-lg-6">Panier de commande</h1>
			</div>
			<div class="row justify-content-center tableau">
				<table class="desktop col-12 col-lg-10">
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
							<th class="nom" scope="row">La guerre est déclarée</th>
							<td class="type">Film</td>
							<td class="prix">9€99</td>
							<td class="supprimer icon icon-Poubelle"><span class="path1"></span><span class="path2"></span><span class="path3"></span></td>
						</tr>
						<tr>
							<th class="nom" scope="row">Moonlight</th>
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
				<table class="mobile col-12 col-lg-10">
					<tr>
						<td>
							<table class="article col-12">
								<tr>
									<th class="nom" scope="col">Nom de l'article</th>
									<td class="nom" scope="row">Promotion éléctro</th>
								</tr>
								<tr>
									<th class="type" scope="col">Type d'article</th>
									<td class="type">Musique</td>
								</tr>
								<tr>
									<th class="prix" scope="col">Prix</th>
									<td class="prix">19€99</td>
								</tr>
								<tr>
									<th class="supprimer" scope="col">Supprimer</th>
									<td class="supprimer icon icon-Poubelle"><span class="path1"></span><span class="path2"></span><span class="path3"></span></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table class="article col-12">
								<tr>
									<th class="nom" scope="col">Nom de l'article</th>
									<td class="nom" scope="row">La guerre est déclarée</th>
								</tr>
								<tr>
									<th class="type" scope="col">Type d'article</th>
									<td class="type">Film</td>
								</tr>
								<tr>
									<th class="prix" scope="col">Prix</th>
									<td class="prix">9€99</td>
								</tr>
								<tr>
									<th class="supprimer" scope="col">Supprimer</th>
									<td class="supprimer icon icon-Poubelle"><span class="path1"></span><span class="path2"></span><span class="path3"></span></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table class="article col-12">
								<tr>
									<th class="nom" scope="col">Nom de l'article</th>
									<td class="nom" scope="row">Moonlight</th>
								</tr>
								<tr>
									<th class="type" scope="col">Type d'article</th>
									<td class="type">Film</td>
								</tr>
								<tr>
									<th class="prix" scope="col">Prix</th>
									<td class="prix">14€99</td>
								</tr>
								<tr>
									<th class="supprimer" scope="col">Supprimer</th>
									<td class="supprimer icon icon-Poubelle"><span class="path1"></span><span class="path2"></span><span class="path3"></span></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr class="total">
						<th scope="col">Total de la commande</th>
						<td class="prix">44€97</td>
					</tr>
				</table>
			</div>
			<div class="row justify-content-around">
				<div class="col-12 col-lg-10 col-xl-8 wrapButton">
					<a href="15_commande.php" class="valider button col-12 col-sm-8 col-md-5"><span class="icon icon-Valid"><span class="path1"></span><span class="path2"></span></span>Valider la commande</a>
					<a href="10_accueil.php" class="poursuivre button col-12 col-sm-8 col-md-5"><span class="icon icon-Poursuivre"><span class="path1"></span><span class="path2"></span></span>Poursuivre mes achats</a>
				</div>
			</div>
		</div>
	</main>

	<?php
	include('../templates/footer.php');
	?>
</body>
</html>
