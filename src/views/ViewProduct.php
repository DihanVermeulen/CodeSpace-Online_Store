<?php
if (isset($_POST['view-product'])) {
    $product_id = $_POST['view-product'];
}

include __DIR__ . './../config/DbConfig.php';
include __DIR__ . './../data/ProductDAO.php';

?>