
<div class="child-page-listing">

<h2>La vaisselle art de vivre</h2>

<div class="grid-container">
    <?php
   
    foreach($data as $produit)
    {
        echo "<article id='' class='location-listing' data-js-produit='" . $produit["id"] . "' data-component='Listeproduit'>
        <a class='location-title' href='#'>".$produit["nom"]."</a>
        <div class='location-image'>
        <img src='". $produit["lienimage"] . "'></img>
        <p>" . $produit["prix"] . " $</p>
        </div>
        </article>";
    }
   
    ?>
</div>
<!-- fin grid container -->

</div>
	
