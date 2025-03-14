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

    .harga{
        font-size: 24px;
        font-weight:bold;
        color:#0148A8;
    }

</style>
<header>
    <nav>

    <a class="header-btn-back" onclick="window.history.back()">
        <img class="arrow-left" src="<?php echo site_url('assets/img/icon/left-arrow.png') ?>" alt="arrow-back">

    </a>

    <h3 class="header-title">Produk Smartphone</h3>



    </nav>
</header>

<div class="container">
           <?php

            $id_produk = $this->uri->segment(3);
            $sql="SELECT * FROM data_produk WHERE id_produk='$id_produk'";
            $r = $this->db->query($sql)->row_object();

       

        ?>
        <img src="<?php echo urladmin().$r->gambar ?>" width="100%">
        <h5><?php echo $r->nama_produk ?></h5>
        <p class="harga"><?php echo number_format($r->harga) ?></p>
        <p class="render"><?php echo $r->spesifikasi ?></p>
        <p class="render"><?php echo $r->keterangan ?></p>
        <div style="height:50px"></div>
</div>