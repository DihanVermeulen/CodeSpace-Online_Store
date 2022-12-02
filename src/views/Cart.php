<?php
if (isset($_POST['add-to-cart'])) {
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];
    $cart_item_exists = false;

    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] == $id) {
            $quantity += $cart_item['quantity'];
            $cart_item_exists = true;
            array_push($_SESSION['cart'], array(
                "id" => $id,
                "quantity" => $quantity
            ));
            echo "items exists";
            echo $quantity;
            break;
        }
    }

    if(!$cart_item_exists) {
        echo "item does not exist";
        array_push($_SESSION['cart'], array(
            "id" => $id,
            "quantity" => $quantity
        ));
    }

}
?>

