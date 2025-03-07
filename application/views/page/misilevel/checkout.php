<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        color: black;
    }

    .container {
    padding: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 50vh; /* Agar tombol berada di tengah halaman */
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
    flex-grow: 1; /* Agar title mengambil ruang di tengah */
    text-align: center;
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
        padding: 10px;
    }

    .level-btn {
        background-color: #f0f0f0; /* Warna latar belakang tombol level */
        color: black; /* Warna teks */
        border-radius: 10px; /* Border radius */
        padding: 10px 20px; /* Padding untuk tombol */
        text-align: center; /* Pusatkan teks */
        font-family: 'Poppins', sans-serif;
        font-size: 16px; /* Ukuran font */
        margin: 10px 0; /* Margin atas dan bawah */
        display: inline-block; /* Agar tombol tidak mengambil lebar penuh */
    }

    .level-btn-all {
        background-color: #0148A8; /* Warna latar belakang */
        color: white; /* Warna teks */
        border-radius: 50px; /* Border radius */
        padding: 10px 20px; /* Padding untuk tombol */
        text-align: center; /* Pusatkan teks */
        font-family: 'Poppins', sans-serif;
        font-size: 16px; /* Ukuran font */
        margin: 10px 0; /* Margin atas dan bawah */
        display: block; /* Agar tombol mengambil lebar penuh */
        width: 100%; /* Lebar tombol 100% */
        box-sizing: border-box; /* Pastikan padding tidak memengaruhi lebar */
    }

    .level-btn-all h3 {
        color: white; /* Pastikan teks berwarna putih */
        margin: 0; /* Hilangkan margin default */
    }


    .icon-cart {
        height: 30px;
        width: auto;
    }

    .btn-beli {
    display: block; /* Agar tombol memenuhi lebar container */
    width: 80%; /* Buat tombol selebar container */
    padding: 10px;
    border-radius: 50px;
    text-align: center;
    color: white;
    align-items: center;
    background-color: #0148A8;
    box-sizing: border-box; /* Pastikan padding tidak menambah lebar */
    justify-content: center;
    margin-top: 30px;
    height: 90px;


}

.btn-beli-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;  
}

.title {
    font-family: 'Poppins', sans-serif;
    font-size: 25px;
    text-align: center;
    color: white  ;
    margin-top: 20px;
}

.total-container {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    width: 100%;

}

.title-jumlah {
    color: #0148A8;
    font-weight: 600;
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

        .level-btn {
            font-size: 14px; /* Adjust font size for small screens */
            padding: 8px 16px; /* Adjust padding for small screens */
        }

        .level-btn-all {
            font-size: 14px; /* Adjust font size for small screens */
            padding: 8px 16px; /* Adjust padding for small screens */
        }

        
    .btn-beli {
        width: 90%;
        margin-top: 30px;
        height: 70px;
    }

    .title {
        margin-top: 15px;
        font-size: 15px;
    }

    }
</style>

<header>
    <nav>
        <a class="header-btn-back" href="<?= base_url('Misilevel/bundling') ?>">
            <img class="arrow-left" src="../assets/img/icon/left-arrow.png" alt="arrow-back">
        </a>
        <h3 class="header-title">Checkout</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>

<div class="container">
    <!-- List Misi Level -->
   <h3 style="text-align:center;">Belum ada paket Bundling...</h3>



   <!-- total -->
    <div class="total-container">
       <p class="title-total">Total Pembayaran</p>
       <p class="title-jumlah">Rp 0</p>
    </div>

   <a class="btn-beli">
    <div class="btn-beli-container">
     
        <p class="title">Pembayaran</p>
    </div>
   </a>
</div>