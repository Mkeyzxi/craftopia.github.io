<?php

    require './function/function.php';

    if(isset($_GET['difficulty'])){

        $dif = $_GET['difficulty'];
        $data = query("SELECT * FROM craft WHERE difficulty = '$dif'");

    } else {
        $data = query("SELECT * FROM craft");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Katalog page dari sebuah web">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page | CraftTopia.Id</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="img/icon-craftopia.webp" type="image/x-icon">

    <!-- icon cdn boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="logo">
            <h1>C<span style="color: #E48F45;">r</span>a<span style="color: #E48F45;">f</span>topia.id</h1>
        </div>
        <nav>
            <ul>
                <li><a href="./index.php">Beranda</a></li>
                <li><a href="./katalog.php">Katalog</a></li>
                <li><a href="./kontak.php">Kontak Kami</a></li>
            </ul>
        </nav>
        <div class="contact">
            <li><a href="#"><i class="bi bi-tiktok"></i></a>
            </li>
            <li>
                <a href="#"><i class="bi bi-twitter"></i></a></li>
            <li>
                <a href="https://www.instagram.com/mkeyzxi/"><i class="bi bi-instagram"></i></a></li>
        </div>
        <div id="toggleMenu" class="toggleMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <main id="katalogKu">
        <article>
            <h2>Kerajinan tangan</h2>
            <ul>
                <li><a class="selected" href="./katalog.php">Semua</a></li>
                <li><a href="./katalog.php?difficulty=3">Sulit</a></li>
                <li><a href="./katalog.php?difficulty=2">Sedang</a></li>
                <li><a href="./katalog.php?difficulty=1">Mudah</a></li>
            </ul>
        </article>
        <div class="pembagian">
            <?php foreach($data as $d) :?>
            <section>
                <img src="./img/<?= $d['thumbnail'] ?>" alt="">
                <div class="deskripsi">
                    <span><?= $d['difficulty'] ?? '' ?></span>
                    <h4><?= $d['title'] ?? '' ?></h4>
                    <p><?= $d['description'] ?? '' ?></p>
                    <hr>
                    <div class="namaBarang">
                        <h5><?= $d['source'] ?? '' ?></h5>
                        <p><?= $d['estimate'] ?? '' ?></p>
                    </div>
                </div>
            </section>
            <?php endforeach; ?>

            <!-- <section>
                <img src="img/kerajinan-5.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Hiasan Rak Bunga</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>

            <section>
                <img src="img/kerajinan-13.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Rak Buku</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>
            <section>
                <img src="img/kerajinan-15.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Hiasan Dinding</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>
            <section>
                <img src="img/kerajinan-6.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Parfum Piano</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>

            <section>
                <img src="img/kerajinan-17.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Lampu Tidur</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>
            <section>
                <img src="img/kerajinan-2.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Kue Harapan</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>
            <section>
                <img src="img/kerajinan-7.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Gitar Tutup Botol</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>
            <section>
                <img src="img/kerajinan-4.webp" alt="tempat pulpen" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Kapal Telur</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>


            <section>
                <img src="img/kerajinan-18.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Pot Bunga Spongebob</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>

            <section>
                <img src="img/kerajinan-16.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Foto Polaroid 4Strip</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>

            <section>
                <img src="img/kerajinan-14.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Jam Pembagi Waktu</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section>

            <section>
                <img src="img/kerajinan-11.webp" alt="" width="100%" height="173px">
                <div class="deskripsi">
                    <h4>Hiasan Dinding Minimalis</h4>
                    <p>Kerajinan yang memanfaatkan rak telur sebagai hiasan</p>
                    <hr>
                    <div class="namaBarang">
                        <h5>Rexky</h5>
                        <p>20 menit</p>
                    </div>
                </div>
            </section> -->
        </div>

    </main>
    <footer>
        <p>Copyright 2023 &copy; Craftopia.id</p>
    </footer>
    <script src="javascript/scriptIndex.js "></script>
</body>

</html>