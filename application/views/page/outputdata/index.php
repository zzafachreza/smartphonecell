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
        justify-content: center;
        align-items: center;
        align-content: center;
    }
    
    .container-card {
        padding: 10px;
        background-color: #F5F5F5;
        border-radius: 10px;
        margin: 10px;
        width: 50%;
    }

    /* Grid Layout */
    .list-costumer-container {
        display: grid;
/*        grid-template-columns: 1fr 5px 2fr;*/
        align-items: center;
        padding: 0px 0; /* Padding diperkecil agar lebih rapat */
        margin: 0; /* Menghapus margin default */
    }
    
    .label-list {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 12px; /* Ukuran font diperkecil */
        color: black;
        text-align: left;
    }

    .separator {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px; /* Ukuran font diperkecil */
        color: black;
        text-align: center;
    }

    .list-costumer {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px; /* Ukuran font diperkecil */
        color: black;
        padding-left: 10px;
    }
    
    /* Footer Add Button */
    .footer-add {
        position: fixed; /* Tombol tetap di layar */
        bottom: 20px; /* Jarak dari bawah */
        right: 20px; /* Pindahkan ke kanan */
        z-index: 1000; /* Memastikan tombol di atas elemen lain */
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }


    .status-action-container {
        padding: 0px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .status-container {
        background-color: #FFC700;
        border-radius: 20px;
        width: 180px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40px; /* Menambahkan tinggi untuk memastikan teks berada di tengah */
    }

    .teks-status {
        color: white;
        font-family: 'Poppins', sans-serif;
        text-align: center;
        font-weight: 600;
        font-size: 15px;
        margin: 0; /* Menghapus margin default */
    }

    .action-container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 10px;
    }

    /* Responsive Styles for Mobile */
    @media (max-width: 768px) {
        .header-title {
            font-size: 18px; /* Ukuran font lebih kecil untuk mobile */
        }

        .btn-back img {
            height: 16px; /* Ukuran ikon lebih kecil untuk mobile */
        }

    

        .nav {
            padding: 5px; /* Padding lebih kecil untuk mobile */
        }

        .header {
            padding: 5px; /* Padding lebih kecil untuk mobile */
        }

        .container-card {
            width: 90%; /* Lebih lebar untuk mobile */
        }

        .list-costumer-container {
            grid-template-columns: 1fr 10px 2fr; /* Tetap menggunakan grid layout */
/*            padding: 6px 0; /* Padding lebih kecil untuk mobile */*/
        }

        .status-container {
            width: 120px; /* Lebar lebih kecil untuk mobile */
        }

        .teks-status {
            font-size: 14px; /* Ukuran font lebih kecil untuk mobile */
        }
    }

    @media (max-width: 480px) {
        .header-title {
            font-size: 16px; /* Ukuran font lebih kecil untuk layar sangat kecil */
        }

        .btn-back img {
            height: 14px; /* Ukuran ikon lebih kecil untuk layar sangat kecil */
        }

    

        .container-card {
            width: 95%; /* Lebih lebar untuk layar sangat kecil */
        }

        .list-costumer-container {
          /*  grid-template-columns: 1fr 5px 2fr; /* Grid layout lebih kecil untuk layar sangat kecil */
            padding: 0px 0; /* Padding lebih kecil untuk layar sangat kecil */*/
        }

        .status-container {
            width: 100px; /* Lebar lebih kecil untuk layar sangat kecil */
        }

        .teks-status {
            font-size: 12px; /* Ukuran font lebih kecil untuk layar sangat kecil */
        }
    }
</style>

