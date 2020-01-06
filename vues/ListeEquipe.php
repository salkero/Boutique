<section class="produit-liste" data-js-all-product>
	<h2>Liste des produits</h2>

	<form>
	<?php
		foreach($data as $produit)
		{
			//générer les équipes dynamiquement
			echo "<div class='produit' data-js-produit='" . $produit["id"] . "' data-component='Listeproduit'>
					<label for='" . $produit["id"] . "' data-js-label>" . $produit["nom"] . " </label>
					<input type='text' id=" . $produit["id"] . " required data-js-input />
					<input type='submit' value='changer' data-js-change>
					<input type='submit' value='Supprimer' data-js-delete>
				</div>";
		}
	?>
	</form>
</section>
	
