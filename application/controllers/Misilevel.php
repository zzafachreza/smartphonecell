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

    .search-input {
        width: 100%; /* Full width */
        padding: 10px 15px; /* Padding for input */
        border: 1px solid #ccc; /* Input border */
        border-radius: 20px; /* Border radius */
        font-family: 'Poppins', sans-serif;
        font-size: 14px; /* Font size */
        outline: none; /* Remove outline on focus */
    }

    .misi-level-container {
        padding: 10px;
    }

 
    .level-btn-contianer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px; /* Jarak antara tombol */
        padding: 10px;
    }
    .level-btn {
        background-color: #f0f0f0;
        color: black;
        border-radius: 10px;
        padding: 10px 20px; /* Padding lebih besar */
        text-align: center;
        font-size: 16px; /* Ukuran font lebih besar */
        flex: 1; /* Membagi ruang secara merata */
        text-decoration: none; /* Hilangkan underline pada link */
        min-width: 150px; /* Lebar minimum untuk tombol */
    }

    .level-btn-all {
        background-color: #0148A8;
        color: white;
        border-radius: 50px;
        padding: 10px 20px;
        text-align: center;
        font-size: 16px;
        margin: 10px 0;
        display: block;
        width: 100%;
        text-decoration: none; /* Hilangkan underline pada link */
    }

    .level-btn h3 {
        margin: 0;
        font-size: 16px; /* Ukuran font yang konsisten */
    }

    .level-btn-all h3 {
        color: white;
        font-size: 16px;
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
        .level-btn-contianer {
            flex-direction: row; /* Tetap menggunakan flexbox horizontal di mobile */
            gap: 10px; /* Jarak antara tombol */
        }

        .level-btn,
        .level-btn-all {
            width: auto; /* Lebar menyesuaikan konten */
            padding: 8px 15px; /* Padding lebih kecil */
            font-size: 14px; /* Ukuran font lebih kecil */
            min-width: 120px; /* Lebar minimum untuk mobile */
        }

        
        .level-btn h3 {
            font-size: 14px; /* Ukuran font lebih kecil */
      
        }

        .level-btn-all h3{
            font-size: 14px; /* Adjust font size for small screens */
            color: white;
        }
    }
</style>

<header>
    <nav>
        <a class="header-btn-back" href="<?= base_url('Dashboard') ?>">
            <img class="arrow-left" src="assets/img/icon/left-arrow.png" alt="arrow-back">
        </a>
        <h3 class="header-title">Misi Level</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>

<div class="container">
    <!-- List Misi Level -->
    <div class="misi-level-container">
        <div class="level-container">
            <div class="level-btn-contianer">
                <a href="">
                    <div class="level-btn">
                        <h3 >Level</h3>
                    </div>
                </a>

                <a href="">
                    <div class="level-btn">
                        <h3>Riwayat Penyelesaian</h3>
                    </div>
                </a>
            </div>

            <!-- ALL Level -->
            <a href="<?php echo base_url('misilevel/level') ?>">
                <div class="level-btn-all">
                    <h3>Level 1</h3>
                </div>
            </a>
        </div>
    </div>
</div>