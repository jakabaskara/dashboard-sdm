<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <title>Dashboard - SDM</title>

    <style>
        .card-content {
            opacity: 0;
            /* Awalnya sembunyikan konten card */
            padding: 20px;
            transition: opacity 0.5s ease-in-out;
            /* Tambahkan efek transisi ke opacity */
        }

        .card-content.active {
            opacity: 1;
            /* Tampilkan konten card yang aktif */
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row" id="card-container">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-content" id="card1">Card 1 Content</div>
                    <div class="card-content" id="card2">Card 2 Content</div>
                    <div class="card-content" id="card3">Card 3 Content</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Isi dari Card 2.</p>
                    </div>
                </div>
            </div>
            <!-- Tambahkan card lainnya sesuai kebutuhan -->
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

    <script>
        // // Mendapatkan semua card
        // const cards = document.querySelectorAll('.card');
        // let currentIndex = 0;

        // // Fungsi untuk menampilkan card dengan jeda waktu
        // function showNextCard() {
        //     if (currentIndex < cards.length) {
        //         cards[currentIndex].classList.remove('card-hidden');
        //         currentIndex++;
        //         setTimeout(showNextCard, 2000); // Ubah waktu jeda sesuai kebutuhan (dalam milidetik)
        //     }
        // }

        // // Memulai tampilan card pertama
        // showNextCard();
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll(".card-content");
            let currentIndex = 0;

            function showNextCard() {
                cards[currentIndex].classList.remove("active"); // Hapus kelas 'active' dari card saat ini
                currentIndex = (currentIndex + 1) % cards.length; // Geser ke card berikutnya
                cards[currentIndex].classList.add("active"); // Tambahkan kelas 'active' ke card berikutnya
            }

            // Tampilkan card pertama saat halaman dimuat
            cards[currentIndex].classList.add("active");

            // Set interval untuk menggantikan card setiap beberapa detik
            setInterval(showNextCard, 3000); // Ganti card setiap 3 detik (sesuaikan dengan kebutuhan Anda)
        });
    </script>
</body>

</html>