<?php
include __DIR__ . './../config/DbConfig.php';
include __DIR__ . './../data/ProductDAO.php';

if (isset($_POST['view-product'])) {
    $product_id = $_POST['view-product'];
    $product_dao = new ProductDAO();
    $product_data = $product_dao->readByID(new DbConfig(), $product_id);
    print_r($product_data);
}
?>
<section class="flex p-8">
    <main class="w-1/4 mr-4">
        <img class="w-full rounded-lg" src='<?php echo $product_data->product_image_location ?>' />
    </main>
    <aside class="w-full text-left">
        <h1 class="text-4xl"><?php echo $product_data->product_name ?></h1>
    </aside>
</section>