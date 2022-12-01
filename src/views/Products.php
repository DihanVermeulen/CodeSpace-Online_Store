<div class="text-white">

    <?php
    include __DIR__ . '/../data.php';
    ?>
</div>


<section class="text-white">
    <header class="flex flex-row justify-center">
        <h1 class="text-2xl font-extrabold font-poppins">Pick. Choose. Buy.</h1>
    </header>
    <form method="POST">
        <main class="h-screen grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-4 text-gray-900">
            <?php
            foreach ($data as $item) { ?>
                <article class="card">
                    <img class="h-3/4 rounded-t-lg inline-block" src='https://picsum.photos/1350/1080' />
                    <div class="h-1/4 rounded-b-lg p-4">
                        <h2 class="mb-2"><?php echo $item['title'] ?></h2>
                        <p><?php echo $item['price'] ?> ETH</p>
                    </div>
                    <div class="card-popup flex flex-row justify-center text-white">
                        <button type="submit" class="font-extrabold">Add to cart</button>
                    </div>
                </article>
            <?php } ?>
        </main>
    </form>
</section>