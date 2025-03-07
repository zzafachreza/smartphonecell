<style>
    /* General Styles */
    .header {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #172169;
        padding: 15px;
    }

    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .header-title {
        font-size: 18px; /* Ukuran font diperkecil */
        font-family: 'Poppins', sans-serif;
        color: white;
        font-weight: 600;
        text-align: center;
        margin: 0;
    }

    .btn-back img {
        height: 18px; /* Ukuran ikon diperkecil */
    }

    .header-spacer {
        width: 15px; /* Jarak spacer diperkecil */
    }

    .daftar-costumer-container {
        padding: 15px; /* Padding diperkecil */
        margin-top: 15px;
    }

    .listdaftar-costumer {
        padding: 15px; /* Padding diperkecil */
        list-style: none;
        background: #f8f8f8;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Grid Layout */
    .list-costumer-container {
        display: grid;
        grid-template-columns: 1fr 10px 2fr;
        align-items: center;
        padding: 10px 0; /* Padding diperkecil */
    }

    .label-list {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 14px; /* Ukuran font diperkecil */
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

    .list-kelengkapansewa-pertama {
        padding: 15px; /* Padding diperkecil */
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .list-detail {
        font-family: 'Poppins', sans-serif;
        font-size: 14px; /* Ukuran font diperkecil */
        font-weight: 400;
        color: black;
        margin: 8px; /* Margin diperkecil */
    }

    .dot {
        margin: 8px; /* Margin diperkecil */
    }

    .checklist {
        margin: 8px; /* Margin diperkecil */
    }

    .btn-selesai-container {
        padding: 30px; /* Padding diperkecil */
        display:flex;
        justify-content:center;
        align-items:center;
        
    }

    .btn-action-container {
        padding: 30px; /* Padding diperkecil */
        display: flex;
        justify-content: space-around;
        margin: 15px; /* Margin diperkecil */
    }

    .btn-selesai, .btn-edit, .btn-hapus {
        padding: 10px;
        color: white;
        border-radius: 30px;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        font-size: 14px; /* Ukuran font diperkecil */
        height: 50px; /* Tinggi tombol diperkecil */
        width: 70%; /* Lebar tombol disesuaikan */
        margin:20px;
    }

    .btn-selesai {
        background-color: #172169;
    }

    .btn-edit {
        background-color: #FFC700;
    }

    .btn-hapus {
        background-color: #B9B9B9;
    }

    /* Responsive Styles for Mobile */
    @media (max-width: 768px) {
        .header-title {
            font-size: 16px; /* Ukuran font lebih kecil */
        }

        .daftar-costumer-container {
            padding: 10px; /* Padding lebih kecil */
        }

        .listdaftar-costumer {
            padding: 10px; /* Padding lebih kecil */
        }

        .list-costumer-container {
            grid-template-columns: 1fr 5px 2fr; /* Grid lebih kompak */
            padding: 8px 0; /* Padding lebih kecil */
        }

        .label-list, .separator, .list-costumer {
            font-size: 12px; /* Ukuran font lebih kecil */
        }

        .list-kelengkapansewa-pertama {
            padding: 10px; /* Padding lebih kecil */
        }

        .list-detail, .dot, .checklist {
            margin: 5px; /* Margin lebih kecil */
        }

        .btn-selesai-container, .btn-action-container {
            padding: 20px; /* Padding lebih kecil */
        }
        
        .btn-action-container {
            margin-bottom:100px;
        }

        .btn-selesai, .btn-edit, .btn-hapus {
            font-size: 12px; /* Ukuran font lebih kecil */
            height: 35px; /* Tinggi tombol lebih kecil */
            width: 48%; /* Lebar tombol disesuaikan */
        }
    }
</style>
<?php
$kode = $this->uri->segment(3);
$r = $this->db->query("SELECT * FROM data_sewa WHERE kode='$kode'")->row_object();

?>
<div class="">
    <div class="header">
        <div class="nav">
            <a href="<?= base_url('outputdata') ?>" class="btn-back"><img src="<?php echo site_url('assets/img/icon/arrow-back.png') ?>" height="20" alt="Back"></a>
            <p class="header-title">Output Data Customer</p>
            <div class="header-spacer"></div>
        </div>
    </div>

    <div class="main-container">
        <div class="daftar-costumer-container">
            <p style="font-family:'Poppins',sans-serif; font-size:20px; font-weight:600; text-align:center; color: #172169;">Daftar Customer</p>

                <div class="daftar-costumer">
                    <ul class="listdaftar-costumer">
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
                    <p class="list-costumer">
                        <?php

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

                            ?>
                    </p>
                </div>

                <div class="list-costumer-container">
                    <p class="label-list">Total Biaya</p>
                    <p class="separator">:</p>
                    <p class="list-costumer"><?php echo number_format($r->biaya ) ?></p>
                </div>
                </ul>
            </div>
        </div>

        <div class="daftar-costumer-container">
            <p style="font-family:'Poppins',sans-serif; font-size:20px; font-weight:600; text-align:center; color: #172169;">Detail Sewa</p>

            <div class="daftar-costumer">
                <div class="list-detail-container">
                    <ul class="listdaftar-costumer">
                        <p class="label-list">Kelengkapan Sewa</p>
                        
                         <?php $KEL =  explode(",", $r->kelengkapan);

                                            for ($i=0; $i < count($KEL) ; $i++) { 
                                                echo '<p class="text-zvl" style="display:flex;justify-content: ;align-items: center;"><ion-icon style="color:green;margin-right:4px" name="checkmark-circle"></ion-icon> '.$KEL[$i].'</p>';
                                            }

                                         ?>

                        <div>

                             <div class="list-costumer-container">
                    <p class="label-list">Nomor Helm</p>
                    <p class="separator">:</p>
                    <p class="list-costumer"><?php echo $r->nomor_helm ?></p>
                </div>
                <div class="list-costumer-container">
                    <p class="label-list">Jenis Jaminan</p>
                    <p class="separator">:</p>
                    <p class="list-costumer"><?php echo $r->jaminan ?></p>
                </div>

                            <span class="badge badge-<?php echo $r->status=='Selesai'?'success':'warning' ?>">
                   <?php echo $r->status ?>
               </span>

                
                            <div class="list-costumer-container">
                                <p class="label-list">Foto saat Sewa</p>
                                <p class="separator">:</p>
                                <p class="list-costumer"></p>
                            </div>
                            <img src="<?php echo site_url().$r->foto_sewa ?>" alt="Foto Sewa" width="150">
                        </div>


                    </ul>
                </div>
            </div>
        </div>

        <?php 
            if($r->status !=='Selesai'){
                ?>

                <div class="btn-selesai-container">
            <a href="<?php echo site_url('outputdata/status/'.$r->id_sewa) ?>" class='btn-selesai form-control'>Selesai Sewa</a>
        </div>

    <?php } ?>

      
    </div>
</div>