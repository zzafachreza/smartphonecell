<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        color: black;
     
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
    width: 90%;
    max-width: 300px; /* Agar tombol tidak terlalu lebar di layar besar */
    padding: 15px; /* Tambahkan padding agar tidak gepeng */
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

.syarat-container {
    padding: 10px;
}

.visi-container {
    padding: 20px;
}

.visi-list {
    list-style-type: decimal;
    text-align: justify;
}

.misi-container {
    padding: 20px;
}

.misi-list {
    list-style-type: decimal;
    text-align: justify;
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
        <a class="header-btn-back" href="<?= base_url('Tentang') ?>">
            <img class="arrow-left" src="../assets/img/icon/left-arrow.png" alt="arrow-back">
        </a>
        <h3 class="header-title">Syarat & Ketentuan</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>

<div class="container">


<!-- SPONSOR -->

<div class="syarat-container">

<h3 style="font-family: 'Poppins', sans-serif;">Syarat & Ketentuan</h3>
<div class="visi-container">
    <p style="text-align: justify;">Kebijakan Privasi ini bertujuan untuk membantu Anda memahami informasi yang kami kumpulkan, alasan kami mengumpulkannya, dan cara untuk memperbarui, mengelola, mengekspor, dan menghapus informasi Anda</p>
    <ul class="visi-list">
        <li class="visi">Pernyataan<br>
Dengan melanjutkan akses atau penggunaan terhadap aplikasi SMARTPHONECELL , pengguna setuju untuk tunduk dan mematuhi semua ketentuan peraturan perundang-undangan terkait dan ketentuan penggunaan ini, termasuk semua perubahannya dan ketentuan penggunaan dari setiap layanan dan konten. Segera hentikan akses atau penggunaan WEBSITE kami, jika pengguna tidak setuju dengan bagian apapun dari ketentuan penggunaan ini.
</li>
<br>
        <li  class="visi">Akun dan Keanggotaan<br>
        Jika Anda membuat akun di situs web kami, Anda bertanggung jawab untuk menjaga keamanan akun Anda dan Anda bertanggung jawab penuh atas semua aktivitas yang terjadi di bawah akun dan tindakan apa pun yang diambil sehubungan dengan itu. Kami dapat, tetapi tidak memiliki kewajiban untuk, memantau dan meninjau akun baru sebelum Anda dapat masuk dan menggunakan Layanan Kami. Anda harus segera memberitahu Kami tentang segala penggunaan akun Anda yang tidak sah atau pelanggaran keamanan lainnya. Kami tidak akan bertanggung jawab atas tindakan atau kelalaian yang disebabkan oleh Anda, termasuk kerusakan apa pun yang timbul sebagai akibat dari tindakan atau kelalaian tersebut. Kami dapat menangguhkan, menonaktifkan, atau menghapus akun Anda jika Kami memutuskan bahwa Anda telah melanggar ketentuan dalam Perjanjian ini. Jika Kami menghapus akun Anda karena alasan di atas, Anda tidak boleh mendaftar ulang untuk Layanan Kami. Kami dapat memblokir alamat email Anda dan alamat protokol internet untuk mencegah pendaftaran lebih lanjut.</li>
        <br>
        <li class="visi">Penggunaan yang Dilarang
        Selain persyaratan lain sebagaimana diatur dalam Perjanjian ini, Anda dilarang menggunakan situs web atau kontennya:
        <ul style="list-style: lower-alpha; text-align: justify;">
        <li style="font-family: 'Poppins', sans-serif;">untuk tujuan apa pun yang melanggar hukum;</li>
        <li style="font-family: 'Poppins', sans-serif;">untuk meminta orang lain untuk melakukan atau berpartisipasi dalam tindakan yang melanggar hukum;</li>
        <li style="font-family: 'Poppins', sans-serif;">melanggar peraturan atau hukum nasional;</li>
        <li style="font-family: 'Poppins', sans-serif;">untuk melanggar hak kekayaan intelektual Kami atau hak kekayaan intelektual orang lain;</li>
        <li style="font-family: 'Poppins', sans-serif;">untuk mengirimkan informasi yang salah atau menyesatkan;</li>
        <li style="font-family: 'Poppins', sans-serif;">untuk mengunggah atau mengirimkan virus atau segala jenis malicious code lainnya yang akan atau dapat digunakan dengan cara apa pun yang akan memengaruhi fungsionalitas atau operasi Layanan atau situs web terkait, situs web lain, atau internet</li>
    </ul>
    </li>
    <li style="font-family: 'Poppins', sans-serif;">Hak kekayaan intelektual<br>
    Perjanjian ini tidak menyerahkan kepada Anda segala bentuk kekayaan intelektual yang dimiliki oleh Operator situs web atau pihak ketiga. Semua hak, judul, kepentingan dan properti tersebut akan tetap (di antara para pihak) semata-mata dimiliki oleh Operator situs web. Semua merek handphone, merek Layanan, grafik, dan logo yang digunakan sehubungan dengan situs web atau Layanan Kami, adalah merek dagang atau merek dagang terdaftar dari Operator situs web atau pemberi lisensi Operator situs web. Merek dagang, tanda Layanan, gambar dan logo lain yang digunakan sehubungan dengan situs web atau Layanan Kami mungkin merupakan bagian dari pihak ketiga lainnya. Penggunaan Anda atas situs web dan Layanan Kami tidak memberikan Anda hak atau lisensi untuk memproduksi atau menggunakan situs web atau merek dagang pihak ketiga mana pun.</li>
    <br>
    <li style="font-family: 'Poppins', sans-serif;">Penerimaan persyaratan ini<br>
    Anda memahami bahwa Anda telah membaca Perjanjian ini dan menyetujui semua syarat dan ketentuannya. Dengan menggunakan situs web atau Layanannya, Anda setuju untuk terikat Perjanjian ini. Jika Anda tidak setuju untuk mematuhi ketentuan Perjanjian ini, Anda tidak berwenang untuk menggunakan atau mengakses situs web dan Layanannya.</li>
    <br>
    <li style="font-family: 'Poppins', sans-serif;">Perubahan pada Persyaratan ini<br>
    Kami dapat memperbarui Perjanjian ini dari waktu ke waktu. Dengan demikian, Anda disarankan untuk meninjau halaman ini secara berkala untuk setiap perubahan. Kami akan memberitahukan Anda tentang perubahan apapun dengan mengumumkan Perjanjian baru di situs web ini.</li>
    <br>
</ul>

   
</div>



</div>




</div>