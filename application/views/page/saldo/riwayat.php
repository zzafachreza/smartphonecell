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

        .saldo-card {
            background-color: #0148A8;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .saldo-card h3 {
            font-size: 20px;
            color: white;
            margin-bottom: 10px;
        }

        .saldo-info {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .saldo-info img {
            width: 24px;
            height: 24px;
        }

        .saldo-info p {
            font-size: 18px;
            color: white;
            margin: 0;
        }

        .tab-navigator {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .tab-navigator button {
            background: none;
            border: none;
            font-size: 16px;
            color: #0148A8;
            cursor: pointer;
            padding: 10px;
            flex: 1;
            text-align: center;
        }

        .tab-navigator button.active {
            border-bottom: 2px solid #0148A8;
            font-weight: bold;
        }

        .content {
            display: none; /* Sembunyikan semua konten secara default */
        }

        .content.active {
            display: block; /* Tampilkan konten yang aktif */
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

        .tanggal-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .tanggal-container p {
            font-size: 14px;
            color: #333;
            margin: 0;
        }

        .garis-panjang {
            flex-grow: 1;
            height: 1px;
            background-color: #ccc;
        }

        @media (max-width: 480px) {
            .saldo-card h3 {
                font-size: 15px; /* Ukuran font lebih kecil untuk mobile */
            }

            .saldo-info p {
                font-size: 14px; /* Ukuran font lebih kecil untuk mobile */
            }

            .tab-navigator button {
                font-size: 14px; /* Ukuran font lebih kecil untuk mobile */
            }

            .riwayat-item .info h4 {
                font-size: 14px; /* Ukuran font lebih kecil untuk mobile */
            }

            .riwayat-item .right h4 {
                font-size: 14px; /* Ukuran font lebih kecil untuk mobile */
            }

            .tanggal-container p {
                font-size: 12px; /* Ukuran font lebih kecil untuk mobile */
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a class="header-btn-back" href="<?= base_url('Saldo') ?>">
                <img class="arrow-left" src="../assets/img/icon/left-arrow.png" alt="arrow-back">
            </a>
            <h3 class="header-title">Riwayat Transaksi</h3>
            <div style="padding: 10px;"></div>
        </nav>
    </header>

    <div class="container">
        <!-- Card Saldomu -->
        <div class="saldo-card">
            <h3>Saldomu</h3>
            <div class="saldo-info">
                <img src="../assets/img/icon/dompet.png" alt="wallet">
                <p>Rp.0</p>
            </div>
        </div>

        <!-- Tab Navigator -->
        <div class="tab-navigator">
            <button class="tab-button active" data-tab="isi-saldo">Isi Saldo</button>
            <button class="tab-button" data-tab="tarik-saldo">Tarik Saldo</button>
            <button class="tab-button" data-tab="refund">Refund</button>
        </div>

        <!-- Konten Isi Saldo -->
        <div id="isi-saldo" class="content active">
            <div class="tanggal-container">
                <p>26 Februari 2025</p>
                <div class="garis-panjang"></div>
            </div>
            <div class="riwayat-item">
                <div class="left">
                    <div class="icon">
                        <img src="../assets/img/icon/dompet.png" alt="wallet">
                    </div>
                    <div class="info">
                        <h4>Isi Saldo</h4>
                        <p>26 Feb 2024</p>
                    </div>
                </div>
                <div class="right">
                    <h4>+Rp1000.00</h4>
                    <p>Proses</p>
                </div>
            </div>
        </div>

        <!-- Konten Tarik Saldo -->
        <div id="tarik-saldo" class="content">
            <div class="tanggal-container">
                <p>27 Februari 2025</p>
                <div class="garis-panjang"></div>
            </div>
            <div class="riwayat-item">
                <div class="left">
                    <div class="icon2">
                        <img src="../assets/img/icon/tarik.png" alt="wallet">
                    </div>
                    <div class="info">
                        <h4>Tarik Saldo</h4>
                        <p>27 Feb 2024</p>
                    </div>
                </div>
                <div class="right">
                    <h4>-Rp500.00</h4>
                    <p>Selesai</p>
                </div>
            </div>
        </div>

        <!-- Konten Refund -->
        <div id="refund" class="content">
            <div class="tanggal-container">
                <p>28 Februari 2025</p>
                <div class="garis-panjang"></div>
            </div>
            <div class="riwayat-item">
                <div class="left">
                    <div class="icon3">
                        <img src="../assets/img/icon/refund.png" alt="wallet">
                    </div>
                    <div class="info">
                        <h4>Refund</h4>
                        <p>28 Feb 2024</p>
                    </div>
                </div>
                <div class="right">
                    <h4>+Rp200.00</h4>
                    <p>Proses</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk mengaktifkan tab dan menampilkan konten yang sesuai
        function openTab(evt, tabName) {
            // Sembunyikan semua konten
            const contents = document.querySelectorAll('.content');
            contents.forEach(content => {
                content.classList.remove('active');
            });

            // Hapus class 'active' dari semua tombol tab
            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach(button => {
                button.classList.remove('active');
            });

            // Tampilkan konten yang sesuai dan aktifkan tombol tab
            document.getElementById(tabName).classList.add('active');
            evt.currentTarget.classList.add('active');
        }

        // Tambahkan event listener ke setiap tombol tab
        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach(button => {
            button.addEventListener('click', (evt) => {
                const tabName = evt.currentTarget.getAttribute('data-tab');
                openTab(evt, tabName);
            });
        });
    </script>