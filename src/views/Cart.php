<?php
// Runs when item has been selected to be added to cart
if (isset($_POST['add-to-cart'])) {
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];
    $title = $_POST['title'];
    $image_location = $_POST['image'];
    $price = $_POST['price'];
    $cart_item_exists = false;

    // Checks if item already exists and concatenates that quantity  
    // to the already existing cart item's quantity
    foreach ($_SESSION['cart'] as $index => $cart_item) {
        if ($cart_item['id'] == $id) {
            $_SESSION['cart'][$index]['quantity'] += $quantity;
            $cart_item_exists = true;
            echo "items exists";
            echo $cart_item['quantity'];
            break;
        }
    }

    // If item does not exist in cart then just push to array
    if (!$cart_item_exists) {
        echo "item does not exist";
        array_push($_SESSION['cart'], array(
            "id" => $id,
            "quantity" => $quantity,
            "title" => $title,
            "price" => $price,
            "image" => $image_location
        ));
    }
}
?>

