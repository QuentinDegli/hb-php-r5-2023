<?php 
require_once 'layout/header.php';
require_once 'data/products.php'
?>

<h1>Recherche de produits</h1>

<form method="GET">
    <label for="searchTerm">Entrez votre recherche :</label>
    <input type="text" name="searchTerm" id="searchTerm" placeholder="Saisissez votre texte">
    <button type="submit">Rechercher</button>
</form>

<?php
var_dump($_GET);

if(isset($_GET['searchTerm'])) {
    $searchTerm = $_GET['searchTerm'];

    $results = array_filter($products, fn ($el) => str_contains($el['name'], $searchTerm));

    if ($results === false)
    {
        echo "Aucun résultat trouvé";
    }
    else
    {
        var_dump($results);
    }
}
    /*
    $productsNames = array_column($products, 'name');
    $nameKey = array_search($searchTerm, $productsNames);

    if ($nameKey === false) {
        echo "aucun résultat trouvé";
    } else {
        var_dump($products[$nameKey]);
    }
}
*/
?>

<?php require_once 'layout/footer.php'; ?>