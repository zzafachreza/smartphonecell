 <style>

.header-container {
    padding: 10px;
    background-color: #AD6163;
    width: 100%;
    position: fixed;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.content-header {
    padding: 10px;
    text-align: center;
    color: white;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
}

.content-header h3 {
font-size: 50px;
}

.content-header a, img {
    width: auto;
    height: 30px;
}

.main-container {
    padding: 10px;
    margin-top: 10%;
    width: 100%;
    height: 100%;

}

.foto-container {
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;

}

.foto-container img {
    width: auto;
    height: 300px;
}

.deks-container {
    padding: 20px;

}

.deks-title h3 {
    color:#760507;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;

}


.deks-paragraf {
    color: #AD6163;
    font-family: 'Poppins',sans-serif;
    text-align: justify;
}


/* Media query untuk tampilan mobile dengan lebar maksimal 480px */
@media only screen and (max-width: 480px) {
    .content-header h3 {
        font-size: 24px; /* Ukuran header lebih kecil di mobile */
    }

    .content-header a, img {
        height: 20px; /* Ukuran gambar icon lebih kecil di mobile */
    }

    .foto-container img {
        height: 150px; /* Ukuran gambar lebih kecil di mobile */
    }

    .deks-title h3 {
        font-size: 20px; /* Judul lebih kecil di mobile */
    }

    .deks-paragraf {
        font-size: 12px; /* Ukuran paragraf lebih kecil di mobile */
    }

    .main-container {
        margin-top: 20%; /* Margin lebih besar untuk menghindari header yang tetap */
        
    }
}
 </style>

 <?php

 $id_kesehatan = $_GET['id'];
 $r = $this->db->query("SELECT * FROM data_kesehatan WHERE id_kesehatan='$id_kesehatan'")->row_object();

 // print_r($r);

 ?>
<!-- header -->
 <div class="header-container">
    <div class="content-header">
       <a href="#" onclick="window.history.back()"><img src="../assets/img/icon/lef.png" alt=""></a>
    </div>

    <div class="content-header">
      <h5><?php echo $r->judul ?></h5>
    </div>

    <div class="content-header">
       <div style="padding:10px;"></div>
    </div>
 </div>

 <!-- main -->
  <div class="main-container">

       <div class="content-container">
         <!-- foto -->
         <div class="foto-container">
            <img src="<?php echo urladmin().$r->file_kesehatan ?>" alt="" width="100%">
         </div>

         <div class="deks-container">
            <div class="deks-title">
                <h3><?php echo $r->judul ?></h3>
            </div>
            <div class="deks-paragraf">
              <?php echo $r->keterangan ?>
            </div>
         </div>
       </div>


  </div>