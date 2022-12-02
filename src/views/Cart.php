<?php
if (isset($_POST['add-to-cart'])) {

    array_push($_SESSION['cart'], array(
        "id" => $_POST['id'],
        "quantity" => $_POST['quantity']
    ));

    print_r($_SESSION['cart']);
}
?>
