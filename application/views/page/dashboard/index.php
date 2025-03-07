<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
@media (max-width: 480px) {
    .container {
        background-color: white;
        padding: 10px;
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
        color: black;
    }
    
    .home-header {
        background-color: #0148A8;
        display: flex;
        align-items: center;
        justify-content: space-between; /* Posisikan elemen di kiri dan kanan */
        text-align: center;
        padding: 20px;
       border-bottom-left-radius: 20px;
       border-bottom-right-radius: 20px;
       padding-top: 30px;
    }

    .header-name h3 {
        font-size: 15px;
        margin-top: 10px;
    }

    .home-header img {
        width: 150px; /* Sesuaikan ukuran gambar */
        height: auto;
    }
    .wallet-container {
        display: flex;
        align-items: center;
        gap: 20px; /* Jarak antara elemen */
    }
    .wallet-container img {
        width: 25px; /* Sesuaikan ukuran gambar wallet */
        height: auto;
    }

    .left-wallet img {
        width: 15px; /* Ukuran lebih kecil untuk left arrow */
        height: auto;
    }

    .wallet-container h3 {
        color: white;
        font-family: 'Poppins', sans-serif;
        font-size: 15px; /* Sesuaikan ukuran font */
        margin: 0;
    }

    .main-container {
        padding: 10px;
        margin: 10px;
        padding-bottom: 80px; /* Tambahkan padding-bottom untuk memberi ruang footer */
    }

    .container-welcome {
        padding: 10px;
        margin-top: 20px;
    }

    .container-welcome h3 {
        color: black;
        font-family: 'Poppins', sans-serif;
        font-size: 14px; /* Sesuaikan ukuran font */
    }

    .container-welcome h2 {
        color: black;
        font-family: 'Poppins', sans-serif;
        font-size: 24px; /* Sesuaikan ukuran font */
    }

    .menu-container {
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
        color: black;
        border-radius: 10px;
        display: flex;
        justify-content: flex-start; /* Posisikan konten ke kiri */
        align-items: center;
        height: 100px; /* Sesuaikan tinggi */
        margin-top: 15px; /* Sesuaikan margin */
        padding: 15px; /* Sesuaikan padding */
        gap: 15px; /* Jarak antara icon dan teks */
    }

    .img-menu {
        width: 60px; /* Sesuaikan ukuran gambar */
        height: 60px;
        margin-left: 10px; /* Sesuaikan margin */
    }

    .judul-menu {
        font-size: 16px; /* Sesuaikan ukuran font */
        font-weight: 600;
        text-align: left;
        margin: 0; /* Hilangkan margin default */
    }

    .lihatproduk {
        display: flex;
        align-items: center; /* Agar elemen sejajar vertikal */
        justify-content: flex-end; /* Posisikan elemen ke kanan */
        gap: 10px; /* Jarak antara elemen */
    }

    .lihatproduk div {
        width: 100%; /* Garis memanjang dari kiri ke kanan */
        height: 1px; /* Ketebalan garis */
        background-color: black; /* Warna garis */
    }
    .footer-dashboard {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        max-width: 1205px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        padding: 10px;
        background-color: #0148A8;
        border-radius: 30px 30px 0px 0px;
        z-index: 1000;
        box-sizing: border-box;
    }

    .icon-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 1;
    }
   

        .icon {
        color: white;
        font-size: 25px; /* Sesuaikan ukuran icon */
        cursor: pointer;
    }


    .search-container {
        padding: 10px;
        margin: 10px 0;
    }

    .search-input {
        width: 100%; /* Lebar penuh */
        padding: 10px 15px; /* Padding untuk input */
        border: 1px solid #ccc; /* Border input */
        border-radius: 20px; /* Border radius */
        font-family: 'Poppins', sans-serif;
        font-size: 14px; /* Ukuran font */
        outline: none; /* Hilangkan outline saat focus */
    }

    .search-input::placeholder {
        color: #999; /* Warna placeholder */
    }

    .smartphone-container {
        padding: 10px;
        text-align: center; /* Pusatkan teks */
    }

    .smartphone-container h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        color: #555;
    }
    .icon-footer{
            width: 34px;
            height: 31px;
        }
}
    @media (min-width: 1025px) {
        .container {
            background-color: white;
            background-size: 100% auto;
            background-position: top center;
            background-repeat: no-repeat;
            padding: 0px 0px;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            max-width: 1200px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            border-radius: 10px;
        }

        .home-header {
            background-color: #0148A8;
            align-items: center;
            justify-content: space-around;
            align-content: center;
            display: flex;
            padding: 20px;
            gap: 10px;

            border-bottom-left-radius: 20px;
       border-bottom-right-radius: 20px;
       padding-top: 30px;
        }

        .main-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px;
        gap: 30px;
        padding-bottom: 100px; /* Tambahkan padding-bottom untuk memberi ruang footer */
    }

        .container-welcome {
            color: black;
            text-align: left;
            margin-bottom: 30px;
            padding-left: 10px;
        }

        .wallet-container {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
        }

        .wallet-container img {
            width: 30px;
            height: auto;
            margin-top: 0;
        }

        .wallet-container h3 {
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
            margin: 0;
        }

        .wallet-container img[aria-label="left-arrow"] {
            width: 15px;
            height: auto;
        }

        .menu-container {
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    color: black;
    border-radius: 10px;
    display: flex;
    justify-content: flex-start; /* Posisikan konten ke kiri */
    align-items: center;
    height: 120px;
    margin-top: 20px;
    padding: 20px; /* Tambahkan padding agar tidak terlalu mepet */
    gap: 20px; /* Jarak antara icon dan teks */
}
.judul-menu {
    font-size: 20px;
    font-weight: 600;
    text-align: left;
    margin: 0; /* Hilangkan margin default */
}
        .img-menu {
    width: 80px;
    height: 80px;
    margin-left: 10px; /* Sesuaikan margin */
}

        #menu1-content a {
            color: #AD6163;
        }

        #menu2-content a {
            color: #6EB2B0;
        }

       
        .footer-dashboard {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 50px;
        padding: 10px;
        background-color: #0148A8;
        border-radius: 30px 30px 0px 0px;
        z-index: 1000;
        box-sizing: border-box;
    }


        .icon-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
        }

        .icon {
            color: white;
            font-size: 30px;
            cursor: pointer;
        }

        .lihatproduk-container {
            padding: 10px;
            /* Hapus display: flex; */
            display: block; /* Gunakan block agar elemen tidak sejajar horizontal */
        }

        .lihatproduk {
    display: flex;
    align-items: center; /* Agar elemen sejajar vertikal */
    justify-content: flex-end; /* Posisikan elemen ke kanan */
    gap: 20px; /* Jarak antara elemen */
}

