<!--
    RS webdevelopment copyright.
    Geen rechten om delen van de website te gebruiken.
 -->
<?php
require_once './config/init.php';
$_SESSION['loggedin'] = false;
$cms = new Cms();
$cmscontent = $cms->GetHomePage();
$terwerk = $cms->GetHomePageContent();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>RS webdevelopment - Homepage</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./css/tailwind.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
    </head>

    <body class="bg-white text-gray-700">
        <style>
        .editable:hover {
            border: 1px solid blue;
        }

        </style>
        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : ?>
        <section class="flex flex-col justify-between bg-gray-700 fixed right-0 h-screen w-full max-w-xs z-30">
            <div>
                <div class="flex justify-end w-full">
                    <span class="px-4 py-2 text-white flex items-center justify-center border">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                            </path>
                        </svg>
                    </span>
                    <span class="px-4 py-2 text-white inline-flex items-center justify-center border">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="px-4 py-2 text-white flex items-center justify-center border">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
                <div class="flex justify-center text-white">
                    <h1 class="text-lg">Bewerk u pagina</h1>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">Upload
                    file</button>
            </div>

            <div class="flex justify-center px-4 space-x-4 py-2">
                <button type="button" id="edit" class="btn btn-info">Bewerk</button>
                <button id="save" class="px-4 py-2 bg-white">Opslaan</button>
                <button id="view" class="px-4 py-2 bg-white">View</button>
            </div>
        </section>
        <div id="uploadModal" class="modal fade" id="modal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">File upload form</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Form -->
                        <form method="post" enctype="multipart/form-data" id="fileUploadForm">
                            File: <input name="myfile" id="myfile" type="file" />
                            <input type="button" name="submitBtn" id="btn_upload" value="Upload" />
                        </form>


                        <!-- Preview-->
                        <div id='preview'></div>
                    </div>

                </div>

            </div>
        </div>
        <?php endif; ?>

        <?php
    if ('1' == '1') {
    ?>
        <div id="maggeeditword">
            <?php require_once './inc/templates/header.php';; ?>
            <section id="info" class="container mx-auto px-6 p-10">
                <h2 class="md:text-4xl text-3xl font-bold text-center text-gray-800 mb-8">
                    Hoe gaan wij te werk?
                </h2>
                <?php foreach ($terwerk as $werkinfo) : ?>
                <div id="tewerkgaan_info" class="mb-20">
                    <div id="info_item" class="flex items-center flex-wrap">
                        <div id="text_content" class="w-full md:w-1/2 md:px-6">
                            <h3 class="mb-1 text-indigo-500 text-xl font-bold tracking-widest">
                                <?= $werkinfo->kop; ?>
                            </h3>
                            <h4 class="text-2xl text-gray-800 font-medium mb-3"><?= $werkinfo->title; ?></h4>
                            <p class="text-gray-600 mb-3">
                                <?= $werkinfo->content; ?>
                            </p>
                            <a class="inline-flex items-center text-indigo-500 hover:no-underline font-bold tracking-widest"
                                href="<?= $werkinfo->link; ?>">
                                lees meer
                                <span>
                                    <svg class="h-6 w-6 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div id="content_img" class="w-full flex justify-center md:w-1/2">
                            <?= $werkinfo->plaatje; ?>
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>

            </section>
            <?php require_once './inc/templates/footer.php'; ?>
        </div>
        <?php
        // echo $cmscontent->content;
    } else {
        echo $cms->GetLandingPage()->content;
    }

    ?>

        <script src="./js/app.js"></script>
        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : ?>
        <script src="./js/admin.js"></script>
        <?php endif; ?>
        <script>
        // $(document).ready(function() {
        //     $('#btn_upload').click(function() {

        //         var fd = new FormData();
        //         var files = $('#file')[0].files[0];
        //         fd.append('file', files);

        //         // AJAX request
        //         $.ajax({
        //             url: 'index.php',
        //             type: 'post',
        //             data: fd,
        //             contentType: false,
        //             processData: false,
        //             success: function(response) {
        //                 if (response != 0) {
        //                     // Show image preview
        //                     $('#preview').append("<img src='" + response +
        //                         ">"
        //                     );
        //                 } else {
        //                     alert('file not uploaded');
        //                 }
        //             }
        //         });
        //     });
        // });
        </script>
    </body>

</html>
