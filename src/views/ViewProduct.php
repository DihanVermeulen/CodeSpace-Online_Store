<?php
include __DIR__ . './../config/DbConfig.php';
include __DIR__ . './../data/ProductDAO.php';

if (isset($_POST['view-product'])) {
    $product_id = $_POST['view-product'];
    $product_dao = new ProductDAO();
    $product_data = $product_dao->readByID(new DbConfig(), $product_id);
}
?>
<section class="flex p-8">
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
                <button type="submit" name="add-to-cart" class="w-28 mr-8 h-12 inline-flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 px-5 py-2.5 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base px-1 text-center">Add to cart</button>
                <div class="flex flex-col justify-items-start">
                    <label for="quantity" class="block mb-2 text-sm font-medium">QTY</label>
                    <input type="number" name="quantity" id="quantity" min='1' max='9' value='1' class="bg-gray-50 w-1/3 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-3">
                    <input class="hidden" name="id" type="text" value="<?php echo $product_data->id ?>">
                </div>
            </form>
        </div>
    </aside>
</section>