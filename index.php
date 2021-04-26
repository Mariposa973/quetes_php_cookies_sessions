<?php
session_start();
if (!empty($_POST)) {
    $_SESSION = array(
        'loginname' => $_POST['loginname'],
        'is_connected' => true
    );
};

if(!empty($_GET["add_to_cart"])) {
    $id=$_GET['add_to_cart'];
    if(!isset($_SESSION["panier"])) { 
        $_SESSION['panier']=[];
    }
    if(!isset($_SESSION["panier"][$id])){
    $_SESSION['panier'][$id] = array(
        'quantity' => 1
    );
    }else{
        $_SESSION['panier'][$id]['quantity'] += 1;
    }

}

require 'inc/data/products.php';
require 'inc/head.php';
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>