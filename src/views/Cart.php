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
                    <td class="text-center text-xl"><button class="border p-4">X</button></td>
                    <td class="text-center text-xl"><?php echo $cart_item['quantity'] * $cart_item['price'] ?> ETH</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="flex mt-4 items-center space-x-8 p-8">
        <div class="inline-flex justify-center items-center ml-auto text-2xl rounded bg-white text-gray-500 w-44 h-20">Total: </div>
        <button type="submit" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium w-44 h-20 rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">
            <span class="text-xl">Checkout</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" />
            </svg>
        </button>
        <button type="submit" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium w-44 h-20 rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">
            <span class="text-xl">Continue shopping</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</section>