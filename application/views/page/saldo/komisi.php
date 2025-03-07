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
                font-size: 18px; /* Further reduce font size for very small screens */
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
    </style>


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
            <h3>Uang senilai Rp.345.000</h3>
            <p>Komisimu saat ini</p>
        </div>

        <!-- Total Komisi -->
        <div class="total-komisi">
            <div class="row">
                <div class="left">
                    <p>Total komisi pada 26 Feb</p>
                    <p class="subtext">Dibayarkan pada 26 Feb 2025</p>
                </div>
                <div class="right">
                    +Rp30.000
                </div>
            </div>
        </div>
    </div>