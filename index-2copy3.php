<?php
header("refresh: 1800;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <title>Dashboard - SDM</title>
    <style>
        #intro {
            background-image: url("image/Kandir.jpeg");
            height: 100vh;

        }

        #clock {
            font-size: 24px;
            color: #333;
        }

        .marquee {
            top: 1em;
            position: relative;
            box-sizing: border-box;
            animation: marquee 15s linear 0s infinite;
        }

        .marquee-magang {
            top: 1em;
            position: relative;
            box-sizing: border-box;
            animation: marquee 20s linear 0s infinite;
        }

        .marquee:hover {
            animation-play-state: paused;
        }

        .head-table {
            position: relative;
            z-index: 100;
            background-color: white;
        }

        @keyframes marquee {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(0, -70%);
            }

            /* 100% {
                transform: translate(0, 0);
            } */
        }

        @keyframes marquee-magang {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(0, -100%);
            }

            /* 100% {
                transform: translate(0, 0);
            } */
        }

        .blink {
            animation: blink-animation 1s steps(5, start) infinite;
            -webkit-animation: blink-animation 1s steps(5, start) infinite;
        }

        @keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }

        @-webkit-keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }

        /* Height for devices larger than 576px */
    </style>
</head>

<body>
    <div class=" container-fluid" id="intro">
        <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.3)">
            <div class="d-block justify-content-start  vh-100 " id="">
                <div class="text-center">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="card card-block d-flex" style="height: 600px;">
                                <div class="card-body align-items-center d-flex justify-content-center">
                                    <div class="row align-middle">
                                        <div class="col">
                                            <!-- Carousel wrapper -->
                                            <div id="carouselVideoExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                                                <!-- Indicators -->
                                                <div class="carousel-indicators">
                                                    <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
                                                    <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="3" aria-label="Slide 4"></button>
                                                </div>

                                                <!-- Inner -->
                                                <div class="carousel-inner">
                                                    <!-- Single item -->
                                                    <div class="carousel-item active" data-mdb-interval="10000">
                                                        <div class="row justify-content-center align-item-center">
                                                            <div class="col align-middle">
                                                                <img src="image/Acara SMK SMTI.jpeg" class="d-fluid w-75" alt="Camera" style="object-fit: cover;" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="carousel-item" data-mdb-interval="10000">
                                                        <img src="image/SDM Alur.jpg" class="d-block w-100" alt="Camera" />
                                                    </div>

                                                    <!-- Single item -->
                                                    <div class="carousel-item " data-mdb-interval="56000">
                                                        <video class="img-fluid" autoplay loop muted>
                                                            <source src="image/Harmonis1.mp4" />
                                                        </video>
                                                    </div>


                                                    <div class="carousel-item " data-mdb-interval="43000">
                                                        <video class="img-fluid" autoplay loop muted>
                                                            <source src="image/Loyal-1.m4v" />
                                                        </video>
                                                    </div>

                                                    <div class="carousel-item " data-mdb-interval="35000">
                                                        <video class="img-fluid" autoplay loop muted>
                                                            <source src="image/Lu Punya Kuasa-1.m4v" />
                                                        </video>
                                                    </div>

                                                    <div class="carousel-item " data-mdb-interval="59000">
                                                        <video class="img-fluid" autoplay loop muted>
                                                            <source src="image/Tebak Tebakan-1.m4v" />
                                                        </video>
                                                    </div>

                                                </div>
                                                <!-- Inner -->

                                                <!-- Controls -->
                                                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                            <!-- Carousel wrapper -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    <script>
        function showTime() {
            const clock = document.getElementById('clock');
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const timeString = `${hours}:${minutes}:${seconds}`;
            clock.textContent = timeString;
        }

        // Memanggil showTime setiap detik
        setInterval(showTime, 1000);

        // Memanggil showTime untuk pertama kali saat halaman dimuat
        showTime();
    </script>
</body>

</html>