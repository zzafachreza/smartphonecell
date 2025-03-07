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

.visimisi-container {
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
        <h3 class="header-title">Visi & Misi</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>

<div class="container">


<!-- SPONSOR -->

<div class="visimisi-container">

<h3 style="font-family: 'Poppins', sans-serif;">Visi</h3>
<div class="visi-container">
    <ul class="visi-list">
        <li class="visi">Mengembangkan toko ritel smartphone modern dengan konsep pameran untuk memberikan pelayanan yang terbaik, didukung oleh sumber daya manusia yang kompeten dan mitra bisnis profesional untuk menambah kepuasan konsumen.</li>
        <li  class="visi">Berkontribusi secara signifikan terhadap perkembangan ekonomi dan pemerataan kekayaan di Indonesia melalui aktivitas e-commerce</li>
        <li class="visi">Menjadikan Indonesia sebagai basis ekonomi digital terbesar di Asia Tenggara.</li>
    </ul>
</div>


<h3 style="font-family: 'Poppins', sans-serif;">Misi</h3>
<div class="misi-container">
    <ul class="misi-list">
        <li class="misi">Meningkatkan penjualan (melalui Pengembangan sistem distribusi, promosi, dan penjualan yang lebih luas). </li>
        <li  class="misi">Memberikan nilai tambah (value added) kepada pelanggan (memberi pelanggan manfaat ekstra melalui sistem online)</li>
    </ul>
</div>

</div>




</div>