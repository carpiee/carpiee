<?php
if (empty($_GET)) {
    require_once './config/init.php';
}
$headers = new Header();
$menu = new Menu();
$headerContent = $headers->GetHeader();
$header = explode('+', $headerContent->info);

$menuContent = $menu->GetAllMenuContent();

?>
<style>
.navMenu {
    background: linear-gradient(99deg,
            rgba(102, 126, 234, 1) 0%,
            rgba(118, 75, 162, 1) 100%);
}

</style>
<div class="h-full w-full relative block" style="
    background: linear-gradient(
      90deg,
      rgba(102, 126, 234, 0.6) 0%,
      rgba(118, 75, 162, 0.6) 100%
    );
  ">
    <nav class="fixed w-full z-20 top-0 text-white" id="navbar">
        <div class="container max-w-7xl mx-auto">
            <div class="flex justify-between py-2">
                <div id="Naam" class="flex items-center">
                    <h1 class="font-bold tracking-widest text-shadow">
                        <a class="hover:no-underline text-xl lg:text-2xl italic"
                            href="https://rswebdevelopment.nl/home">RS<span
                                class="ml-2 text-lg not-italic">webdevelopment</span></a>
                    </h1>
                </div>
                <div
                    class="inline-flex justify-center items-center space-x-12 hidden lg:inline-flex font-semibold tracking-wide">
                    <span class="hover:text-gray-500 hover:no-underline"><a class="hover:no-underline"
                            href="https://rswebdevelopment.nl/home">Home</a></span>
                    <span class="hover:text-gray-500 hover:no-underline"><a class="hover:no-underline"
                            href="https://rswebdevelopment.nl/overmij">Over mij</a></span>
                    <span class="hover:text-gray-500 hover:no-underline"><a class="hover:no-underline"
                            href="https://rswebdevelopment.nl/portfolio">Portfolio</a></span>
                    <span class="hover:text-gray-500 hover:no-underline"><a class="hover:no-underline"
                            href="https://rswebdevelopment.nl/contact">Contact</a></span>
                    <a class="flex px-3 py-1 bg-indigo-500 shadow-lg rounded-full border-2 border-transparent hover:bg-transparent hover:border-indigo-500 hover:no-underline text-white"
                        href="offerte" class="font-semibold">Maak een
                        offerte</a>
                </div>
                <div class="flex items-center lg:hidden">
                    <button
                        class="flex items-center py-2 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none"
                        id="hamburger">
                        <!-- <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg> -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button id="close"
                        class="hidden flex items-center py-2 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="mega-menu hidden mt-15 mb-16 fixed w-full max-w-7xl lg:w-0 h-full sm:mb-0 shadow-xl z-10">
        <div
            class="lg:hidden container mx-auto w-full text-left flex flex-wrap overflow-y-auto overflow-x-hidden justify-between bg-white rounded-b-lg shadow-lg">
            <div class="grid sm:grid-cols-2 grid-cols-1 gap-10 py-10 px-6">
                <?php foreach ($menuContent as $menuct) : ?>
                <a class="hover:no-underline" href="<?= $menuct->link; ?>">
                    <div class="flex items-start">
                        <span class="h-9 w-9 px-2 py-2 mr-4 mt-2 rounded-lg bg-indigo-500">
                            <?= $menuct->foto; ?>
                        </span>
                        <div>
                            <h3 class="font-semibold text-xl text-gray-600 text-bold hover:text-gray-400">
                                <span><?= $menuct->naam; ?></span>
                            </h3>
                            <p class="text-gray-500 text-sm">
                                <?= $menuct->inhoud; ?>
                            </p>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="px-6 py-4 w-full bg-gray-100">
                <h2 class="font-bold text-md">Uw website op maat!</h2>
                <p class="text-sm text-gray-5">
                    Wij maken uw website op maat voor alle apparaten na u wens.
                </p>
            </div>
        </div>
    </div>

    <div
        class="container max-w-6xl flex xl:justify-between justify-center items-center flex-wrap-reverse text-white w-full mx-auto lg:px-6 px-4 md:py-56">
        <div class="mt-8">
            <h2 class="mb-2 md:text-5xl text-3xl font-semibold">
                <?= $headerContent->title; ?>
            </h2>
            <div class="mb-8 lg:text-lg max-w-md space-y-3">
                <?php foreach ($header as $head) : ?>
                <span class="flex items-center text-gray-200">
                    <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                    <span><?= $head; ?></span>
                </span>
                <?php endforeach; ?>
            </div>
            <div class="flex items-center mb-10">
                <span class="flex items-center px-3 py-2 bg-indigo-500 shadow-lg rounded-full hover:bg-gray-700">
                    <a class="hover:no-underline hover:text-white" href="<?= $headerContent->link1; ?>"
                        class="font-semibold"><?= $headerContent->link1_naam; ?></a>
                </span>

                <a class="hover:no-underline px-4 font-semibold text-gray-700 hover:text-white"
                    href="<?= $headerContent->link2; ?>"><?= $headerContent->link2_naam; ?></a>
            </div>
        </div>
        <div class="lg:ml-4 mt-24 lg:mt-0 opacity-75">
            <img src="https://rswebdevelopment.nl/img/opmaat.svg" alt="Maak een offerte"
                class="h-auto w-full max-w-lg p-2" />
        </div>
    </div>
</div>
