<html lang="en">
    <head>
        <title>Diamonds Gym Bedworth</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>

    <body>
        <?php include 'nav.html';?>
        <div id="main">
            <div class="container">
                <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="margin-top: 2%;" id="find-us">
                    <div id="address">
                        <h1 class="display-4 font-italic">Our Story</h1>
                        <p class="lead my-3">Paragraph here about the gym </p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start" style="text-decoration: none;">
                                <h3 class="mb-0">
                                    <h3 class="text-dark">Opening Hours</h3>
                                </h3>
                                <p class="card-text mb-auto">Mon-Fri 6:00-22:00 <br>Sat 7:00 - 17:00 <br>Sun 8:00 - 16:00</p>
                                <p class="card-text mb-auto">Bank Holidays 7:00 - 15:00</p>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" src="opening_hours.jpg" style="width: 40%; border-top-right-radius: 5px; border-bottom-right-radius: 5px">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h3 class="mb-0">
                                    <h3 class="text-dark">Find us in the heart of Bedworth</h3>
                                </h3>
                                <p class="card-text mb-auto"><a href="https://goo.gl/maps/JyF87Q2TFyjFEpBv6" style="text-decoration: none;"><p class="lead my-3">16b High St <br>Bedworth CV12 8NF</p></a></p>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" id="about-map" src="map.jpg" style="width: 40%; border-top-right-radius: 5px; border-bottom-right-radius: 5px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.html' ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>