<div class="">
    <!-- Header -->
    <div class="header">
        <div class="nav">
            <a href="<?= base_url('Dashboard') ?>" class="btn-back"><img src="<?php echo site_url('assets/img/icon/arrow-back.png') ?>" height="20" alt="Back"></a>
            <p class="header-title">Output Data Customer</p>
            <div class="header-spacer"></div>
        </div>
    </div>
    
    <div>
       <?php

       foreach ($this->db->query("SELECT * FROM data_sewa")->result() as $r) {
           
       ?>

        <div class="container-card">
            <div>
                <div style="width:35%;margin-bottom: 2%;float: right;">
                      <div class="action-container">
                        <!--FIND,HAPUS,EDIT-->
                        <a href="<?=base_url('outputdata/output/'.$r->kode) ?>">
                            <img src="<?php echo site_url('assets/img/icon/search.png') ?>" alt="icon-find" height="25">
                        </a>
                        
                        <a  onclick="hapusData(<?php echo $r->id_sewa ?>)">
                            <img src="<?php echo site_url('assets/img/icon/delete.png') ?>" alt="icon-delete" height="25">
                        </a>
                        
                        <a href="<?=base_url('outputdata/edit/'.$r->id_sewa) ?>">
                            <img src="<?php echo site_url('assets/img/icon/edit.png') ?>" alt="icon-edit" height="25">
                        </a>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="list-costumer-container">
                <p class="label-list">Nama Lengkap</p>
                <p class="separator">:</p>
                <p class="list-costumer"><?php echo $r->nama_customer ?></p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Nomor Telepon</p>
                <p class="separator">:</p>
                <p class="list-costumer"><?php echo $r->telepon_customer ?></p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Jenis Kendaraan</p>
                <p class="separator">:</p>
                <p class="list-costumer"><?php echo $r->jenis ?></p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Paket Sewa</p>
                <p class="separator">:</p>
                <p class="list-costumer"><?php echo $r->paket ?></p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Waktu Ambil</p>
                <p class="separator">:</p>
                <p class="list-costumer"><?php echo $r->tanggal_ambil ?> | <?php echo $r->jam_ambil ?></p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Waktu Kembali</p>
                <p class="separator">:</p>
                <p class="list-costumer"><?php echo $r->tanggal_kembali ?> | <?php echo $r->jam_kembali ?></p>
            </div>
            
            <div class="list-costumer-container">
                <p class="label-list">Durasi</p>
                <p class="separator">:</p>
                <p class="list-costumer"><?php

                            if($r->paket=='Perjam'){
                                
                                    // hitung durasi
                              if($r->status=='Selesai'){
                                $tanggaljam1 = new DateTime($r->tanggal_ambil . ' ' . $r->jam_ambil);
                                $tanggaljam2 = new DateTime($r->tanggal_kembali . ' ' . $r->jam_kembali); // Waktu sekarang

                           
                            }else{
                                 $tanggaljam1 = new DateTime($r->tanggal_ambil . ' ' . $r->jam_ambil);
                                $tanggaljam2 = new DateTime(); // Waktu sekarang
                            }
                             
                                // Hitung selisih waktu
                                $selisihjam = $tanggaljam1->diff($tanggaljam2);

                                // Ambil jumlah jam dan menit
                                $jam = $selisihjam->days * 24 + $selisihjam->h;
                                $menit = $selisihjam->i;

                                // Format output
                                $output = '';
                                if ($jam > 0) {
                                    $output .= $jam . ' jam ';
                                }
                                if ($menit > 0) {
                                    $output .= $menit . ' menit';
                                }

                                echo trim($output); 




                            }else{
                               $tanggaljam1 = new DateTime($r->tanggal_ambil . ' ' . $r->jam_ambil);
                                $tanggaljam2 = new DateTime($r->tanggal_kembali . ' ' . $r->jam_kembali); // Waktu sekarang

                                // Hitung selisih waktu
                                $selisihjam = $tanggaljam1->diff($tanggaljam2);

                                // Ambil jumlah jam dan menit
                                $jam = $selisihjam->days * 24 + $selisihjam->h;
                                $menit = $selisihjam->i;

                                // Format output
                                $output = '';
                                if ($jam > 0) {
                                    $output .= $jam . ' jam ';
                                }
                                if ($menit > 0) {
                                    $output .= $menit . ' menit';
                                }

                                echo trim($output); 
                            }

                     ?></p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Total Biaya</p>
                <p class="separator">:</p>
                <p class="list-costumer"><?php echo number_format($r->biaya ) ?></p>
            </div>
            
            <div class="status-action-container">
               <span class="badge badge-<?php echo $r->status=='Selesai'?'success':'warning' ?>">
                   <?php echo $r->status ?>
               </span>
                
              
            </div>
        </div>

   <?php } ?>
    </div>

    <!-- Footer Add Button -->
    <div class="footer-add">
        <a href="<?= base_url('outputdata/add') ?>">
            <img src="<?php echo site_url('assets/img/icon/icon-add.png') ?>" height="60" width="60" alt="Add">
        </a>
    </div>
</div>