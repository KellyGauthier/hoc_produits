<?php

class Produit
{
    private $id;
    private $nom;
    private $reference;
    private $produit_image;
    private $description;
    private $prix_ht;
    private $promotion;

    public function __construct(
        int $id,
        string $nom,
        string $reference,
        string $produit_image = "",
        string $description = "",
        float $prix_ht,
        bool $promotion = false
    )
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->reference = $reference;
        $this->produit_image = $produit_image;
        $this->description = $description;
        $this->prix_ht = $prix_ht;
        $this->promotion = $promotion;
    }
}