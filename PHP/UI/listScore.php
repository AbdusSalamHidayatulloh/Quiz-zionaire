<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Quizzionaire | Scores!</title>

    <?php
    include "../DB/connect.php";
    ?>
</head>

<body class="overflow-x-hidden">
    <nav class="p-5 bg-blue-700 rounded-b-xl flex flex-row justify-between">
        <p class="text-2xl font-semibold text-white pl-5">Quizzionaire</p>
        <div id="navBar" class="text-white gap-8 h-full mt-1 pr-5 hidden md:block">
            <a href="MainMenu.html">Home</a>
            <a href="#" class="md:ml-8">List Nilai</a>
            <a href="Login.html" class="md:ml-8">Logout</a>
        </div>
        <div class="block md:hidden group">
            <svg id="hamburgerBtn" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                class="bi bi-list mt-1 cursor-pointer" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>

            <!-- This menu slides in from the right -->
            <div id="dropdownMenu"
                class="fixed top-0 right-0 w-60 h-full bg-blue-800 z-50 transform translate-x-full transition-transform duration-300">
                <ul class="p-4 gap-4">
                    <li><a href="MainMenu.html" class="text-white w-full h-15 hover:bg-white hover:text-blue-800 rounded-lg block p-2">Home</a></li>
                    <li><a href="#" class="text-white w-full h-15 hover:bg-white hover:text-blue-800 rounded-lg block p-2">List Nilai</a></li>
                    <li><a href="Login.html" class="text-white w-full h-15 hover:bg-white hover:text-blue-800 rounded-lg block p-2">Logout</a></li>
                </ul>
            </div>
        </div>

    </nav>
    <header class="flex flex-col justify-center items-center bg-gray-100 w-full h-50">
        <p class="text-3xl font-semibold">Scores!</p>
        <p>Let's see your past performance!</p>
    </header>
    <main class="p-5 gap-10 flex flex-col">
        <div>
            <!--!Ini sampai kebawah hanya untuk nunjukin semua tabelnya-->
            <div id="cardList" class=" flex md:flex-row flex-col flex-wrap justify-between gap-5">
                <div class="md:w-[47%] rounded-lg p-3 bg-gradient-to-b from-blue-700 to-blue-800">
                    <p class="text-white font-semibold text-xl">DB test_name</p>
                    <p class="text-white mb-6">Your Score: DB Score / 100</p>
                </div>
                <div class="md:w-[47%] rounded-lg p-3 bg-gradient-to-b from-blue-700 to-blue-800">
                    <p class="text-white font-semibold text-xl">DB test_name</p>
                    <p class="text-white mb-6">Your Score: DB Score / 100</p>
                </div>
                <div class="md:w-[47%] rounded-lg p-3 bg-gradient-to-b from-blue-700 to-blue-800">
                    <p class="text-white font-semibold text-xl">DB test_name</p>
                    <p class="text-white mb-6">Your Score: DB Score / 100</p>
                </div>
            </div>
        </div>
        <a href="MainMenu.html" class="bg-gradient-to-b p-5 from-sky-700 to-sky-800 rounded-xl font-semibold text-white text-center text-xl">Return to Main Menu</a>
    </main>
    <script src="../JS/Index.js"></script>
</body>

</html>