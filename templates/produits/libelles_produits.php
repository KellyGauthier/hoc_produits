<ul class="libelles_ul">
    <?php for ($i = 0; $i < count($libellesProduits); $i++) { ?>
        <li>
            <?php echo $libellesProduits[$i]; ?>
        </li>
    <?php } ?>
    </ul>

<ul class="libelles_ul">
    <?php foreach ($libellesProduits as $libelle) { ?>
        <li>
            <?php echo $libelle; ?>
        </li>
    <?php } ?>
</ul>