<?php
include __DIR__ . './../config/DbConfig.php';
include __DIR__ . './../data/ProductDAO.php';
$product_dao = new ProductDAO();
$product_data = $product_dao->readAll(new DbConfig());
?>

<div class='overflow-x-hidden'>

    <!-- Hero section -->
    <section class="flex flex-col m-4 md:flex-row lg:flex-row xl:flex-row overflow-x-none">
        <div class="flex p-8 flex-col w-screen z-20">
            <div class="lg:m-16 md:m-12 m-10 font-poppins">
                <div class="text-white bg-gray-700 flex items-center font-medium w-96 text-sm px-2 py-1 text-center mr-2 mb-2">
                    <div class="flex justify-center items-center bg-gray-500/40 text-blue rounded-full text-lg w-6 h-6"><b>%</b></div>
                    <div class="ml-2"><b>20%</b> Discount for your <b>first purchase</b></div>
                </div>
                <h1 class="text-7xl">NEXT</h1>
                <h1 class="text-7xl text-blue">GENERATION</h1>
                <h1 class="text-7xl">NFT EXCHANGING.</h1>
            </div>
        </div>

        <div class="w-full flex justify-end">
            <img src='./../../public//assets//images//cat_paw_hovering_card.png' class=' right-0 hero-section-image' />
        </div>
    </section>

    <!-- Featured products section -->
    <section class="h-screen flex flex-col justify-center items-center p-8">
        <h2 class="text-5xl sm:text-6xl md:text-6xl lg:text-6xl xl:text-7xl mb-8">Featured products</h2>
        <form method="POST" class="flex space-x-4 sm:space-x-8 md:space-x-8 lg:space-x-8 xl:space-x-8">
            <?php
            for ($index = 0; $index < 3; $index++) { ?>
                <button value="<?php echo $product_data[$index]['id'] ?>" type="submit" name="view-product" class="z-10 font-medium bg-transparent hover:drop-shadow-lg rounded-lg hover:bg-gray-800 focus:bg-indigo-300">
                    <article class="card">
                        <img class="h-2/3 rounded-t-lg object-cover" src='<?php echo $product_data[$index]['product_image_location'] ?>' />
                        <div class="h-1/3 rounded-b-lg p-4">
                            <h2 class="mb-2 text-2xl text-gray-500"><?php echo $product_data[$index]['product_name'] ?></h2>
                            <p class="text-xl text-gray-300"><?php echo $product_data[$index]['product_price'] ?> ETH</p>
                        </div>
                    </article>
                </button>
            <?php } ?>
        </form>
    </section>

        <!-- New additions section -->
        <section class="h-screen flex flex-col justify-center items-center p-8">
        <h2 class="text-5xl sm:text-6xl md:text-6xl lg:text-6xl xl:text-7xl mb-8">New additions</h2>
        <form method="POST" class="flex space-x-4 sm:space-x-8 md:space-x-8 lg:space-x-8 xl:space-x-8">
            <?php
            for ($index = 3; $index < 6; $index++) { ?>
                <button value="<?php echo $product_data[$index]['id'] ?>" type="submit" name="view-product" class="z-10 font-medium bg-transparent hover:drop-shadow-lg rounded-lg hover:bg-gray-800 focus:bg-indigo-300">
                    <article class="card">
                        <img class="h-2/3 rounded-t-lg object-cover" src='<?php echo $product_data[$index]['product_image_location'] ?>' />
                        <div class="h-1/3 rounded-b-lg p-4">
                            <h2 class="mb-2 text-2xl text-gray-500"><?php echo $product_data[$index]['product_name'] ?></h2>
                            <p class="text-xl text-gray-300"><?php echo $product_data[$index]['product_price'] ?> ETH</p>
                        </div>
                    </article>
                </button>
            <?php } ?>
        </form>
    </section>

    <section class='h-screen flex flex-row items-center justify center'>
        <div class='m-20 z-20'>
            <h2 class='text-3xl lg:text-6xl'>What is an NFT?</h2>
            <p class='text-gray-400 text-sm lg:text-xl lg:w-2/3 mb-5'>
                Non-fungible-token <br />
                An NFT is a anything digital that is unique and cannot be replaced. NFTs can be bought, sold or even traded.
            </p>
            <form method="POST">
                <button type="submit" name="create-account" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get started</button>
            </form>
        </div>

        <a href='https://www.theverge.com/22310188/nft-explainer-what-is-blockchain-crypto-art-faq' target='_blank' class='z-[3]'>
            <div class='lg:w-60 lg:h-60 w-32 h-32 rounded-full border-2 flex flex-row justify-center items-center border-cyan-300 
                lg:-translate-x-74 lg:-translate-y-32 md:-translate-x-32 md:-translate-y-24 -translate-y-24 -translate-x-16 cursor-pointer'>Find Out More</div>
        </a>
    </section>

   