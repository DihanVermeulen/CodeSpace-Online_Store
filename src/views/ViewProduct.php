<?php
include __DIR__ . './../config/DbConfig.php';
include __DIR__ . './../data/ProductDAO.php';

if (isset($_POST['view-product'])) {
    $product_id = $_POST['view-product'];
    $product_dao = new ProductDAO();
    $product_data = $product_dao->readByID(new DbConfig(), $product_id);
}

include __DIR__ . './../config/DbConfig.php';
include __DIR__ . './../data/ProductDAO.php';

?>