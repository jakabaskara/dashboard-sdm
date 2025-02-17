<?php
header("refresh: 600;");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="300" />
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
      rel="stylesheet"
    />
    <title>Dashboard - SDM & SM PT Perkebunan Nusantara IV Regional V</title>
    <style>
      #intro {
        background-image: url("image/bg-bnw.jpeg");
        height: 100vh;
      }

      .card-iframe {
        width: 400px;
        height: 600px;
        border: 1px solid #ccc;
        overflow-y: scroll;
        /* Untuk memberikan kemampuan scroll jika PDF terlalu panjang */
      }

      #clock {
        font-size: 24px;
        color: #ffffff;
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

      .marquee-informasi {
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
        background-color: #171e24;
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

      /* @keyframes marquee-informasi {
        0% {
          transform: translate(0, 0);
        }

        100% {
          transform: translate(0, -100%);
        }
      } */

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
        <div class="d-block justify-content-start pt-3 ps-2 vh-100" id="">
          <div class="text-center">
            <div class="row">
              <div class="col-3">
                <div class="row">
                  <div class="col-12">
                    <div
                      class="card shadow-5"
                      style="max-height: 230px; overflow: hidden"
                    >
                      <div
                        class="card-header m-0 p-2 text-white"
                        style="background-color: #2c4542"
                      >
                        <h4 class="text-center my-0">
                          <span><i class="fas fas fa-user-tie fa-xs"></i></span>
                          Jumlah Tenaga Kerja
                        </h4>
                      </div>
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table
                            class="table table-sm table-borderless"
                            style="background-color: #171e24"
                          >
                            <thead class="head-table">
                              <tr
                                class="text-center text-white head-table"
                                style="font-size: 26px"
                              >
                                <th>Level Jabatan</th>
                                <th>Jumlah</th>
                              </tr>
                            </thead>
                            <tbody
                              class="marquee text-white"
                              style="font-size: 25px"
                            >
                              <tr>
                                <td>RM-1</td>
                                <td>44</td>
                              </tr>
                              <tr>
                                <td>RM-2</td>
                                <td>75</td>
                              </tr>
                              <tr>
                                <td>RM-3</td>
                                <td>248</td>
                              </tr>
                              <tr>
                                <td>RM-4</td>
                                <td>177</td>
                              </tr>
                              <tr>
                                <td>RM-5</td>
                                <td>1.802</td>
                              </tr>
                              <tr>
                                <td>RM-6</td>
                                <td>3.718</td>
                              </tr>
                              <tr>
                                <th>Total</th>
                                <th>6.064</th>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-2">
                    <div class="card" style="height: 220px; overflow: hidden">
                      <div
                        class="card-header card-header m-0 pb-0 pt-1"
                        style="background-color: #213558" 
                      >
                        <h4 class="text-center text-white">Jumlah Magang/PKL</h4>
                      </div>
                      <div
                        class="card-body p-1"
                        style="background-color: #171e24"
                      >
                        <div class="table-responsive">
                          <table
                            class="table table-hover table-sm text-dark table-borderless"
                            style="background-color: #171e24; font-size: 13px"
                          >
                            <thead>
                              <tr
                                class="text-center align-middle head-table text-white"
                              >
                                <th>Bagian</th>
                                <th>MAGENTA</th>
                                <th>MBKM/KP</th>
                                <th>PKL/PI</th>
                              </tr>
                            </thead>
                            <tbody
                              class="marquee-magang text-white"
                              style="font-size: 26px"
                            >
                              <tr class="text-center">
                                <th>5SKH</th>
                                <td>2</td>
                                <td>0</td>
                                <td>2</td>
                              </tr>
                              <tr class="text-center">
                                <th>DSPI</th>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                              </tr>
                              <tr class="text-center">
                                <th>5TAN</th>
                                <td>1</td>
                                <td>0</td>
                                <td>5</td>
                              </tr>
                              <tr class="text-center">
                                <th>5DPM</th>
                                <td>1</td>
                                <td>0</td>
                                <td>3</td>
                              </tr>
                              <tr class="text-center">
                                <th>5TEP</th>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                              </tr>
                              <tr class="text-center">
                                <th>5KEU</th>
                                <td>3</td>
                                <td>1</td>
                                <td>2</td>
                              </tr>
                              <tr class="text-center">
                                <th>5SDM</th>
                                <td>3</td>
                                <td>0</td>
                                <td>3</td>
                              </tr>
                              <tr class="text-center">
                                <th>5PTI</th>
                                <td>2</td>
                                <td>0</td>
                                <td>0</td>
                              </tr>
                              <tr class="text-center">
                                <th>5PMO</th>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                              </tr>
                              <tr class="text-center">
                                <th>Jumlah</th>
                                <th>15</th>
                                <th>1</th>
                                <th>18</th>
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
                  <div class="col-12 mt-1">
                    <div class="card" style="background-color: #171e24">
                      <div
                        class="card-header pb-0 pt-1"
                        style="background-color: #573f00"
                      >
                        <h4 class="text-center text-white">Informasi</h4>
                      </div>

                      <!-- <div
                        class="card-body py-0 my-0 d-flex align-items-center justify-content-center"
                        style="font-size: 18px; height: 100px"
                      > -->
                      <!-- <p class="my-3 text-white align-middle">
                          Belum Ada Informasi
                        </p> -->

                      <div class="table-responsive">
                        <table
                          class="table table-hover table-sm text-dark table-borderless"
                          style="background-color: #171e24; font-size: 17px"
                        >
                          <thead>
                            <tr
                              class="text-center align-middle head-table text-white"
                            >
                              <th>Hari</th>
                              <th>Pakaian Kerja</th>
                            </tr>
                          </thead>
                          <tbody
                            class="marquee-magang text-white"
                            style="font-size: 26px"
                          >
                            <tr class="text-center">
                              <th>Senin</th>

                              <td>Baju Dinas Putih</td>
                            </tr>
                            <tr class="text-center">
                              <th>Selasa</th>

                              <td>Baju Dinas Biru</td>
                            </tr>
                            <tr class="text-center">
                              <th>Rabu</th>

                              <td>Batik</td>
                            </tr>
                            <tr class="text-center">
                              <th>Kamis</th>

                              <td>Kemeja Bebas</td>
                            </tr>
                            <tr class="text-center">
                              <th>Jumat</th>

                              <td>Bebas Rapi</td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>

                        <!-- <div
                          class="card-body p-1"
                          style="background-color: #171e24"
                        > -->
                        <!-- <div class="table-responsive">
                            <table
                              class="table table-hover table-sm text-dark table-borderless"
                              style="background-color: #171e24; font-size: 17px"
                            >
                              <tbody
                                class="marquee-informasi text-white"
                                style="font-size: 26px"
                              >
                                <tr class="text-center">
                                  <th>13.01</th>
                                  <td>2</td>
                                  <td>1</td>
                                  <td>0</td>
                                </tr>
                                <tr class="text-center">
                                  <th>13.02</th>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>0</td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div> -->

                        <!-- <p class="text-start pt-0 mt-0"><strong>Plt Kepala Bagian: Joko Susanto</strong></p>
                                            <p class="mt-0 pb-0 mb-0 pt-0 text-start">Karyawan Dinas:
                                            <ol class="text/-start pb-0 mb-0">
                                                <li>Ahmad Ridwan</li>
                                                <li>Herman Ginting</li>
                                                <li class="">Moch. Raka Kurniawan</li>
                                            </ol>
                                            </p> -->
                        <!-- <table class="table-sm table-hidden">
                                                <tr class="text-start align-top">
                                                    <td rowspan="2">Karyawan Cuti:</td>
                                                </tr>
                                                <tr class="text-start">
                                                    <th>-Ian Priyana</th>
                                                </tr>
                                                <tr class="text-start align-top">
                                                    <td rowspan="2">Karyawan Dinas:</td>
                                                </tr>
                                                <tr class="text-start">
                                                    <th>-Tri Ariany</th>
                                                </tr>
                                            </table> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="row">
                  <div class="col-12">
                    <div
                      class="card"
                      style="height: 435px; background-color: #171e24"
                    >
                      <div class="card-header py-2">
                        <!-- <h4 class="text-white p-0 m-0">Jadwal Minggu Ini</h4> -->
                        <h4 class="text-white p-0 m-0" style="font-size: 25px;">Jadwal Bulan Ini</h4>
                      </div>
                      <div class="card-body p-2">
                        <p class="alert alert-success py-2 px-2 text-start" style="background-color: #e4a11b; color:white;">
                          <span
                            ><i class="far fa-circle-dot text-danger blink"></i
                          ></span>
                          Kegiatan Minggu Ini
                        </p>
                        <div class="table-responsive">
                          <table
                            class="table table-sm table-hover table-bordered text-white"
                          >
                            <thead>
                              <tr>
                                <th>Hari</th>
                                <th>Agenda</th>
                              </tr>
                            </thead>
                            <tbody class="align-middle">
                              <tr>
                                <td>Rabu</td> <!-- Kolom Hari -->
                                <td>GESIT</td> <!-- Kolom Agenda -->
                              </tr>
                              <tr>
                                <td>Kamis</td> <!-- Kolom Hari -->
                                <td>Resonansi</td> <!-- Kolom Agenda -->
                              </tr>

                              <!-- <tr>
                                                            <td class="text-white">09:00 - 11:00</td>
                                                            <td>
                                                                <p class="text-start text-white my-0" style="font-size: 16px;">Sosialisasi Pengukuran AKHLAK Meter Semester II Tahun 2023</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-white">13:30 - 16:00</td>
                                                            <td>
                                                                <p class="text-start text-white my-0" style="font-size: 16px;">Evelating Cybersecurity Awarness for SOEs: Empowering Digital Talent Readiness</p>
                                                            </td>
                                                        </tr> -->
                              <!-- <tr>
                                                            <td>08:00 - Selesai</td>
                                                            <td>
                                                                <p class="text-center my-0" style="font-size: 16px;"><strong>Update Morning</strong></p>
                                                            </td>
                                                        </tr> -->

                              <!-- <tr>
                                                            <span><i class="far fa-circle-dot text-danger blink"></i></span>
                                                            <td>08:00 - Selesai</td>
                                                            <td>
                                                                <p class="text-start my-0" style="font-size: 16px;">Zoom Meeting Pembahasan RKAP</p>
                                                            </td>
                                                        </tr> -->
                              <!-- <tr>
                                                            <td>08:00 - Selesai</td>
                                                            <td>
                                                                <p class="text-start my-0" style="font-size: 16px;"><strong>Inverview Calon PMMB</strong></p>
                                                            </td>
                                                        </tr> -->
                            </tbody>
                          </table>
                        </div>
                        <p
                        class="alert alert-success py-2 px-2 text-start" style="background-color: #e4a11b; color:white;">
                          Kegiatan Akan Datang
                        </p>
                        <div class="table-responsive">
                          <table
                            class="table table-striped table-sm table-hover table-bordered text-white"
                          >
                            <thead>
                              <tr>
                              <thead>
                              <tr>
                                <th>Tanggal</th>
                                <th>Agenda</th>
                              </tr>
                            </thead>
                            <tbody class="align-middle">
                              <tr>
                                <td style="color: white;">-</td> 
                                <td style="color: white;">-</td>
                              </tr>
                              <!-- <tr>
                                <td>23/10/2024</td> 
                                <td style="font-size: 12px;">SIO Alat Berat, PAA</td>  
                              </tr> -->
                              

                              <!-- <tr>
                                                            <td class="text-white">14:00 - Selesai</td>
                                                            <td>
                                                                <p class="text-start text-white my-0" style="font-size: 16px;">PTPN XIII Mengajar: Sosialisasi Mengenai Fitur AGHRIS</p>
                                                            </td>
                                                        </tr> -->
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-2">
                    <div
                      class="card"
                      style="background-color: #171e24; height: 165px"
                    >
                      <div class="card-header py-2">
                        <h4 class="mb-0 text-white">Berita SDM</h4>
                      </div>
                      <div class="card-body pb-0 pt-1 mx-0 px-1">
                        <p class="text-start my-5"></p>
                        <!-- <h5 class="mt-2 text-white pt-4">Tangkapan Tikus Hari Ini: <strong>8</strong></h5> -->
                        <!-- <p class="mb-0">Dinas Mengikuti Pelatihan <strong>Corporate Culture Specialist </strong>pada tanggal: 17 - 21 Oktober 2023:</p>
                                            <ol class="text-start mt-0">
                                                <li><strong>Joko Susanto</strong></li>
                                                <li><strong>Bery Setiatmiko</strong></li>
                                                <li><strong>Brian Pujo Pratomo</strong></li>
                                            </ol> -->
                        <!-- <p>Belum ada acara</p> -->
                        <!-- <h5><span><i class="far fa-circle-dot text-danger blink"></i></span> 20:00 WIB - Badminton di Glory</h5> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-7 pe-3">
                <div
                  class="card card-block d-flex"
                  style="height: 608px; background-color: #171e24"
                >
                  <div class="card-header">
                    <h4 class="text-start mb-0 text-white">
                      Bagian SDM dan Sistem Manajemen Kantor Regional Office
                    </h4>
                  </div>
                  <div
                    class="card-body align-items-center d-flex justify-content-center"
                  >
                    <div class="row align-middle">
                      <div class="col">
                        <!-- Carousel wrapper -->
                        <div
                          id="carouselVideoExample"
                          class="carousel slide carousel-fade"
                          data-mdb-ride="carousel"
                        >
                          <!-- Indicators -->
                          <div class="carousel-indicators">
                            <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="0"
                              class="active"
                              aria-current="true"
                              aria-label="Slide 1"
                            ></button>
                            <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="1"
                              aria-label="Slide 2"
                            ></button>
                            <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="2"
                              aria-label="Slide 3"
                            ></button>
                            <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="3"
                              aria-label="Slide 4"
                            ></button>
                            <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="4"
                              aria-label="Slide 5"
                            ></button>
                            <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="5"
                              aria-label="Slide 6"
                            ></button>
                            <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="6"
                              aria-label="Slide 7"
                            ></button>
                            <!-- <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="7"
                              aria-label="Slide 8"
                            ></button> -->
                            <!-- <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="6"
                              aria-label="Slide 7"
                            ></button> -->
                            <!-- <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="7"
                              aria-label="Slide 8"
                            ></button> -->
                            <!-- <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="8"
                              aria-label="Slide 9"
                            ></button> -->
                            <!-- <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="8"
                              aria-label="Slide 9"
                            ></button>
                            <button
                              type="button"
                              data-mdb-target="#carouselVideoExample"
                              data-mdb-slide-to="9"
                              aria-label="Slide 10"
                            ></button> -->
                            <!--<button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="7" aria-label="Slide 8"></button>
                                                    <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="8" aria-label="Slide 9"></button>
                                                    <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="9" aria-label="Slide 10"></button> -->
                            <!-- <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="10" aria-label="Slide 11"></button> -->
                          </div>

                          <!-- Inner -->
                          <div class="carousel-inner rounded-5 shadow-4-strong">
                            <!-- Single item -->
                            <!-- <div
                              class="carousel-item active"
                              data-mdb-interval="5000"
                            >
                              <div
                                class="row justify-content-center align-item-center"
                              >
                                <div class="col align-middle">
                                  <img
                                    src="image/OPBP-1.jpeg"
                                    class="d-block w-100"
                                    alt="Camera"
                                  />
                                </div>
                              </div>
                            </div> -->

                            <!-- <div
                              class="carousel-item"
                              data-mdb-interval="50000"
                            >
                              <div
                                class="row justify-content-center align-item-center"
                              >
                                <div class="col align-middle">
                                  <img
                                    src="image/OPBP-2.jpeg"
                                    class="d-block w-100"
                                    alt="Camera"
                                  />
                                </div>
                              </div>
                            </div> -->

                            <!-- <div class="carousel-item" data-mdb-interval="50000">
                                                        <img src="image/fotoSDM (4).jpeg" class="d-block w-100" alt="Camera" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="">CAFE SDM</h5>
                                                            <p>Tempat Berkumpul Untuk Berbagi Cerita dan Bersantai Sejenak</p>
                                                        </div>
                                                    </div>

                                                    <div class="carousel-item" data-mdb-interval="50000">
                                                        <img src="image/fotoSDM (5).jpeg" class="d-block w-100" alt="Camera" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="">Majalah Dinding SDM</h5>
                                                            <p>Berisi Tulisan SDM dan Proses Bisnis SDM</p>
                                                        </div>
                                                    </div> -->
                            <!--<div class="carousel-item" data-mdb-interval="100000">
                                                        <img src="image/poster2.jpeg" class="d-block w-100" alt="Camera" />
                                                    </div> -->
                            <!-- <div
                              class="carousel-item"
                              data-mdb-interval="50000"
                            >
                              <img
                                src="image/Foto Stunting 1.jpeg"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div> -->
                            <div
                              class="carousel-item active"
                              data-mdb-interval="10000"
                            >
                              <img
                                src="image/ERP 1.png"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div>

                            <div
                              class="carousel-item"
                              data-mdb-interval="60000"
                            >
                              <video class="img-fluid" autoplay loop muted>
                                <source src="image/kunj-dis.mp4" />
                              </video>
                            </div>
                          </div>
                            <!-- <div
                              class="carousel-item active"
                              data-mdb-interval="10000"
                            >
                              <img
                                src="image/sertif-bu-tria-batak.png"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div> -->

                            <!-- <div
                              class="carousel-item"
                              data-mdb-interval="15000"
                            >
                              <video class="img-fluid" autoplay loop muted>
                                <source src="image/sertif-bu-tria-batak.png" />
                              </video>
                            </div> -->
                            <!-- <div class="carousel-item" data-mdb-interval="100000">
                                                        <img src="image/Foto Burdas1.jpeg" class="d-block w-100" alt="Camera" />
                                                    </div> -->
                            <!-- <div class="carousel-item" data-mdb-interval="5000">
                              <img
                                src="image/pak joko kantor.png"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div> -->
                            <!-- <div
                              class="carousel-item"
                              data-mdb-interval="100000"
                            >
                              <img
                                src="image/sap 1.gif"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div> -->
                            <!-- <div
                              class="carousel-item"
                              data-mdb-interval="10000"
                            >
                              <img
                                src="image/sap 2.gif"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div> -->
                            <div
                              class="carousel-item"
                              data-mdb-interval="10000"
                            >
                              <img
                                src="image/akhlak-culture-journey.jpeg"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div>

                            <div
                              class="carousel-item"
                              data-mdb-interval="40000"
                            >
                              <img
                                src="image/foto-ultah-ptk.png"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div>

                            <!-- <div
                              class="carousel-item"
                              data-mdb-interval="15000"
                            >
                              <video class="img-fluid" autoplay loop muted>
                                <source src="image/ultahptk.mp4" />
                              </video>
                            </div> -->

                            <div
                              class="carousel-item"
                              data-mdb-interval="15000"
                            >
                              <video class="img-fluid" autoplay loop muted>
                                <source src="image/quotes-jan.mp4" />
                              </video>
                            </div>
                            <!-- <div
                              class="carousel-item"
                              data-mdb-interval="10000"
                            >
                              <img
                                src="image/Pelatihan PSR.png"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div> -->
                            <!-- <div class="carousel-item" data-mdb-interval="100000">
                                                        <img src="image/ptpn-mengajar3.jpeg" class="d-block mx-auto w-75" alt="Camera" />
                                                    </div> -->

                            <!-- <div
                              class="carousel-item"
                              data-mdb-interval="10000"
                            >
                              <img
                                src="image/quote-sdm1.png"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div> -->

                            <!-- <div
                              class="carousel-item"
                              data-mdb-interval="15000"
                            >
                              <video class="img-fluid" autoplay loop muted>
                                <source src="image/welcome-erp-sap.mp4" />
                              </video>
                            </div> -->

                            <!-- <div
                              class="carousel-item"
                              data-mdb-interval="40000"
                            >
                              <img
                                src="image/foto-ultah-ptk.png"
                                class="d-block w-100"
                                alt="Camera"
                              />
                            </div>

                            <div
                              class="carousel-item"
                              data-mdb-interval="15000"
                            >
                              <video class="img-fluid" autoplay loop muted>
                                <source src="image/ultahptk.mp4" />
                              </video>
                            </div> -->

                            <div
                              class="carousel-item"
                              data-mdb-interval="100000"
                            >
                              <video class="img-fluid" autoplay loop muted> 
                                <source src="image/gesron-jan.mp4" />
                              </video>
                            </div>

                            <div
                              class="carousel-item"
                              data-mdb-interval="60000"
                            >
                              <video class="img-fluid" autoplay loop muted>
                                <source src="image/vid-ptpn.mp4" />
                              </video>
                            </div>
                          </div>

                          <!-- <div class="carousel-item w-100" data-mdb-interval="100000">
                          <iframe
                            class="img-fluid"
                            style="width: 100%; height: 100%;"
                            src="https://www.youtube.com/embed/ZC5U3NvnYt8?autoplay=1&loop=1&mute=1&playlist=ZC5U3NvnYt8"
                            frameborder="0"
                            allow="autoplay; encrypted-media"
                            allowfullscreen
                          ></iframe>
                        </div> -->

                        <!-- <div class="carousel-item w-100" data-mdb-interval="100000">
                          <div class="embed-responsive" style="position: relative; width: 100%; height: 100%; padding-bottom: 56.25%;">
                            <iframe
                              class="embed-responsive-item"
                              src="https://www.youtube.com/embed/ZC5U3NvnYt8?autoplay=1&loop=1&mute=1&playlist=ZC5U3NvnYt8"
                              frameborder="0"
                              allow="autoplay; encrypted-media"
                              allowfullscreen
                              style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                            ></iframe>
                          </div>
                        </div> -->
                      
                        <!-- ini kek pas 1 detik lgsng hilang-->
                      <!-- <div class="carousel-item w-100" data-mdb-interval="100000">
                      <div class="embed-responsive" style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
                        <iframe
                          class="embed-responsive-item"
                          src="https://www.youtube.com/embed/ZC5U3NvnYt8?autoplay=1&loop=1&mute=1&playlist=ZC5U3NvnYt8"
                          frameborder="0"
                          allow="autoplay; encrypted-media"
                          allowfullscreen
                          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                        ></iframe>
                      </div>
                    </div> -->


                          <!-- Inner, -->

                          <!-- Controls -->
                          <button
                            class="carousel-control-prev"
                            type="button"
                            data-mdb-target="#carouselVideoExample"
                            data-mdb-slide="prev"
                          >
                            <span
                              class="carousel-control-prev-icon"
                              aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button
                            class="carousel-control-next"
                            type="button"
                            data-mdb-target="#carouselVideoExample"
                            data-mdb-slide="next"
                          >
                            <span
                              class="carousel-control-next-icon"
                              aria-hidden="true"
                            ></span>
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
          <div class="row no-gutters">
            <div
              class="col-2 bg-dark pe-0 m-0 pb-0 d-flex align-items-center justify-content-center"
            >
              <div class="text-light pb-0">
                <h1
                  class="text-center pb-0 pt-2"
                  id="clock"
                  style="font-size: 36px"
                ></h1>
              </div>
            </div>
            <div
              class="col m-0 d-flex align-items-center justify-content-center bg-dark"
            >
              <marquee behavior="scroll" direction="left" class="text-white">
                <h5 class="m-0 pt-0 d-flex" style="font-size: 34px">
                  Selamat Datang di Bagian Sumber Daya Manusia dan Sistem Manajemen Kantor Direksi |
                  AKHLAK - Amanah, Kompeten, Harmonis, Loyal, Adaptif,
                  Kolaboratif | Amanah: Memenuhi Janji dan Komitmen, Bertanggung
                  Jawab atas Tugas, Keputusan, dan Tindakan yang dilakukan, serta
                  Berpegang Teguh kepada Nilai Moral dan Etika
                </h5>
              </marquee>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
    ></script>
    <script>
      function showTime() {
        const clock = document.getElementById("clock");
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, "0");
        const minutes = now.getMinutes().toString().padStart(2, "0");
        const seconds = now.getSeconds().toString().padStart(2, "0");
        const timeString = `${hours}:${minutes}:${seconds}`;
        clock.textContent = timeString;
      }

      // Memanggil showTime setiap detikk
      setInterval(showTime, 1000);

      // Memanggil showTime untuk pertama kali saat halaman dimuat
      showTime();

      var pdfViewer = document.getElementById("pdfViewer"); // Ganti dengan ID atau selector yang tepat
      pdfViewer.onload = function () {
        var totalHeight = pdfViewer.contentWindow.document.body.scrollHeight;
        pdfViewer.contentWindow.scrollTo(0, totalHeight);
      };
    </script>
  </body>
</html>
