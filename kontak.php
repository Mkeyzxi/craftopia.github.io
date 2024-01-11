<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Page kontak tempat menghubungi pengembang">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak | CraftTopia.Id</title>
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
    <main id="kontakKu">
        <div class="pengantar">
            <h2>Kontak Kami</h2>
            <p>Kami sangat menghargai masukan dan pendapat Anda. Jika Anda memiliki saran atau sanggahan terkait website kami, silakan beri tahu kami.</p>
        </div>
        <form action="./function/add_contact.php" method="post">
            <label for="nama"></label>
            <input type="text" name="nama" id="nama" placeholder="Your First Name" required>
            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="you@example.com" required>
            <label for="deskripsi"></label>
            <input type="text" id="deskripsi" name="description" placeholder="Description" required>
            <button id="Kirim">Kirim</button>
        </form>
    </main>
    <footer>
        <p>Copyright 2023 &copy; Craftopia.id</p>
    </footer>
    <script src="javascript/scriptIndex.js"></script>
    <script src="javascript/scriptKontak.js"></script>

</body>

</html>