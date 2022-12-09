<?php
include __DIR__ . './../config/DbConfig.php';
include __DIR__ . './../data/ProductDAO.php';
$product_dao = new ProductDAO();
$product_data = $product_dao->readAll(new DbConfig());
?>

<section class="p-8">
    <header class="flex w-screen">
        <article class="flex flex-col justify-center items-center w-1/2">
            <h1 class="text-4xl mb-4">Beautiful NFTs <br> for everyone</h1>
            <p class="text-xl text-gray-500 mb-4">Take a look at our NFTs we have for sale</p>
            <a href="#explore" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Explore</a>
        </article>
        <div class="flex flex-col justify-center items-center w-1/2">
            <img class="w-96 rounded-lg" src='./../../public/assets/images/shop_page_header_image.png' />
        </div>
    </header>

   
</section>