<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    <script src="https://kit.fontawesome.com/4e581bf954.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/styles/styles.css">
    <title>Whisker Exchange</title>
</head>

<body>
    <nav class="flex items-center bg-transparent border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <img src="public/assets/images/logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <button data-collapse-toggle="navbar" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto z-10" id="navbar">
                <!-- <ul class="flex flex-col mt-20 absolute right-0 md:static lg:static bg-white md:bg-transparent md:mr-8 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700" id="tabs" data-tabs-toggle="#tab-content" role="tablist">
                    <li>
                        <a id="home-tab" data-tabs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false" class="block py-2 pl-3 pr-4 text-gray-500 md:text-white rounded md:border-0 hover:text-blue-300 md:p-0">
                            <i class="fa-sharp fa-solid fa-house"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a id="products-tab" data-tabs-target="#products" type="button" role="tab" aria-controls="products" aria-selected="false" class="block py-2 pl-3 pr-4 text-gray-500 md:text-gray-300 rounded md:border-0 hover:text-blue-300 md:p-0">
                            <i class="fa-sharp fa-solid fa-bag-shopping"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a id="login-tab" data-tabs-target="#login" role="tab" aria-controls="login" aria-selected="false" class="block py-2 pl-3 pr-4 text-gray-500 md:text-gray-300 rounded md:border-0 hover:text-blue-300 md:p-0">
                            <i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i>
                            <span>Login</span>
                        </a>
                    </li>
                </ul> -->
                <form method="POST">
                    <ul class="flex flex-col mt-20 z-50 absolute right-0 md:static lg:static bg-white md:bg-transparent md:mr-8 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700" id="tabs" data-tabs-toggle="#tab-content" role="tablist">
                        <li>
                            <button type="submit" name="home-tab" class="block py-2 pl-3 pr-4 text-gray-500 md:text-white rounded md:border-0 hover:text-blue-300 md:p-0">Home</button>
                        </li>
                        <li>
                            <button type="submit" name="products-tab" class="block py-2 pl-3 pr-4 text-gray-500 md:text-white rounded md:border-0 hover:text-blue-300 md:p-0">Products</button>
                        </li>
                        <li>
                            <button type="submit" name="login-tab" class="block py-2 pl-3 pr-4 text-gray-500 md:text-white rounded md:border-0 hover:text-blue-300 md:p-0">Login</button>
                        </li>
                    </ul>
                </form>
            </div>

        </div>
    </nav>

    <div class="w-full h-full z-0" id="tab-content">

        <?php
        if (isset($_POST['home-tab'])) {
            include_once('src/views/Home.php');
        } else if (isset($_POST['products-tab'])) {
            include_once('src/views/Products.php');
        } else if (isset($_POST['login-tab'])) {
            include_once('src/views/Login.php');
        } else if(isset($_POST['view-product-tab'])) {
            include_once('src/views/ViewProduct.php');
        }
         else {
            include_once('src/views/Home.php');
        }
        ?>
    </div>
</body>

</html>