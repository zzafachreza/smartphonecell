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

    .card-level-contianer {
        
        padding: 10px;
        border-radius: 20px;
/*        border: 2px solid black;*/
        width: 100%;
    }

    .card {
        display: flex;
    flex-direction: row;
    justify-content: space-evenly; /* Coba ganti */
    align-items: flex-start;
    gap: 20px;
    padding: 10px;
    border-radius: 10px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
}

.poster-misi {
    width: 150px; /* Lebar gambar */
    height: auto; /* Tinggi disesuaikan secara proporsional */
    border-radius: 10px; /* Border radius untuk gambar */
    flex-shrink: 0; /* Pastikan gambar tidak menyusut */
}

.deks-misi {
    flex: 1; /* Mengisi ruang yang tersedia */
    min-width: 0; /* Pastikan deskripsi tidak memaksa elemen untuk turun ke baris baru */
}

.misi-title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px; /* Jarak antara judul dan list */
    color: #0148A8; /* Warna judul */
}

.list-smatrphone-misi {
    padding: 0;
    margin: 0;
    list-style-type: none; /* Hilangkan bullet points */
}

.list-smartphone {
    font-size: 10px;
    margin-bottom: 5px; /* Jarak antara item list */
    color: #333; /* Warna teks list */
}   

.harga-bundle {
    font-weight: bold;
    font-size: 25px;
    margin-top: 10px;
}

.btn-buy {
    padding: 10px 0; /* Atur padding agar tidak terlalu tinggi */
    border-radius: 10px;
    color: white;
    width: 200px; /* Atur sesuai keinginan */
    max-width: 100%; /* Pastikan tombol tidak melebihi container */
    background-color: #0148A8;
    text-align: center; /* Pastikan teks berada di tengah */
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    margin-left: -5px;
}
.teks-btn-buy {
    color: white;
    font-family: 'Poppins', sans-serif;
    font-size: 14px; /* Sesuaikan agar tidak terlalu kecil */

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
            font-size: 11px; /* Further reduce font size for list items */
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

        .card {
    display: flex; /* Mengaktifkan flexbox */
    align-items: center; /* Elemen sejajar di bagian atas */
    gap: 20px; /* Jarak antara poster dan deskripsi */
    padding: 10px;
    border-radius: 10px;
    background-color: #f9f9f9; /* Warna latar belakang card */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek shadow */
   flex-direction: row;
    justify-content: space-around;
}
.poster-misi {
    width: 100%; /* Lebar penuh */
    max-width: 100px; /* Batasi lebar maksimum */
    height: auto; /* Tinggi disesuaikan secara proporsional */
    border-radius: 10px; /* Border radius untuk gambar */
    
}

.deks-misi {
    flex: 1; /* Mengisi ruang yang tersedia */
    min-width: 0; /* Pastikan deskripsi tidak memaksa elemen untuk turun ke baris baru */
}
    }
</style>
<header>
    <nav>
        <a class="header-btn-back" href="<?= base_url('misilevel') ?>">
            <img class="arrow-left" src="<?php echo site_url('assets/img/icon/left-arrow.png') ?>" alt="arrow-back">
            
        </a>
        <h3 class="header-title">Gift Card</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>

<div class="container">
    <!-- Card Misi -->
    <?php

    $level = $this->uri->segment(3);
    $sql="SELECT * FROM data_voucher";

    foreach ($this->db->query($sql)->result() as $r) {



            // cek 

            $cek = $this->db->query("SELECT * FROM data_beli a JOIN data_paket b ON a.fid_paket = b.id_paket WHERE a.fid_pengguna='".$_SESSION['id_pengguna']."' AND b.level='".$r->level."'")->num_rows();


             $cek2 = $this->db->query("SELECT * FROM data_claim WHERE fid_pengguna='".$_SESSION['id_pengguna']."' AND fid_voucher='".$r->id_voucher."'")->num_rows();


        ?>

        <div class="card mt-2">

        <div>
       <img src="<?php echo urladmin().$r->gambar_voucher ?>">
            
            <!-- Deskripsi Misi -->
            <div class="deks-misi">
                <h3 class="misi-title"><?php echo $r->nama_voucher ?></h3>
                <p class="text-primary">Level <?php echo $r->level ?></p>
               

                <!-- HARGa -->
                    <?php if($cek>0 && $cek2==0){ ?>

                 
                    <a href="<?= base_url('saldo/claim/'.$r->id_voucher);  ?>" class="btn-buy">
                        <div class="teks-btn-buy">Claim Voucher</div>
                    </a>
                <?php } ?>

                 <?php if($cek==0){ ?>
                        <p class="text-secondary">Ayo tingkatkan levelmu</p>
                <?php } ?>

                 <?php if($cek2>0){ ?>
                        <p class="text-success">Berhasil</p>
                <?php } ?>
            </div>
        </div>


    </div>

    <?php  } ?>



</div>