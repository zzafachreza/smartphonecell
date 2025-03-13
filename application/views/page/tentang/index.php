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
  .btn-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 500px; /* Batasi lebar untuk tampilan besar */
        padding: 15px;
        background-color: #0148A8;
        color: white;
        border-radius: 50px;
        text-align: center;
        text-decoration: none; /* Hilangkan underline */
        margin: 10px auto; /* Tengah tombol */
    }

    .btn-container h3{
        font-size: 18px;
        color: white;
    }

       .produk-list{

        width: 30%;height: 60px;
        border-radius: 8px;
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
        margin-left: 1.5%;
        margin-right: 1.5%;
        margin-bottom: 15px;
        display: flex;
   

    }

    .produk-list img{
        width: 100%;
        height:auto;
    }

</style>

<header>
    <nav>
        <a class="header-btn-back" href="<?= base_url('dashboard') ?>">
            <img class="arrow-left" src="assets/img/icon/left-arrow.png" alt="arrow-back">
        </a>
        <h3 class="header-title">Tentang Kami</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>

<div class="container">
    <a href="<?= base_url('tentang/visimisi') ?>" class="btn-container">
        <h3>Visi & Misi</h3>
    </a>
    <a href="<?= base_url('tentang/syarat'); ?>" class="btn-container">
        <h3>Syarat & Ketentuan</h3>
    </a>

      <div style="padding-left: 25px;padding-right: 25px;">
        <div class="row justify-content-evenly">
            <?php 
                foreach ($this->db->query("SELECT * FROM data_sponsor")->result() as $r) {
                    
            ?>
            <div class="produk-list">
                <img src="<?php echo urladmin().$r->gambarsponsor ?>" />
                
            </div>

            <?php 
        }
            ?>
            
        </div>
    </div>

</div>
