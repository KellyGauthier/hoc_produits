<?php
/**
 * Looks for a product with the specified id in the specified array
 *
 * @param integer $id The wanted ID
 * @param array $produits The products (multi-dimensional, each product is considered as an associative array with an 'id' key)
 * @return array|null The product(array), otherwise null
 */
function search_produit(int $id, array $produits): ?array
{
    $id_values = array_column($produits, 'id');
    $key = array_search($id, $id_values);

    if ($key === false) {
        return null;
    }

    return $produit = $produits[$key];
};
