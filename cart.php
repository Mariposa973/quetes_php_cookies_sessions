<?php session_start();

if (!empty($_GET["remove_to_cart"])) {
    $id = $_GET['remove_to_cart'];
    $_SESSION['panier'][$id]['quantity'] -= 1;
}
require 'inc/data/products.php';
require 'inc/head.php'; ?>
<h1> Votre Panier </h1>
<section class="cookies container-fluid">
    <?php

    if (empty($_SESSION["panier"])) {
        echo "Votre panier est vide.";
    } else { ?>
        <div class="row">
            <?php foreach ($_SESSION["panier"] as $id => $cookie) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $catalog[$id]['name']; ?></h3>
                            <p>Quantité : <?= $_SESSION["panier"][$id]['quantity']; ?></p>
                            <a href="?remove_to_cart=<?= $id; ?>" class="btn btn-warning">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Enlever 1 cookie
                            </a>
                        </figcaption>
                    </figure>
                </div>
        <?php }
        }
        ?>
        </div>
</section>
<?php require 'inc/foot.php' ?>