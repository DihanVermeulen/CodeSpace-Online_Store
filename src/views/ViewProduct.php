<?php
include __DIR__ . './../config/DbConfig.php';
include __DIR__ . './../data/ProductDAO.php';

if (isset($_POST['view-product'])) {
    $product_id = $_POST['view-product'];
    $product_dao = new ProductDAO();
    $product_data = $product_dao->readByID(new DbConfig(), $product_id);
}

// Checks if user is logged in and disables add to cart button
$is_logged_in = false;
if (isset($_COOKIE['logged_in_as'])) {
    $is_logged_in = true;
}
?>

<section class="flex flex-col sm:flex-row p-8">
    <main class="w-1/4 mr-4">
        <img class="w-full rounded-lg" src='<?php echo $product_data->product_image_location ?>' />
    </main>
    <aside class="w-full text-left">
        <span class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Best Seller</span>
        <span class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Recommended</span>
        <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Brand New</span>
        <h1 class="text-6xl my-8"><?php echo $product_data->product_name ?></h1>
        <div class="border w-full p-4 flex flex-col">
            <p class="text-gray-300 text-xl font-light mb-2">Current price</p>
            <div class="inline-flex items-baseline">
                <p class="text-3xl mr-4"><?php echo $product_data->product_price ?> ETH</p>
                <span class="text-gray-300 font-light mb-8">R<?php echo $product_data->product_price * 22399.03 ?></span>
            </div>
            <form method="POST" class="flex items-end">
                <button type="submit" <?php echo $is_logged_in ? "" : "disabled" ?> name="add-to-cart" <?php $is_logged_in ? "" : "disabled" ?> class="w-28 mr-8 h-12 inline-flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 px-5 py-2.5 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base px-1 text-center">Add to cart</button>
                <div class="flex flex-col justify-items-start">
                    <label for="quantity" class="block mb-2 text-sm font-medium">QTY</label>
                    <input type="number" name="quantity" id="quantity" min='1' max='9' value='1' class="bg-gray-50 w-1/3 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-3">
                    <input name="id" type="hidden" value="<?php echo $product_data->id ?>">
                    <input name="title" type="hidden" value="<?php echo $product_data->product_name ?>">
                    <input name="price" type="hidden" value="<?php echo $product_data->product_price ?>">
                    <input name="image" type="hidden" value="<?php echo $product_data->product_image_location ?>">
                </div>
            </form>
            <?php if (!$is_logged_in) { ?>
                <p>Please log in to add items to cart</p>
            <?php } ?>
        </div>
    </aside>
</section>