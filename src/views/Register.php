<?php
include __DIR__ . './../model/User.php';
include __DIR__ . './../data/UserDAO.php';
include __DIR__ . './../config/DbConfig.php';
?>

<section class="flex flex-col justify-center items-center h-96">
    <h1 class="text-4xl">Sign Up</h1>
    <form method="POST">
        <p class="text-gray-500 mb-8">or <button type="submit" name="login-tab" class="text-blue">login</button></p>
    </form>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" class="w-1/3">
        <div class="inline-flex justify-between w-full mb-4">
            <div class="relative">
                <input type="text" id="name" name="name-input" class="block rounded-t-lg px-2.5 pb-2.5 pt-3 w-full text-lg text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="name" class="absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-6 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
            </div>
            <div class="relative">
                <input type="text" id="surname" name="surname-input" class="block rounded-t-lg px-2.5 pb-2.5 pt-3 w-full text-lg text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="surname" class="absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-6 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Surname</label>
            </div>
        </div>
        <div class="relative mb-4">
            <input type="text" id="email" autofocus required name="email-input" class="block rounded-t-lg px-2.5 pb-2.5 pt-3 w-full text-lg text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="email" class="absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-6 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email*</label>
        </div>
        <div class="relative mb-4">
            <input type="password" id="password" required name="password-input" class="block rounded-t-lg px-2.5 pb-2.5 pt-3 w-full text-lg text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="password" class="absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-6 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password*</label>
        </div>
        <?php
        if (isset($_POST['register'])) {
            $name = $_POST['name-input'];
            $surname = $_POST['surname-input'];
            $email = $_POST['email-input'];
            $password = $_POST['password-input'];

            $user_object = new User($name, $surname, $email, $password);
            $user = $user_object->createUser();

            // Validates user data from form
            if ($user_object::validateUserData($user)) {
                $verified_user = $user;
                $verified_user['user_password'] = $user_object::hashPassword($password);
                UserDAO::postUserToDb(new DbConfig(), $verified_user);
                echo "<p>Account created, you can now login!</p>";
            } else {
                echo "<p class='text-red-500'>Problem with email or password</p>";
            };
        }
        ?>
        <button type="submit" name="register" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign Up</button>
    </form>
</section>