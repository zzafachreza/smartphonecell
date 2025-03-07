<style>
    /* General Styles */
    .header {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #172169;
        padding: 20px;
    }

    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .header-title {
        font-size: 22px;
        font-family: 'Poppins', sans-serif;
        color: white;
        font-weight: 600;
        text-align: center;
        margin: 0; /* Menghapus margin default */
    }

    .btn-back img {
        height: 20px;
    }

    .header-spacer {
        width: 20px; /* Memberikan ruang kosong untuk menjaga keseimbangan */
    }

    .card-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px;
        width: 100%; /* Lebar penuh */
        box-sizing: border-box; /* Memastikan padding tidak menambah lebar */
    }
    
    .container-card {
        padding: 15px; /* Padding lebih kecil untuk mobile */
        background-color: transparent;
        border-radius: 10px;
        margin: 10px 0; /* Margin atas dan bawah */
        width: 100%; /* Lebar penuh pada mobile */
        max-width: 460px; /* Maksimum lebar untuk mobile dengan space di sisi kanan dan kiri */
        border: 2px solid #172169;
        box-sizing: border-box; /* Memastikan padding dan border tidak menambah lebar */
    }

    .container-items {
        display: flex;
        flex-direction: row; /* Tetap horizontal pada mobile */
        align-items: flex-start;
        gap: 15px; /* Jarak lebih kecil untuk mobile */
    }

    .img-container img {
        height: 100px; /* Ukuran gambar lebih kecil untuk mobile */
        align-items: center;
    }

    .title {
        font-family: 'Poppins', sans-serif;
        font-size: 18px; /* Ukuran font lebih kecil untuk mobile */
        color: #172169;
        font-weight: 600;
        text-align: left; /* Teks rata kiri */
        margin-bottom: 10px; /* Jarak antara judul dan konten */
    }

    .info-container {
        display: flex;
        flex-direction: row; /* Tetap horizontal pada mobile */
        gap: 15px; /* Jarak lebih kecil untuk mobile */
        width: 100%;
    }

    .label-info {
        padding: 8px 12px; /* Padding horizontal ditambah agar titik dua terlihat */
        border-radius: 10px;
        background-color: #172169;
        height: 30px; /* Tinggi lebih kecil untuk mobile */
        align-items: center;
        justify-content: center;
        margin-bottom: 8px; /* Jarak antara label dan konten */
    }
    
    .title-info {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        color: white;
        font-size: 11px; /* Ukuran font diperkecil agar titik dua terlihat */
        white-space: nowrap; /* Mencegah teks wrap */
    }

    .kelengkapan-container, .biayasewa-container {
        display: flex;
        flex-direction: column;
        gap: 8px; /* Jarak antar item lebih kecil */
    }

    .item-check {
        display: flex;
        align-items: center;
        gap: 8px; /* Jarak antara ikon dan teks lebih kecil */
    }
    
    .item {
        font-family: 'Poppins', sans-serif;
        font-size: 12px; /* Ukuran font lebih kecil untuk mobile */
        color: black;
    }

    /* Responsive Styles for Desktop */
    @media (min-width: 768px) {
       .header {
        padding: 20px; /* Padding lebih besar untuk desktop */
        width: 100%;
    }

       .nav {
            padding: 5px; /* Padding lebih kecil untuk mobile */
        }

     .header-title {
            font-size: 18px; /* Ukuran font lebih kecil untuk mobile */
        }


    .btn-back img {
        height: 20px; /* Ukuran ikon lebih besar untuk desktop */
    }

    .container-card {
        padding: 20px; /* Padding lebih besar untuk desktop */
        max-width: 600px; /* Maksimum lebar untuk desktop */
    }

    .img-container img {
        height: 125px; /* Ukuran gambar lebih besar untuk desktop */
        width: 151px;
    }

    .title {
        font-size: 24px; /* Ukuran font lebih besar untuk desktop */
    }

    .label-info {
        height: 40px; /* Tinggi lebih besar untuk desktop */
        padding: 10px 15px; /* Padding horizontal lebih besar untuk desktop */
    }

    .title-info {
        font-size: 14px; /* Ukuran font lebih besar untuk desktop */
    }

    .item {
        font-size: 14px; /* Ukuran font lebih besar untuk desktop */
    }

    .kelengkapan-container, .biayasewa-container {
        gap: 10px; /* Jarak antar item lebih besar */
    }

    .item-check {
        gap: 10px; /* Jarak antara ikon dan teks lebih besar */
    }

      .header-spacer {
        width: 20px; /* Memberikan ruang kosong untuk menjaga keseimbangan */
    }

    }


    .box{
          box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
          padding:10px;
          margin-bottom: 10px;
          border-radius: 10px;
          display: flex;
    }
    .text-zvl{
        font-size: 12px;
        color: black;
    }
</style>



<div class="">
    <!-- Header -->
   <div class="header">
        <div class="nav">
            <a href="<?= base_url('Dashboard') ?>" class="btn-back"><img src="assets/img/icon/arrow-back.png" height="20" alt="Back"></a>
            <p class="header-title">Biaya Sewa</p>
            <div class="header-spacer"></div>
        </div>
    </div>
    
    <div class="container" style="margin-top: 4%;">
            
            <?php

            foreach ($this->db->query("SELECT * FROM data_kendaraan")->result() as $r ) {
                
                ?>

                    <div class="box">
                        <div style="width:30%;display: flex;justify-content: center;align-items: center;">
                            <img src="<?php echo urladmin().$r->gambar_kendaraan ?>" style="width: 100%;height: 50%;">
                        </div>
                         <div style="width:70%;">
                            <p style="text-align: center;color: #182169;font-weight: bold;margin-bottom: 0px;"><?php echo $r->jenis_kendaraan ?></p>

                            <div style="display: flex;padding: 0px;">
                                    <div style="width:50%;padding: 2px;">
                                        <p style="border-radius: 4px;text-align: center;color:white;background: #182169;font-weight: bold;font-size: 11px;">Kelengkapan</p>

                                        <?php $KEL =  explode(",", 'STNK,Kunci,Helm,Jas Hujan');

                                            for ($i=0; $i < count($KEL) ; $i++) { 
                                                echo '<p class="text-zvl" style="display:flex;justify-content: left;margin-left:4px;;align-items: center;"><ion-icon style="color:green;margin-right:4px" name="checkmark-circle"></ion-icon> '.$KEL[$i].'</p>';
                                            }

                                         ?>
                                    </div> 
                                    <div style="width:50%;padding: 2px;">
                                         <p style="border-radius: 4px;text-align: center;color:white;background: #182169;font-weight: bold;font-size: 11px;">Biaya</p>
                                            <!-- biaya -->

                                            <p class="text-zvl"><strong><?php echo number_format($r->perjam) ?></strong> <small>/ jam</small></p>
                                            <p class="text-zvl"><strong><?php echo number_format($r->perhari) ?></strong> <small>/ hari</small></p>
                                            <p class="text-zvl"><strong><?php echo number_format($r->perminggu) ?></strong> <small>/ minggu</small></p>

                                    </div> 
                            </div>  
                         </div>
                     </div>


            <?php } ?>

    </div>
</div>