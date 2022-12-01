    <?php
    include __DIR__ . '/../data.php';
    include __DIR__ . './../config/DbConfig.php';
    include __DIR__ . './../data/ProductDAO.php';
    $product_dao = new ProductDAO();
    $product_data = $product_dao->readAll(new DbConfig());
    ?>

    <section class="p-8">
        <header class="flex flex-row justify-center">
            <h1 class="text-4xl font-extrabold font-poppins mb-8">Pick. Choose. Buy.</h1>
        </header>
        <form method="POST">
            <main class="h-screen grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 text-gray-900">
                <?php
                foreach ($product_data as $item) { ?>
                    <button value="<?php echo $item['id'] ?>" type="submit" name="view-product" class="z-10 font-medium bg-transparent hover:drop-shadow-lg rounded-lg hover:bg-gray-800 focus:bg-indigo-300">
                        <article class="card">
                            <img class="h-2/3 rounded-t-lg object-cover" src='<?php echo $item['product_image_location'] ?>' />
                            <div class="h-1/3 rounded-b-lg p-4">
                                <h2 class="mb-2 text-2xl"><?php echo $item['product_name'] ?></h2>
                                <p class="text-xl"><?php echo $item['product_price'] ?> ETH</p>
                            </div>
                        </article>
                    </button>
                <?php } ?>
            </main>
        </form>
    </section>