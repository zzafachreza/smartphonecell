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

    .input-container {
        margin-bottom: 20px; /* Jarak antara input */
    }
    .input-label-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px; /* Jarak antara label dan input */
}

.info-text {
    font-size: 14px;
    color: #0148A8; /* Warna biru */
    cursor: pointer;
    text-decoration: none; /* Garis bawah untuk efek klik */
}

.info-text:hover {
    opacity: 0.8; /* Efek hover */
}

    .input-label {
        font-size: 16px;
        margin-bottom: 8px; /* Jarak antara label dan input */
        display: block;
        color: black;
    }

    .input-field {
        width: 100%;
        padding: 12px 20px;
        border: 1px solid black;
        border-radius: 50px;
        font-size: 16px;
        outline: none; /* Hilangkan outline saat input aktif */
    }


    .select-field {
    width: 100%;
    padding: 12px 20px;
    border: 1px solid black;
    border-radius: 50px;
    font-size: 16px;
    outline: none; /* Hilangkan outline saat select aktif */
    appearance: none; /* Hilangkan tampilan default dropdown */
    background-color: white;
    cursor: pointer;
}

/* Tambahkan ikon panah ke select */
.select-container {
    position: relative;
}

.select-container::after {
    content: "▼";
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    pointer-events: none; /* Agar ikon tidak mengganggu klik select */
    color: black;
}


.btn-submit {
    width: 100%;
    padding: 15px 20px;
    background-color: #0148A8; /* Warna biru */
    color: white; /* Warna teks putih */
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    border: none;
    border-radius: 20px; /* Border radius 20px */
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    display: block;
    margin-top: 20px; /* Jarak dari elemen di atasnya */
}

.btn-submit:hover {
    background-color: #003366; /* Warna biru lebih gelap saat hover */
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
    }
</style>

<header>
    <nav>
        <a class="header-btn-back" href="<?= base_url('Saldo') ?>">
            <img class="arrow-left" src="../assets/img/icon/left-arrow.png" alt="arrow-back">
        </a>
        <h3 class="header-title">Tarik Saldo</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>
<div class="container">
    <!-- Container untuk Input Jumlah Saldo -->
    <div class="input-container">
        <div class="input-label-container">
            <label for="jumlah-saldo" class="input-label">Input Jumlah Saldo</label>
            <span class="info-text">Gunakan Informasi Akun</span>
        </div>
        <input type="number" id="jumlah-saldo" class="input-field" placeholder="Masukkan jumlah saldo">
    </div>

    <!-- Select untuk Pilih Bank -->
    <div class="input-container">
        <label for="pilih-bank" class="input-label">Pilih Bank</label>
        <div class="select-container">
            <select id="pilih-bank" class="select-field">
                <option value="" disabled selected>Pilih Bank</option>
                <option value="BCA">Bank Central Asia (BCA)</option>
                <option value="BNI">Bank Negara Indonesia (BNI)</option>
                <option value="Muamalat">Bank Muamalat</option>
            </select>
        </div>
    </div>

    <!-- Input Nomor Rekening -->
    <div class="input-container">
        <label for="nomor-rekening" class="input-label">Input Nomor Rekening</label>
        <input type="number" id="nomor-rekening" class="input-field" placeholder="Masukkan nomor rekening">
    </div>

    <!-- Tombol Submit -->
    <button  type="submit" class="btn-submit">Kirim</button>
</div>