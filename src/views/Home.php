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

    <section class='h-screen flex flex-row items-center justify-center'>
        <div class='m-20 z-20'>
            <h2 class='text-3xl lg:text-6xl'>What is an NFT?</h2>
            <p class='text-gray-400 text-md w-1/2 mb-5'>
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

    <section class='h-screen flex flex-col items-center justify-center'>
        <article class='flex flex-row hover:bg-gray-700 items-center p-3 rounded w-2/3 sm:w-1/2 md:w-1/2'>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#00E0FF" class="w-8 h-8">
                <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
            </svg>

            <div class='flex flex-col justify-start'>
                <h3 class='lg:text-2xl'>100% Secured</h3>
                <p class='text-gray-400 text-lg'>All of your payments are handled securely
                    so that you don’t have to worry!</p>
            </div>
        </article>

        <article class='flex flex-row hover:bg-gray-700 items-center p-3 rounded w-2/3 sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2'>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#00E0FF" class="w-8 h-8">
                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
            </svg>

            <div class='flex flex-col justify-start'>
                <h3 class='lg:text-2xl'>Rewards</h3>
                <p class='text-gray-400 text-lg'>
                    We want you to have the best, so we offer rewards
                    upon every successful purchase
                </p>
            </div>
        </article>

        <article class='flex flex-row hover:bg-gray-700 items-center p-3 rounded w-2/3 sm:w-1/2'>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#00E0FF" class="w-8 h-8">
                <path d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
            </svg>

            <div class='flex flex-col justify-start'>
                <h3 class='lg:text-2xl'>Balance Transfer</h3>
                <p class='text-gray-400 text-lg'>
                    Our payment systems work with etherium, so
                    that transfers can be as fast and efficient as possible
                </p>
            </div>
        </article>
    </section>

    <section class='flex flex-row justify-center items-center h-screen'>
        <article class='flex flex-col items-center w-2/3 lg:w-1/3 bg-gray-700/50 p-4 lg:p-12 rounded'>
            <h2 class='text-2xl lg:text-4xl'>Try our service now!</h2>
            <p class='text-md lg:text-lg text-gray-400 text-center mb-3 lg:mb-6'>
                We promise to provide the best service and customer
                support we can so that you don’t have
                to ever worry about a thing!
            </p>
            <form method="POST">
                <button type="submit" name="create-account" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign up meow!</button>
            </form>
        </article>
    </section>

    <div class="flex flex-col items-center">
        <a onclick="scrollToTop();return false" class="flex flex-col items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
            </svg><span>Back to top</span></a>
    </div>
</div>

<script>
   function scrollToTop() {
    if (document.body.scrollTop !== 0 || document.documentElement.scrollTop !== 0) {
        window.scrollBy(0, -100);
        requestAnimationFrame(scrollToTop);
    }
}
</script>