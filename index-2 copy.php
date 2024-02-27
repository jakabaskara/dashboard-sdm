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
                transform: translate(0, -60%);
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
    <div class="bg-image container-fluid" id="intro">
        <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.3)">
            <div class="d-block justify-content-start pt-3 ps-2 vh-100 " id="">
                <div class="text-center">
                    <div class="row">
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card" style="max-height: 230px; overflow: hidden;">
                                        <div class="card-header m-0 p-2 text-white" style="background-color: #008000;">
                                            <h4 class="text-center my-0"><span><i class="fas fas fa-user-tie fa-xs"></i></span> Jumlah Karyawan </h4>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped table-borderless">
                                                    <thead class="head-table">
                                                        <tr class="text-center head-table">
                                                            <th>Level Jabatan</th>
                                                            <th>Jumlah</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="marquee">
                                                        <tr>
                                                            <td>BOD-1</td>
                                                            <td>46</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BOD-2</td>
                                                            <td>80</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BOD-3</td>
                                                            <td>252</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BOD-4</td>
                                                            <td>187</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BOD-5</td>
                                                            <td>1.974</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BOD-6</td>
                                                            <td>4.004</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total</th>
                                                            <th>6.543</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="card" style="height: 250px; overflow: hidden;">
                                        <div class="card-header card-header m-0 pb-0 pt-1" style="background-color: #0093AB;">
                                            <h4 class="text-center text-white">Data Anak Magang</h4>
                                        </div>
                                        <div class="card-body p-1">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped table-sm text-dark table-borderless">
                                                    <thead>
                                                        <tr class="text-center align-middle head-table">
                                                            <th>Bagian</th>
                                                            <th>PMMB</th>
                                                            <th>PKL<br>(Mahasiswa)</th>
                                                            <th>PKL<br>(Siswa)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="marquee-magang">
                                                        <tr class="text-center">
                                                            <th>SDM</th>
                                                            <td>6</td>
                                                            <td>3</td>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Plasma</th>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Tekpol</th>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Keuangan</th>
                                                            <td>0</td>
                                                            <td>2</td>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Sekper</th>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Tanaman</th>
                                                            <td>2</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Logistik</th>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>SPI</th>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Rensus</th>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>13</td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Jumlah</th>
                                                            <th>11</th>
                                                            <th>6</th>
                                                            <th>17</th>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="card">
                                        <div class="card-header pb-0 pt-1" style="background-color: #DAA520;">
                                            <h4 class="text-center text-white">Informasi</h4>
                                        </div>
                                        <div class="card-body">
                                            <p class="">Belum ada informasi</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card" style="height: 500px;">
                                        <div class="card-header">
                                            <h4 class="text-dark p-0 m-0">Jadwal Hari Ini</h4>
                                        </div>
                                        <div class=" card-body">
                                            <p class="alert alert-info py-2 px-2 text-start"><span><i class="far fa-circle-dot text-danger blink"></i></span> Sedang Berlangsung</p>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-sm table-hover table-bordered text-dark">
                                                    <thead>
                                                        <tr>
                                                            <th>Jam</th>
                                                            <th>Agenda</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="align-middle">
                                                        <tr>
                                                            <td>08:00 - 12:00 WIB</td>
                                                            <td>
                                                                <p class="text-start my-0" style="font-size: 16px;">Zoom Meeting Evaluasi SMK-SMTI</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>09:00 - 12:00 WIB</td>
                                                            <td>
                                                                <p class="text-start my-0" style="font-size: 18px;">Undangan Koordinasi antara PTPN XIII dan PT KMN</p>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <p class="alert alert-success py-2 px-2 text-start">Akan Datang</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="card">
                                        <div class="card-body py-2">
                                            <h4 class="mb-0">Acara SDM Hari Ini</h4>
                                            <hr class="my-2">
                                            <h5> Belum ada acara</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pe-3">
                            <div class="card card-block d-flex" style="height: 600px;">
                                <div class="card-header">
                                    <h4 class="text-start mb-0">Event:</h4>
                                </div>
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
        <div class="fixed-bottom py-0">
            <div class="card rounded-0">
                <div class="row no-gutters ">
                    <div class="col-2 bg-warning pe-0 m-0 pb-0 d-flex align-items-center justify-content-center">
                        <div class="text-dark pb-0">
                            <h1 class="text-center pb-0 pt-2" id="clock"></h1>
                        </div>
                    </div>
                    <div class="col  m-0 d-flex align-items-center justify-content-center ">
                        <marquee behavior="scroll" direction="left" class="text-dark">
                            <h5 class="m-0 pt-0 d-flex">Tetap jaga kesehatan | Bagian Sumber Daya Manusia | AKHLAK - Amanah, Kompeten, Harmonis, Loyal, Adaptif, Kolaboratif</h5>
                        </marquee>
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