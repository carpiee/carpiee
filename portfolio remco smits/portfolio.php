<?php

require_once './config/init.php';
$projecten = new Opdracht();
$opdrachten = $projecten->GetAllProjects();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>RS webdevelopment - Portfolio</title>
        <link rel="stylesheet" type="text/css" href="./css/tailwind.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    </head>

    <body class="bg-white text-gray-700">
        <style>
        #opdracht:hover #overlay {
            display: block;
        }

        </style>
        <?php include './inc/templates/header.php'; ?>
        <div class="container max-w-7xl bg-white mx-auto mb-20">
            <div class="px-4 pt-6 pb-2 border-b-2">
                <h1 class="font-semibold text-lg tracking-wide">Mijn portfolio</h1>
                <p class="text-gray-500 text-sm flex"><a class="mr-1" href="./home">Home</a> > <span
                        class="ml-1 text-sm text-gray-700">Portfolio</span>
                </p>
            </div>
            <div class="flex justify-center md:justify-start flex-wrap mt-10 px-4">
                <?php foreach($opdrachten as $opdracht): ?>
                <div class="mb-6 mx-6 md:w-64 w-full md:h-64 h-auto rounded shadow relative overflow-hidden"
                    id="opdracht">
                    <a href="./opdracht/<?= $opdracht->naam; ?>">
                        <div>
                            <img src="<?= $opdracht->foto1; ?>" alt="pedicurepraktijk papendrecht website gemaakt">
                        </div>
                        <div class="px-4 py-2 flex justify-center">
                            <span class="font-semibold text-md">
                                <?= $opdracht->naam; ?>
                            </span>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <script src="./js/app.js"></script>
    </body>

</html>
