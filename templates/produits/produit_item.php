<div class="produit">
    <div class="header">
        <span class="reference">
            <?php echo $produit["reference"]; ?>
        </span>
    </div>
    <div class="img">
        <img src="<?php echo $produit['produit_image']; ?>" />
    </div>
    <div class="infos">
        <div class="title">
            <?php if ($produit["promotion"]) { ?>
            <span class="promo">promo</span>
            <?php } ?>
            <?php echo $produit['nom']; ?>
        </div>
        <h2 class="price">
            <?php echo $produit['prix_ht']; ?> €
        </h2>
        <div class="description">
            <?php echo $produit['description']; ?>
        </div>
    </div>
</div>