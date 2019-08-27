<?php
require dirname(__FILE__) . "../../src/Produit.php";

$produitsObjects = [
    new Produit(
        1,
        "Lorem",
        "cjia4561",
        "https://source.unsplash.com/300x180",
        "Lorem ipsum dolor sit amet",
        46.15,
        true,
    ),
    new Produit(
        2,
        "Vestibulum",
        "bgdzc56",
        "https://source.unsplash.com/300x180",
        "Vestibulum diam massa, pretium sed dapibus",
        37.55,
        false,
    ),
    new Produit(
        3,
        "Tortor",
        "tiocnujsi78",
        "https://source.unsplash.com/300x180",
        "Morbi tortor nisi, fermentum non nisi quis",
        40.85,
        true,
    )
    ];