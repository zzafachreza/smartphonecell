<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        color: black;
        box-sizing: border-box; /* Pastikan padding dan border tidak memengaruhi lebar */
    }

    .container {
        padding: 10px;
        width: 100%;
        height: 100%;
    }

    header {
        padding: 10px;
        background-color: #0148A8;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        padding: 10px;
    }

    .header-title {
        color: white;
        font-size: 25px;
        flex-grow: 1;
        text-align: center;
    }

    .arrow-left {
        width: 20px;
        height: 30px;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 500px;
        padding: 15px;
        background-color: #0148A8;
        color: white;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        border-radius: 50px;
        text-align: center;
        text-decoration: none;
        margin: 20px auto;
    }

    .btn-container h3 {
        margin: 0;
        font-size: 18px;
        text-align: center;
        color: white;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    }

    .sponsor-container {
        padding: 10px;
        text-align: center;
        margin-top: 20px;
        align-items: center;
        align-self: center;
    }

    .sponsor-img {
        width: 371px;
        height: 499px;
    }

    .menu-saldo-container {
        padding: 10px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        align-items: center;
        justify-content: space-between;
    }

    .card-row {
        display: flex;
        flex-direction: column; /* Selalu tumpuk card secara vertikal */
        gap: 20px;
        width: 100%;
    }

    .card-menu {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background-color: white;
        border: 1px solid #0148A8;
        border-radius: 10px;
        height: 110px;
        width: 100%; /* Lebar penuh */
    }

    .icon-menu {
        width: 47px;
        height: 52px;
        margin-bottom: 10px;
    }

    .title-menu {
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        text-align: center;
        color: black;
    }
    @media (max-width: 480px) {
        .header-title {
            font-size: 18px;
        }

        .card-row {
            flex-direction: column; /* Tumpuk card secara vertikal di mobile */
            gap: 10px;
        }

        .card-menu {
            width: 100%; /* Lebar penuh di mobile */
        }
    }
</style>


<header>
    <nav>
        <a class="header-btn-back" href="<?= base_url('Dashboard') ?>">
            <img class="arrow-left" src="assets/img/icon/left-arrow.png" alt="arrow-back">
        </a>
        <h3 class="header-title">Informasi Saldo</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>

<div class="container">
    <!-- Container untuk 4 Card -->
    <div class="menu-saldo-container">
        <!-- Baris Pertama (3 Card) -->
        <div class="card-row">
            <a href="<?= base_url('Saldo/isisaldo') ?>">
                <div class="card-menu">
                    <div>
                        <img class="icon-menu" src="assets/img/icon/saldo.png" alt="icon-menu">
                    </div>
                    <div>
                        <h3 class="title-menu">Isi Saldo</h3>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('Saldo/tariksaldo') ?>">
                <div class="card-menu">
                    <div>
                        <img class="icon-menu" src="assets/img/icon/tariksaldo.png" alt="icon-menu">
                    </div>
                    <div>
                        <h3 class="title-menu">Tarik Saldo</h3>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('Saldo/komisi') ?>">
                <div class="card-menu">
                    <div>
                        <img class="icon-menu" src="assets/img/icon/komisi.png" alt="icon-menu">
                    </div>
                    <div>
                        <h3 class="title-menu">Komisi</h3>
                    </div>
                </div>
            </a>
        </div>

        <!-- Baris Kedua (1 Card) -->
        <div class="card-row">
            <a href="<?= base_url('Saldo/riwayattransaksi'); ?>">
                <div class="card-menu">
                    <div>
                        <img class="icon-menu" src="assets/img/icon/riwayat.png" alt="icon-menu">
                    </div>
                    <div>
                        <h3 class="title-menu">Riwayat Transaksi</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>