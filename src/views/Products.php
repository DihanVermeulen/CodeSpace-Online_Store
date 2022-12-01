<div class="text-white">

    <?php
    include __DIR__ . '/../data.php';
    ?>
</div>


<section class="text-white p-8">
    <header class="flex flex-row justify-center">
        <h1 class="text-2xl font-extrabold font-poppins">Pick. Choose. Buy.</h1>
    </header>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <main class="h-screen grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-4 text-gray-900">
            <?php
            foreach ($data as $item) { ?>
                <button value="<?php echo $item['id'] ?>" type="submit" name="view-product" class="z-10 font-medium bg-transparent rounded-lg hover:bg-gray-800 focus:bg-gray-800">
                    <article class="card">
                        <img class="h-3/4 rounded-t-lg inline-block" src='https://picsum.photos/1350/1080' />
                        <div class="h-1/4 rounded-b-lg p-4">
                            <h2 class="mb-2"><?php echo $item['title'] ?></h2>
                            <p><?php echo $item['price'] ?> ETH</p>
                        </div>
                    </article>
                </button>
            <?php } ?>
        </main>
    </form>
</section>