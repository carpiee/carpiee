<?php

require_once '../config/init.php';

$opdrachten = new Opdracht();

if (isset($_GET)) {
    $naam = str_replace('opdracht/', '', $_GET['opdracht']);
    $opdracht = $opdrachten->GetOpdrachtInfo($naam);
    $alldone = explode('+', $opdracht->gedaan);
    if (!$opdracht) {
        header('location: https://rswebdevelopment.nl/portfolio');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>Opdracht - <?= $naam;  ?></title>
        <link rel="stylesheet" type="text/css" href="../css/tailwind.css">
        <link rel="stylesheet" type="text/css" href="../css/mockup.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    </head>

    <body class="text-gray-700 bg-white">
        <?php include_once '../inc/templates/header.php'; ?>
        <div class="container max-w-7xl mx-auto">
            <div class="px-4 py-6">
                <h1 class="text-lg tracking-wide font-semibold"><?= $naam ?></h1>
                <p class="flex text-gray-500 text-sm"><a class="mr-2" href="./home">Home</a>><span class="mx-2"><a
                            href="https://rswebdevelopment.nl/portfolio">Portfolio</a>
                        > <span class="text-gray-700"><?= $naam ?></span></span>
                </p>
            </div>
            <div class="px-10 md:0 mt-24 mb-10 max-w-xl mx-auto">
                <div class="device-collection">
                    <div class="phone-container">
                        <div class="device phone">
                            <img src="<?= $opdracht->foto3; ?>">
                        </div>
                    </div>
                    <div class="tablet-container">
                        <div class="device tablet">
                            <img src="<?= $opdracht->foto2; ?>">
                        </div>
                    </div>
                    <div class="device desktop">
                        <img src="<?= $opdracht->foto1; ?>">
                    </div>
                </div>
            </div>


            <div class="flex justify-center items-center">
                <a class="rounded-lg bg-indigo-500 px-4 py-2 text-white" href="<?= $opdracht->url; ?>" target="_blank">
                    Bekijk de website
                </a>

            </div>
            <div class="flex justify-center">
                <div class="grid md:grid-cols-2 grid-cols-1 mt-20">
                    <div class="px-6">
                        <h1 class="text-xl font-semibold pb-4">Wat hebben we gedaan!?</h1>
                        <?php
                    if ($opdracht->gedaan != '') :
                        foreach ($alldone as $gedaan) :
                    ?>
                        <p class="mb-2 text-sm flex items-center">
                            <svg class="mr-2 text-green-400 h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                            <?= $gedaan; ?>
                        </p>
                        <?php
                        endforeach;
                    endif;
                    ?>
                    </div>
                    <div class="px-6 md:mt-0 mt-6">
                        <h1 class="text-xl font-semibold pb-4"><?= $naam; ?></h1>
                        <p class="text-sm"><?= $opdracht->info; ?></p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mb-20" id="mockups">

            </div>
        </div>
        <script src="../js/app.js"></script>
    </body>

</html>
