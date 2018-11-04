<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/11/18
 * Time: 15:32
 */
/*ini_set('display_errors', 1);*/
require_once('../Classes/Product.php');


if (isset($_POST['method']) && $_POST['method'] == 'create') {
    $msgError = "";
    if (empty($_POST['name'])) {
        $msgError = "<li>O campo nome deve ser preenchido</li>";
    }

    if (empty($_POST['description'])) {
        $msgError .= "<li>O campo descrição deve ser preenchido</li>";
    }

    echo json_encode([$msgError]);

    if (empty($msgError)) {
        $product = new Product();
        $product->setName($_POST['name']);
        $product->setDescription($_POST['description']);
        $product->setPrice($_POST['price']);
        $product->create();

    }
}

if (isset($_POST['method']) && $_POST['method'] == 'update') {

    $msgError = "";

    if (empty($_POST['name'])) {
        $msgError = "<li>O campo deve ser preenchido</li>";
    }

    if (empty($_POST['description'])) {
        $msgError .= "<li>O campo deve ser preenchido</li>";
    }
    echo json_encode([$msgError]);

    if (empty($msgError)) {
        $id = $_POST['id'];
        $product = new Product();
        $product->setName($_POST['name']);
        $product->setDescription($_POST['description']);
        $product->setPrice($_POST['price']);
        $product->update($id);
    }

}


if (isset($_GET['acao']) && $_GET['acao'] == 'delete') {

    $id = $_GET['id'];
    $product = new Product();
    $product->delete($id);
    header('Location: /teste/view/product/list-product.php');

}