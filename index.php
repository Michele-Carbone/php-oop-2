<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/utilitis/Functions.php';


$user = new User('Ciccio', 'Pasticcio', 'ciccio.pasticcio@email.com', '65');
$premium = new PremiumUser('Roberto', 'Norberti', 'roberto.norberti@email.com', '65', 3);
$product = new Product('Computer gaming', 'Asus', 1000.00, 'Grigio');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>Dati Utente:</h2>
        <div><?= 'Il signor ' . $user->getFirstName() . ' ' . $user->getLastName(); ?></div>
        <div>età: <?= $user->getAge(); ?></div>
        <div><?= 'email: ' . $user->getEmail() ?></div>
    </div>

    <div>
        <h2>Informazioni prodotto</h2>
        <div>Scelta del prodotto selezionato</div>
        <div>Prodotto: <?= $product->getName(); ?></div>
        <div>Marca: <?= $product->getBrand(); ?></div>
        <div>Colore: <?= $product->getColor(); ?></div>
        <div>Prezzo: €<?= finalPrice($product->getPrice(), 0); ?></div>
    </div>
    <div>
        <h2>Risultati della selezione</h2>
        <div><?= $premium->getFirstName() . ' ' . $premium->getLastName(); ?></div>
        <div><?= $premium->getEmail() ?></div>
        <div>Livello utente: <?= $premium->getPremiumLevel() ?></div>
        <div>Sconto premium del <?= $premium->getDiscount() ?>%</div>
        <div>Sconto Cliente: <?= $premium->setDiscountAge(); ?></div>
    </div>
    <div>
        <h2>Costo del prodotto</h2>
        <div>Prodotto: <?= $product->getName(); ?></div>
        <div>Colore: <?= $product->getColor(); ?></div>
        <div>Costo totale: €<?= finalPrice($product->getPrice(), $premium->getDiscount(), $premium->setDiscountAge()); ?></div>

    </div>
</body>

</html>