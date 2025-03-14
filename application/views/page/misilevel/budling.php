<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        color: black;
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

    .search-input::placeholder {
        color: #999; /* Placeholder color */
    }

    .list-smartphone-container {
        padding: 20px;
        text-align: center; /* Center text */
    }

    .list-smartphone-container h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        color: #555;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .header-title {
            font-size: 16px; /* Smaller font size for mobile */
        }

        .search-input {
            font-size: 12px; /* Smaller font size for input */
            padding: 8px 12px; /* Adjust padding for smaller screens */
        }

        .list-smartphone-container h3 {
            font-size: 14px; /* Smaller font size for list items */
        }

        nav {
            flex-direction: row; /* Keep items in a row for medium screens */
            align-items: center; /* Center items vertically */
        }

        .arrow-left {
            width: 18px; /* Adjust arrow size */
            height: 28px; /* Adjust arrow size */
        }
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

      .search-inputku {

        width: 100%; /* Lebar penuh */
        padding: 10px 15px; /* Padding untuk input */
        border-width: 0px;
        height: 50px;
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
        border-radius: 20px; /* Border radius */
        font-family: 'Poppins', sans-serif;
        font-size: 14px; /* Ukuran font */
        outline: none; /* Hilangkan outline saat focus */
    }

    .search-inputku::placeholder {
        color: #999; /* Warna placeholder */
    }

     .search-containerku {
        padding-left: 15px;
        padding-right: 15px;
        margin-bottom:10px;
        margin-top: 10px;
    }


      .menu-containerku {
        width: 32%;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
        color: black;
        border-radius: 10px;
        justify-content: flex-start; /* Posisikan konten ke kiri */
        align-items: center;
        height: 120px; /* Sesuaikan tinggi */
        margin-top: 15px; /* Sesuaikan margin */
        padding: 15px; /* Sesuaikan padding */
        gap: 15px; /* Jarak antara icon dan teks */
    }

    .img-menuku{
        width: 80px;
        
        height: 60px;
    }

    .judul-menuku{
        margin-top: 10px;
        font-size: 12px;
        text-align:center;
    }

      .produk-list{
        padding: 5px;
        width: 48%;height: 250px;
        border-radius: 8px;
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
        margin: 1%;
    }


      .produk-list img{
        width: 100%;
        height:160px;
    }

    .produk-title{
     
       font-size: 12px;
       line-height: 20px;
       height: 35px;
       color: #0148A8;
    }
     .produk-price{

       font-size: 14px;
       line-height: 10px;
       font-weight: bold;
    }

      .btn-beli {
    display: flex; /* Agar tombol memenuhi lebar container */
    width: 200px; /* Buat tombol selebar container */
/*    padding: 10px;*/
    border-radius: 50px;
    text-align: center;
    color: white;
    align-items: center;
    background-color: #0148A8;
    box-sizing: border-box; /* Pastikan padding tidak menambah lebar */
    justify-content: center;
    align-items: center;
        height: 50px;
    position: absolute;
    bottom: 80px;
    z-index: 99;
    right: 10px;


}

.btn-beli-container {
  
/*    gap: 10px;  */
}

.title {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
/*    text-align: center;*/
    color: white  ;
}

</style>

<?php

$id_paket = $this->uri->segment(3);
$hd = $this->db->query("SELECT * FROM data_paket WHERE id_paket='$id_paket'")->row_object();


?>
<header>
    <nav>

    <a class="header-btn-back" onclick="window.history.back()">
        <img class="arrow-left" src="<?php echo site_url('assets/img/icon/left-arrow.png') ?>" alt="arrow-back">
    </a>

    <h3 class="header-title">Paket Bundling</h3>

    <div style="padding: 10px;"></div>

    </nav>
</header>

<div class="container">

 <!-- Pencarian Smartphone -->
    <div class="search-containerku">
       <h3><?php echo $hd->nama_paket ?></h3>
    </div>

    <!-- Daftar Smartphone -->
    <div style="padding-left: 25px;padding-right: 25px;">
        <div class="row" id="dataProduk">

             <?php
                    $ID_PRODUK  = $hd->produk;
                    foreach($this->db->query("SELECT * FROM data_produk WHERE id_produk IN($hd->produk)")->result() as $p){
                    ?>

          <div class="produk-list" onClick="window.location.href='<?php echo site_url('produk/detail/'.$p->id_produk)?>'">
                    <img src="<?php echo urladmin().$p->gambar; ?>" alt="${i.nama_produk}" class="produk-image" />
                    <p class="produk-title"><?php echo $p->nama_produk ?></p>
                    <p class="produk-price">Rp <?php echo number_format($p->harga) ?></p>
                </div>
        <?php }?>


            
        </div>

         <a style="background: #0148A8;color: white;" class="btn col-sm-12 mt-4" href="<?php echo site_url('misilevel/checkout/'.$id_paket) ?>">
                <img src="<?php echo site_url('assets/img/icon/cart.png') ?>" width="20" style="margin-right: 10px;"> Beli Sekarang
           </a>
             </div>
    


<div style="height:60px"></div>
</div>

    