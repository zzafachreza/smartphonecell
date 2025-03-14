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

 .saldo-card {
            background-color: #0148A8;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .saldo-card img{
            width: 30px;
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
            width: 20px;
            height: 20px;
        }

        .saldo-info p {
            font-size: 20px;
            color: white;
            margin: 0;
        }
</style>

<?php

$id_paket = $this->uri->segment(3);
$hd = $this->db->query("SELECT * FROM data_paket WHERE id_paket='$id_paket'")->row_object();


$komisi = $this->db->query("SELECT * FROM data_komisi WHERE level='".$hd->level."'")->row_object();


?>
<header>
    <nav>

    <a class="header-btn-back" onclick="window.history.back()">
        <img class="arrow-left" src="<?php echo site_url('assets/img/icon/left-arrow.png') ?>" alt="arrow-back">
    </a>

    <h3 class="header-title">Pembayaran</h3>

    <div style="padding: 10px;"></div>

    </nav>
</header>

<div class="container">
   <form id="dataForm" action="<?php echo site_url('saldo/beli') ?>" method="POST">
       <input type="hidden" name="fid_pengguna" value="<?php echo $_SESSION['id_pengguna'] ?>" />
       <input type="hidden" name="fid_paket" value="<?php echo $hd->id_paket ?>" />
       <input type="hidden" id="total" name="total" value="<?php echo $hd->harga_paket ?>" />
       <input type="hidden" id="komisi" name="komisi" value="<?php echo $komisi->komisi ?>" />
       <input type="hidden" id="saldo" name="saldo" value="<?php echo saldoSaya() ?>" />
       
   </form>

<div class="card p-3 mb-2">
    <p style="font-weight: bold;color:#0148A8">Nama Pemesan</p>
           <p style="line-height:10px;font-size:16px;font-weight: bold;"><?php echo $_SESSION['nama_lengkap']  ?></p>
           <p style="line-height:10px;font-size:14px;font-weight: normal;"><?php echo $_SESSION['telepon']  ?></p>
            <p style="line-height:10px;font-size:14px;font-weight: lighter;">  <?php echo $_SESSION['alamat']  ?></p>
             
        </div>

           <div class="saldo-card">
            <h3>Saldomu</h3>
            <div class="saldo-info">
                <img src="<?php echo site_url('assets/img/icon/dompet.png') ?>" alt="wallet">
                <p>Rp.<?php echo number_format(saldoSaya()) ?></p>
            </div>
        </div>
 <!-- Pencarian Smartphone -->
    <div class="search-containerku">
       <h3><?php echo $hd->nama_paket ?></h3>
       <?php
                    $ID_PRODUK  = $hd->produk;
                    foreach($this->db->query("SELECT * FROM data_produk WHERE id_produk IN($ID_PRODUK)")->result() as $p){
                    ?>

                    <li class="list-smartphone"><?php echo $p->nama_produk ?></li>
                    <?php   
                            }

                        ?>

        <p style="font-size: 25px;font-weight: bold;text-align: center;margin-top: 10px;">Rp <?php echo number_format($hd->harga_paket) ?></p>

         <p style="font-size: 16px;font-weight: normal;text-align: center;margin-top: 0px;color: #0148A8;">Komisi - Rp <?php echo number_format($komisi->komisi) ?></p>
    </div>


<!--  <a class="btn-beli" id="btnBayar" style="text-decoration: none;color: white;">
     <img src="<?php echo site_url('assets/img/icon/cart.png') ?>" width="20" style="margin-right: 10px;"> Bayar Sekarang
       </a> -->

        <a style="background: #0148A8;color: white;" class="btn col-sm-12 mt-4" id="btnBayar" >
                <img src="<?php echo site_url('assets/img/icon/cart.png') ?>" width="20" style="margin-right: 10px;"> Bayar Sekarang
           </a>


<div style="height:60px"></div>
</div>

<script type="text/javascript">
    $("#btnBayar").click(function(){

        var saldo = parseFloat($("#saldo").val());
        var total = parseFloat($("#total").val());
        if(total > saldo){
          
            Swal.fire(
     'Gagal Proses',
      'Maaf saldo kamu tidak cukup !',
      'error'
    )
        }else{
            $("#dataForm").submit()
        }
    })
</script>