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

.payment-img {
    width: 192px;
    height: 61px;
}

.img-container {
    align-items: center;
    padding: 10px;
    justify-content: center;
    display: flex;
}


.no-rek {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px; /* Jarak antara teks dan ikon */
    margin-top: 10px;
    font-size: 16px;
    color: black;
}

.copy-icon {
    width: 20px;
    height: 20px;
    cursor: pointer;
}

.copy-icon:hover {
    opacity: 0.7; /* Efek hover pada ikon */
}

.upload-container {
    margin-top: 20px;
    text-align: center;
}

.upload-box {
    width: 200px;
    height: 200px;
    border: 2px dashed #0148A8; /* Border putus-putus */
    border-radius: 10px; /* Border radius 10px */
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin: 0 auto; /* Tengah secara horizontal */
    position: relative;
    overflow: hidden; /* Agar gambar preview tidak keluar dari border */
}

.upload-box:hover {
    border-color: #003366; /* Warna border saat hover */
}

.upload-icon {
    width: 50px;
    height: 50px;
    opacity: 0.7; /* Opacity ikon */
}

.upload-input {
    display: none; /* Sembunyikan input file default */
}

.preview-img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Gambar menyesuaikan ukuran container */
    border-radius: 10px; /* Border radius untuk gambar */
    display: none; /* Sembunyikan preview awal */
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
        <a class="header-btn-back" href="<?= base_url('Saldo/isisaldo') ?>">
            <img class="arrow-left" src="../assets/img/icon/left-arrow.png" alt="arrow-back">
        </a>
        <h3 class="header-title">Isi Saldo</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>
<div class="container">
    <!-- Gambar Bank -->
    <div class="img-container">
        <img src="../assets/img/icon/bca.png" alt="bca" class="payment-img">
    </div>

    <!-- Teks Nomor Rekening dan Ikon Copy -->
    <div class="no-rek">
        <span id="nomor-rekening">1234567890</span>
        <img src="../assets/img/icon/copy.png" alt="copy" class="copy-icon" onclick="copyToClipboard()">
    </div>

    <!-- Input Upload Bukti Transfer -->
    <div class="upload-container">
        <label for="bukti-transfer" class="upload-box" id="upload-box">
            <!-- Ikon Upload -->
            <img src="../assets/img/icon/upload.png" alt="upload" class="upload-icon" id="upload-icon">
            <!-- Preview Gambar -->
            <img id="preview-img" class="preview-img" src="#" alt="Preview Gambar">
        </label>
        <input type="file" id="bukti-transfer" class="upload-input" accept="image/*" onchange="previewImage(event)">
    </div>

    <!-- Tombol Submit -->
    <button type="submit" class="btn-submit">Submit</button>
</div>

<script>
    function copyToClipboard() {
        // Ambil teks nomor rekening
        const nomorRekening = document.getElementById('nomor-rekening').innerText;

        // Salin teks ke clipboard
        navigator.clipboard.writeText(nomorRekening)
            .then(() => {
                alert('Nomor rekening berhasil disalin: ' + nomorRekening);
            })
            .catch((err) => {
                console.error('Gagal menyalin teks: ', err);
            });
    }

    function previewImage(event) {
        const input = event.target;
        const previewImg = document.getElementById('preview-img');
        const uploadIcon = document.getElementById('upload-icon');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                previewImg.src = e.target.result;
                previewImg.style.display = 'block'; // Tampilkan gambar
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            };

            reader.readAsDataURL(input.files[0]); // Baca file sebagai URL
        } else {
            previewImg.src = '#';
            previewImg.style.display = 'none'; // Sembunyikan gambar jika tidak ada file
            uploadIcon.style.display = 'block'; // Tampilkan kembali ikon upload
        }
    }
</script>