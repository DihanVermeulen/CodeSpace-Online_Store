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

  