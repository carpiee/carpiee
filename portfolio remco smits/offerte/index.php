<?php


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
        <link rel="stylesheet" type="text/css" href="../css/tailwind.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div
            class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

            <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

                <div
                    class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                    <span class="text-sm">(Esc)</span>
                </div>

                <!-- Add margin if you want to see some of the overlay behind the modal-->
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Maak een offerte!</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                                height="18" viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <!--Body-->
                    <form class="space-y-4" action="sendOfferte.php" method="post">
                        <div class="mt-4">
                            <label for="naam">Uw naam:</label>
                            <input class="px-4 py-2 w-full rounded-md border" type="text" id="naam" name="naam"
                                required>
                        </div>
                        <div>
                            <label for="email">Uw email:</label>
                            <input class="px-4 py-2 w-full rounded-md border" type="text" id="email" name="email"
                                required>
                        </div>
                        <div>
                            <label for="tel">Uw telefoon nummer:</label>
                            <input class="px-4 py-2 w-full rounded-md border" type="tel" id="tel" name="tel" required>
                        </div>
                        <div>
                            <label for="bedrijfsnaam">Uw bedrijfsnaam:</label>
                            <input class="px-4 py-2 w-full rounded-md border" type="text" id="bedrijfsnaam"
                                name="bedrijfsnaam">
                        </div>
                        <div>
                            <label for="opmerking">Opmerking/wat u wilt:</label>
                            <textarea class="px-4 py-2 w-full rounded-md border" name="opmerking" id="opmerking"
                                cols="30" rows="10"></textarea>
                        </div>
                        <div class="flex justify-end pt-2">
                            <input
                                class="px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400 cursor-pointer"
                                type="submit" value="Versturen">
                        </div>
                    </form>



                    <!--Footer-->


                </div>
            </div>
        </div>
        <button
            class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Open
            Modal</button>

        <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event) {
                event.preventDefault()
                toggleModal()
            })
        }
        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }

        function toggleModal() {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
        </script>
    </body>

</html>
