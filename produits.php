<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php

//Tableau simple
        $libellesProduits = [
            "item1",
            "item2",
            "item3",
            "item4",
            "item5",
            "item6",
            "item7",
            "item8"
        ];

//Tableau multi-dimenssionnel
        $produits = [    
             [
                 //Tableau associatif
                 "id" => 1,
                 "reference" => "AZ123ER",
                 "image" => "/51Jv4pni-pL.jpg",
                 "description" => "hrztuhpeughrepuhgauehpuehrpue",
                 "prix_unitaire_ht" => 8.50,
                 "promotion" => true,
                 "nom" => "item1"
             ],
             [
                "id" => 2,
                "reference" => "TY456UI",
                "image" => "/51Jv4pni-pL.jpg",
                "description" => "grjeioaghuioaeghpuiahpia",
                "prix_unitaire_ht" => 10.50,
                "promotion" => false,
                "nom" => "item2"
             ],
             [
                "id" => 3,
                "reference" => "FG789JK",
                "image" => "/51Jv4pni-pL.jpg",
                "description" => "ghroeahgpeughêuoghpegopi",
                "prix_unitaire_ht" => 95.6,
                "promotion" => true,
                "nom" => "item3"
             ]
        ];
    ?>

<div class="jumbotron">
    <h1 style="text-align : center ; color : blue";>Liste des libellés produits</h1>
</div>

    <ul class="list-group">
        <?php for ($i = 0;  $i < count($libellesProduits); $i++) { ?>
        <li class="list-group-item list-group-item-action"; style="font-size : 15px font-style:bold";>
            <?php echo $libellesProduits[$i]; ?>
        </li>    
        <?php } ?>        
    </ul>

    <ul>
        <?php foreach ($libellesProduits as $libelle) { ?>
        <li>
            <?php echo $libelle; ?>
        </li>
        <?php } ?>
    </ul>
    <div class="jumbotron">
        <h1 style="text-align : center ; color : blue";>Liste des produits</h1>
    </div>

        <div class = "container">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>REFERENCE</th>
                        <th>IMAGE</th>
                        <th>DESCRIPTION</th>
                        <th>PRIX UNITAIRE HT</th>
                        <th>PROMOTION</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($produits as $produit) { ?>
                    <tr>
                        <td><?php echo $produit['id']; ?></td>
                        <td><?php echo $produit['nom']; ?></td>
                        <td><?php echo $produit['reference']; ?></td>
                        <td><img src= "<?php echo $produit['image']; ?>"></td>
                        <td><?php echo $produit['description']; ?></td>
                        <td><?php echo $produit['prix_unitaire_ht']; ?></td>
                        <td><?php echo $produit['promotion']; ?></td>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>