.lihatproduk div {
    width: 100%; /* Garis memanjang dari kiri ke kanan */
    height: 1px; /* Ketebalan garis */
    background-color: black; /* Warna garis */
}

.search-container {
        max-width: 800px; /* Lebar maksimum search container */
        margin: 20px auto; /* Pusatkan search container */
        padding: 10px;
    }

    .search-input {
        width: 100%; /* Lebar penuh */
        padding: 12px 20px; /* Padding untuk input */
        border: 1px solid #ccc; /* Border input */
        border-radius: 20px; /* Border radius */
        font-family: 'Poppins', sans-serif;
        font-size: 16px; /* Ukuran font */
        outline: none; /* Hilangkan outline saat focus */
    }

    .search-input::placeholder {
        color: #999; /* Warna placeholder */
    }

    .smartphone-container {
        padding: 20px;
        text-align: center; /* Pusatkan teks */
    }

    .smartphone-container h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        color: #555;
    }


        .menu {
            /* Hapus display: flex; */
            display: block; /* Gunakan block agar elemen tidak sejajar horizontal */
        }

        .icon-footer{
            width: 34px;
            height: 31px;
        }
    }
</style>
<div class="container">
    <div class="home-header">
        <div class="header-name">
            <h3 style="font-family: 'Poppins', sans-serif; color:white;">Hi, Fadhlan Himawan</h3>
        </div>

        <div class="wallet-container">
            <img src="assets/img/icon/dompet.png" alt="Wallet">
            <h3 style="color: white; font-family:'Poppins', sans-serif; font-size : 18px;">Rp 0</h3>
            <a href="<?= base_url('Saldo')?>" class="left-wallet">
                <img src="assets/img/icon/Vector.png" aria-label="left-arrow">
            </a>
        </div>
    </div>

    <!-- PRODUK SMARTPHONE DI TAMPILKAN -->
    <div class="search-container">
        <input type="text" placeholder="Cari smartphone..." class="search-input">
    </div>
    <div class="smartphone-container">
        <h3>Belum ada list smartphone....</h3>
    </div>
    
    <div class="main-container">
        <div class="lihatproduk-container">
            <div class="lihatproduk">
                <div></div> <!-- Garis horizontal -->
                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; margin: 0; padding: 0;">Lihat Semua Produk</p>
                <a href="<?= base_url('Produk'); ?>">
                    <img src="assets/img/icon/right-arrow.png" alt="icon_lihat_produk" height="20">
                </a>
            </div>
            <div class="menu">
                <div>
                    <a style="text-decoration:none; color:black;" href="<?= base_url('giftcard'); ?>">
                        <div class="menu-container">
                            <div>
                                <img class="img-menu" src="assets/img/icon/giftcard.png">
                            </div>
                            <p class="judul-menu">Gift Card</p>
                        </div> 
                    </a>
                
                    <a style="text-decoration:none; color:black;" href="<?= base_url('Misilevel') ?>">
                        <div class="menu-container">
                            <div>
                                <img class="img-menu" src="assets/img/icon/misilevel.png">
                            </div>
                            <p class="judul-menu">Misi Level</p>
                        </div>
                    </a>

                    <a style="text-decoration:none; color:black;" href="<?= base_url('Tentang') ?>">
                        <div class="menu-container">
                            <div>
                                <img class="img-menu" src="assets/img/icon/logo2.png">
                            </div>
                            <p class="judul-menu">Tentang Kami</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
     

        <div class="footer-dashboard">
            <div class="icon-container">
                <i class="fas fa-home icon"></i>
            </div>
            <div class="icon-container">
                <a href="https://wa.me/6281319456595">
                    <img class="icon-footer" src="assets/img/icon/cs.png" alt="icon-cs">
                </a>
            </div>
            <div class="icon-container">
                <a href="<?= base_url('profile'); ?>"> <i class="fas fa-user-circle icon"></i></a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // JavaScript untuk membuat slider otomatis
    var myCarousel = document.querySelector('#carouselExample');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000, // Set waktu pergeseran otomatis (3000ms = 3 detik)
        wrap: true, // Membuat slider kembali ke awal setelah gambar terakhir
        pause: 'hover' // Pause otomatis ketika mouse mengarah ke slider
    });
</script>