<?php
include __DIR__ . './../config/DbConfig.php';
include __DIR__ . './../data/ProductDAO.php';
$product_dao = new ProductDAO();
$product_data = $product_dao->readAll(new DbConfig());
?>

<section class="p-8">
    <header class="flex flex-col sm:flex-row items-center sm:items-start w-full">
        <article class="flex flex-col justify-center items-center w-1/2 mb-8">
            <h1 class="text-4xl mb-4">Beautiful NFTs <br> for everyone</h1>
            <p class="text-xl text-gray-500 mb-4">Take a look at our NFTs we have for sale</p>
            <a href="#explore" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Explore</a>
        </article>
        <div class="flex justify-center items-center w-2/3">
            <img class="w-full rounded-lg sm:w-96" src='./../../public/assets/images/shop_page_header_image.png' />
        </div>
    </header>

    <section id='explore' class="flex justify-center items-center h-screen">
        <div class="flex w-full m-8 border border-gray-500 rounded-lg">

            <div class=" flex flex-col bg-red-300 justify-center p-8 w-1/3">
                <h1 class="text-5xl mb-4">Explore our <br> NFTs</h1>
                <p class="text-xl text-gray-500 mb-4">Powered by <strong class="text-white">Whisker Exchange</strong></p>
                <form method="POST">
                    <button type="submit" name="products-tab" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">See more</button>
                </form>
            </div>

            <div class="w-2/3 p-8">
                <form method="POST" class="flex space-x-4 sm:space-x-8 md:space-x-8 lg:space-x-8 xl:space-x-8">
                    <?php
                    for ($index = 0; $index < 3; $index++) { ?>
                        <button value="<?php echo $product_data[$index]['id'] ?>" type="submit" name="view-product" class="z-10 font-medium bg-transparent hover:drop-shadow-lg rounded-lg hover:bg-gray-800 focus:bg-indigo-300">
                            <article class="card">
                                <img class="h-2/3 rounded-t-lg object-cover" src='<?php echo $product_data[$index]['product_image_location'] ?>' />
                                <div class="h-1/3 rounded-b-lg p-4">
                                    <h2 class="mb-2 text-2xl"><?php echo $product_data[$index]['product_name'] ?></h2>
                                    <p class="text-xl text-gray-300"><?php echo $product_data[$index]['product_price'] ?> ETH</p>
                                </div>
                            </article>
                        </button>
                    <?php } ?>
                </form>
            </div>

        </div>
    </section>
</section>