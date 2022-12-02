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
            break;
        }
    }

    // If item does not exist in cart then just push to array
    if (!$cart_item_exists) {
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

<section>
    <table class="w-full">
        <thead class="border-b">
            <tr>
                <th>Description</th>
                <th>Quantity</th>
                <th>Remove</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_SESSION['cart'] as $cart_item) { ?>
                <tr class="border-b">
                    <td class="flex justify-center items-center p-4 text-3xl"><img class="w-44 mr-8" src='<?php echo $cart_item['image'] ?>' alt="NFT" />
                        <?php echo $cart_item['title']
                        ?></td>
                    <td class="text-center text-xl"><?php echo $cart_item['quantity'] ?></td>
                    <td class="text-center text-xl"><button>X</button></td>
                    <td class="text-center text-xl"><?php echo $cart_item['quantity'] * $cart_item['price'] ?> ETH</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>