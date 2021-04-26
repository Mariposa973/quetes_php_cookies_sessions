<?php
$cookieName = $_POST['name'];

function creationPanier()
{
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
        $_SESSION['panier']['cookieName'] = array();
        $_SESSION['panier']['qteProduit'] = array();
        $_SESSION['panier']['prixProduit'] = array();
    }
    return true;
}

function ajouterArticle($cookieName, $qteProduit, $prixProduit)
{

    //Si le panier existe
    if (creationPanier()) {
        //Si le produit existe déjà on ajoute seulement la quantité
        $positionProduit = array_search($cookieName,  $_SESSION['panier']['cookieName']);

        if ($positionProduit !== false) {
            $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit;
        } else {
            //Sinon on ajoute le produit
            array_push($_SESSION['panier']['cookieName'], $cookieName);
            array_push($_SESSION['panier']['qteProduit'], $qteProduit);
            array_push($_SESSION['panier']['prixProduit'], $prixProduit);
        }
    } else
        echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}