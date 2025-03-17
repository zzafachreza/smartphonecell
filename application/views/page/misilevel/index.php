<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        color: black;
        box-sizing: border-box; /* Pastikan padding dan border tidak memengaruhi lebar */
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

    .misi-level-container {
        padding: 10px;
    }

 
    .level-btn-contianer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px; /* Jarak antara tombol */
        padding: 10px;
    }
    .level-btn {
        background-color: #f0f0f0;
        color: black;
        border-radius: 10px;
        padding: 10px 20px; /* Padding lebih besar */
        text-align: center;
        font-size: 16px; /* Ukuran font lebih besar */
        flex: 1; /* Membagi ruang secara merata */
        text-decoration: none; /* Hilangkan underline pada link */
        min-width: 150px; /* Lebar minimum untuk tombol */
    }

    .level-btn-all {
        margin-top: 10px;
        background-color: #0148A8;
        color: white;
        border-radius: 50px;
/*        padding: 10px 20px;*/
        text-align: center;
        font-size: 16px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
/*        margin: 10px 0;*/
margin-bottom: 10px;

        width: 100%;
        text-decoration: none; /* Hilangkan underline pada link */
    }

    .level-btn h3 {
        margin: 0;
        font-size: 16px; /* Ukuran font yang konsisten */
    }

    .level-btn-all h3 {
        color: white;
        font-size: 16px;
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
        .level-btn-contianer {
            flex-direction: row; /* Tetap menggunakan flexbox horizontal di mobile */
            gap: 10px; /* Jarak antara tombol */
        }

        .level-btn,
        .level-btn-all {
            width: auto; /* Lebar menyesuaikan konten */
            padding: 8px 15px; /* Padding lebih kecil */
            font-size: 14px; /* Ukuran font lebih kecil */
            min-width: 120px; /* Lebar minimum untuk mobile */
        }

        
        .level-btn h3 {
            font-size: 14px; /* Ukuran font lebih kecil */
      
        }

        .level-btn-all h3{
            font-size: 14px; /* Adjust font size for small screens */
            color: white;
        }
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
</style>

<header>
    <nav>
        <a class="header-btn-back" href="<?= base_url('Dashboard') ?>">
            <img class="arrow-left" src="assets/img/icon/left-arrow.png" alt="arrow-back">
        </a>
        <h3 class="header-title">Misi Level</h3>
        <div style="padding: 10px;"></div>
    </nav>
</header>

<div class="container">
  <ul class="nav nav-tabs" id="myTab" role="tablist" style="display: flex; width: 100%;">
    <li class="nav-item" role="presentation" style="font-size: 12px;flex: 1; text-align: center;">
        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#level" 
                type="button" role="tab" aria-controls="home" aria-selected="true" 
                style="width: 100%;">
            Level
        </button>
    </li>
    <li class="nav-item" role="presentation" style="font-size: 12px;flex: 1; text-align: center;">
        <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#riwayat" 
                type="button" role="tab" aria-controls="profile" aria-selected="false" 
                style="width: 100%;">
            Riwayat Penyelesaian
        </button>
    </li>
</ul>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="level" role="tabpanel" aria-labelledby="home-tab">
              
              <?php
              for ($i=1; $i <=6; $i++) { 
                  // code...
              
              ?>
            <div class="level-btn-all" onclick="window.location.href='<?php echo site_url('misilevel/level/'.$i) ?>'">
                 Level <?php echo $i ?>
              </div>

          <?php  } ?> 


          </div>
          <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="profile-tab">
              
                 <?php

                $level = $this->uri->segment(3);
                $sql="SELECT * FROM data_beli a JOIN data_paket b ON a.fid_paket = b.id_paket WHERE a.fid_pengguna='".$_SESSION['id_pengguna']."'";

                foreach ($this->db->query($sql)->result() as $r) {

                    ?>

                    <div class="card-level-contianer">
                    <div class="card">
                        <!-- Gambar Poster -->
                   <div>
                   <img src="<?php echo urladmin().$r->gambar_paket ?>" class="poster-misi" alt="poster-misi">
                   </div>
                        
                        <!-- Deskripsi Misi -->
                        <div class="deks-misi">
                            <h3 class="misi-title"><?php echo $r->nama_paket ?></h3>
                            <ul class="list-smatrphone-misi">

                                <?php
                                $ID_PRODUK  = $r->produk;
                                foreach($this->db->query("SELECT * FROM data_produk WHERE id_produk IN($ID_PRODUK)")->result() as $p){
                                ?>

                                <li class="list-smartphone"><?php echo $p->nama_produk ?></li>
                                <?php   
                                        }

                                    ?>
                              
                            </ul>

                            <!-- HARGa -->
                             <h3 class="harga-bundle">Rp<?php echo number_format($r->harga_paket) ?></h3>
                                    <?php  if($r->status_beli=='Open'){ ?>
                                                                   <a  onclick="refund(<?php echo $r->harga_paket ?>,<?php echo $r->id_beli ?>)" class="btn-buy">
                                                                        <div class="teks-btn-buy">Refund</div>
                                                                        
                                                                    </a>

                                    <?php } ?>

                             <?php  if($r->status_beli=='Proses'){ ?>
                                <p style="color:orange;font-size: 12px">Proses</p>                            
                              
                            <?php } ?>
                             <?php  if($r->status_beli=='Berhasil'){ ?>
                               <p style="color:green;font-size: 12px">Berhasil</p>                            <?php } ?>
                        </div>
                    </div>


                </div>

                <?php  } ?>


          </div>
            


        </div>
</div>
<script type="text/javascript">
    function refund(x,y){
        var total = x;
                Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Data yang direfund tidak bisa dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Refund",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika dikonfirmasi, lakukan aksi delete (contoh AJAX)
                
                window.location.href="<?php echo site_url('saldo/refund/') ?>"+x+"/"+y
            }
        });
    }
</script>