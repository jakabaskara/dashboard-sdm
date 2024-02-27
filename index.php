<?php
header("refresh: 600;");
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
            animation: marquee 15s linear 0s infinite;
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
                transform: translate(0, -40%);
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
                transform: translate(0, -70%);
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
                                    <div class="card" style="max-height: 250px; overflow: hidden;">
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
                                    <div class="card" style="height: 300px; overflow: hidden;">
                                        <div class="card-header card-header m-0 p-2" style="background-color: #0093AB;">
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
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="card">
                                        <div class="card-header" style="background-color: #DAA520;">
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
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-sm table-hover table-bordered text-dark">
                                                    <thead>
                                                        <tr>
                                                            <th>Jam</th>
                                                            <th>Agenda</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>09:00 WIB</td>
                                                            <td></td>
                                                            <td><span class="badge badge-success">Kosong</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>09:30 WIB</td>
                                                            <td></td>
                                                            <td><span class="badge badge-success">Kosong</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10:00 WIB</td>
                                                            <td></td>
                                                            <td><span class="badge badge-success">Kosong</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10:30 WIB</td>
                                                            <td></td>
                                                            <td><span class="badge badge-success">Kosong</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11:00 WIB</td>
                                                            <td></td>
                                                            <td><span class="badge badge-success">Kosong</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11:30 WIB</td>
                                                            <td></td>
                                                            <td><span class="badge badge-success">Kosong</span></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="card bg-">
                                        <div class="card-body">
                                            <h4 class="">Acara SDM Hari Ini</h4>
                                            <hr>
                                            <h5><span><i class="far fa-circle-dot text-danger blink"></i></span> Badminton di Glory Jam 20:00 - 23-00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pe-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-start">Event:</h4>
                                    <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
                                        <div class="carousel-inner" style="max-height: 600px;">
                                            <div class="carousel-item active" data-mdb-interval="5000">
                                                <img src="image/fotoDashboard (1).jpeg" class="w-100" alt="Wild Landscape" style="object-fit: cover;" />
                                            </div>
                                            <div class="carousel-item" data-mdb-interval="5000">
                                                <img src="image/fotoDashboard (3).jpeg" class="d-block w-100" alt="Camera" />
                                            </div>
                                            <div class="carousel-item" data-mdb-interval="5000">
                                                <img src="image/fotoDashboard (2).jpeg" class="d-block w-100" alt="Exotic Fruits" />
                                            </div>
                                            <div class="carousel-item" data-mdb-interval="5000">
                                                <img src="image/fotoDashboard (4).jpeg" class="d-block w-100" alt="Exotic Fruits" />
                                            </div>
                                            <div class="carousel-item" data-mdb-interval="5000">
                                                <img src="image/fotoDashboard (5).jpeg" class="d-block w-100" alt="Exotic Fruits" />
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
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