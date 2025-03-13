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
        <a class="header-btn-back" href="<?= base_url('Tentang') ?>">
            <img class="arrow-left" src="../assets/img/icon/left-arrow.png" alt="arrow-back">
        </a>
        <h3 class="header-title">Visi & Misi</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>

<div class="container p-4">

  <?php

    $r = $this->db->query("SELECT * FROM data_informasi")->row_object();
    ?>
<!-- SPONSOR -->

<div class="visimisi-container">

<h3 style="font-family: 'Poppins', sans-serif;">Visi</h3>
<div class="visi-container">
    <?php echo $r->visi ?>
</div>


<h3 style="font-family: 'Poppins', sans-serif;">Misi</h3>
<div class="misi-container">
    <?php echo $r->misi ?>
</div>

</div>




</div>