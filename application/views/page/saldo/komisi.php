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
            font-size: 16px;
            flex-grow: 1; /* Allow title to take available space */
            text-align: center; /* Center title */
        }

        .arrow-left {
            width: 20px;
            height: 30px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%; /* Lebar penuh */
            max-width: 500px; /* Lebar maksimum untuk desktop */
            padding: 15px; /* Padding agar tombol tidak gepeng */
            background-color: #0148A8;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            border-radius: 50px;
            text-align: center;
            text-decoration: none; /* Hilangkan underline pada <a> */
            margin: 20px auto; /* Tengah tombol secara horizontal */
        }

        .btn-container h3 {
            margin: 0; /* Hilangkan margin default dari <h3> */
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

        .saldo-info {
            text-align: center;
            margin-top: 20px;
        }

        .saldo-info h3 {
            font-size: 24px;
            color: #0148A8;
            margin-bottom: 10px;
        }

        .saldo-info p {
            font-size: 16px;
            color: #333;
        }

        .total-komisi {
            margin-top: 20px;
            padding: 10px 0;
            border-top: 1px solid #ccc; /* Garis horizontal */
            border-bottom: 1px solid #ccc; /* Garis horizontal */
        }

        .total-komisi .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .total-komisi .row .left {
            font-size: 14px;
            color: #333;
        }

        .total-komisi .row .right {
            font-size: 16px;
            color: #0148A8;
            font-weight: bold;
        }

        .total-komisi .row .subtext {
            font-size: 12px;
            color: #777;
        }

        @media (max-width: 480px) {
            .header-title {
                font-size: 16px; /* Further reduce font size for very small screens */
                text-align: center; /* Center title */
            }

            .search-input {
                font-size: 10px; /* Further reduce font size for input */
                padding: 6px 10px; /* Further adjust padding */
            }

            .list-smartphone-container h3 {
                font-size: 12px; /* Further reduce font size for list items */
            }

            nav {
                flex-direction: flex; /* Stack items vertically */
                align-items: center; /* Center items horizontally */
                padding: 5px; /* Reduce padding for nav */
            }

            .header-btn-back {
                margin-bottom: 5px; /* Add space below the back button */
            }

            .arrow-left {
                width: 16px; /* Adjust arrow size for small screens */
                height: 24px; /* Adjust arrow size for small screens */
            }
            .saldo-info h3 {
                font-size: 20px; /* Ukuran font lebih kecil untuk mobile */
            }

            .saldo-info p {
                font-size: 14px; /* Ukuran font lebih kecil untuk mobile */
            }

            
            .total-komisi .row .left {
                font-size: 12px; /* Ukuran font lebih kecil untuk mobile */
            }

            .total-komisi .row .right {
                font-size: 14px; /* Ukuran font lebih kecil untuk mobile */
            }

            .total-komisi .row .subtext {
                font-size: 10px; /* Ukuran font lebih kecil untuk mobile */
            }

            .container {
                padding: 5px; /* Padding lebih kecil untuk mobile */
            }

            .total-komisi {
                margin-top: 10px; /* Margin lebih kecil untuk mobile */
                padding: 20px; /* Padding lebih kecil untuk mobile */

            }
        }


        .riwayat-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }

        .riwayat-item .left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .riwayat-item .icon {
            width: 40px;
            height: 40px;
            background-color: #0148A8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .riwayat-item .icon2 {
            width: 40px;
            height: 40px;
            background-color: #30B800;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .riwayat-item .icon3 {
            width: 40px;
            height: 40px;
            background-color: #FFB800;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .riwayat-item .icon img {
            width: 24px;
            height: 24px;
        }

        .riwayat-item .icon2 img {
            width: 24px;
            height: 24px;
        }

        .riwayat-item .icon3 img {
            width: 24px;
            height: 24px;
        }

        .riwayat-item .info h4 {
            font-size: 16px;
            margin: 0;
        }

        .riwayat-item .info p {
            font-size: 12px;
            color: #777;
            margin: 0;
        }

        .riwayat-item .right {
            text-align: right;
        }

        .riwayat-item .right h4 {
            font-size: 16px;
            margin: 0;
        }

        .riwayat-item .right p {
            font-size: 12px;
            color: #FFD700; /* Warna kuning */
            margin: 0;
        }
    </style>
<?php

$hd = $this->db->query("SELECT SUM(nominal) as saldo FROM data_saldo WHERE tipe='Komisi' AND status='Berhasil' AND fid_pengguna='".$_SESSION['id_pengguna']."'")->row_object();



?>

<header>
        <nav>
            <a class="header-btn-back" href="<?= base_url('Saldo') ?>">
                <img class="arrow-left" src="../assets/img/icon/left-arrow.png" alt="arrow-back">
            </a>
            <h3 class="header-title">Komisi</h3>
            <div style="padding: 10px;"></div>
        </nav>
    </header>

    <div class="container">
        <!-- Teks Uang Senilai Rp.345.000 -->
        <div class="saldo-info">
            <h3>Uang senilai Rp.<?php echo number_format($hd->saldo) ?></h3>
            <p>Komisimu saat ini</p>
        </div>

        <!-- Total Komisi -->
        <?php

        foreach ($this->db->query("SELECT * FROM data_saldo WHERE tipe='Komisi' AND status='Berhasil' AND fid_pengguna='".$_SESSION['id_pengguna']."'")->result() as $ko) {
            // code...
        
        ?>
          <div class="riwayat-item">
                <div class="left">
                    <div class="icon">
                        <img src="../assets/img/icon/dompet.png" alt="wallet">
                    </div>
                    <div class="info">
                        <h4>Komisi</h4>
                        <p><?php echo Indonesia3Tgl($ko->tanggal) ?></p>
                    </div>
                </div>
                <div class="right">
                    <h4>+Rp<?php echo number_format($ko->nominal) ?></h4>
                    <?php 
                        $warna = 'yellow'; // Default warna

                        if ($ko->status == 'Berhasil') {
                            $warna = 'green';
                        } elseif ($ko->status == 'Gagal') {
                            $warna = 'red';
                        }
                    ?>

                    <p style="color: <?php echo $warna; ?>;"><?php echo htmlspecialchars($ko->status); ?></p>                </div>
            </div>
        <?Php } ?>
    </div>