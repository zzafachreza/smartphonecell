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

    /* Footer Add Button */
    .footer-add {
        position: fixed; /* Tombol tetap di layar */
        bottom: 20px; /* Jarak dari bawah */
        left: 20px; /* Jarak dari kiri */
        z-index: 1000; /* Memastikan tombol di atas elemen lain */
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .footer-add img {
        height: 50px;
    }

    /* Form Styles */
    .form-group {
        padding: 20px;
    }

    .form-label {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 22px;
        color: black;
    }

    .checkbox-group {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .checkbox-item {
        display: flex;
        align-items: center;
        gap: 10px;
        border-radius: 100px;
    }

    input[type="checkbox"] {
        width: 20px;
        height: 20px;
        appearance: none; /* Hilangkan tampilan default */
        border: 2px solid gray;
        border-radius: 50%; /* Buat checkbox menjadi bulat */
        outline: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Ketika checkbox dicentang */
    input[type="checkbox"]:checked {
        background-color: gray;
        position: relative;
    }

    /* Efek lingkaran dalam saat dicentang */
    input[type="checkbox"]:checked::before {
        content: "";
        width: 10px;
        height: 10px;
        background-color: white;
        border-radius: 50%;
        display: block;
    }

    .btn-submit {
        background-color: #172169;
        color: white;
        width: 100%; /* Tombol memenuhi lebar container */
        padding: 10px; /* Padding untuk tombol */
        border: none;
        border-radius: 5px;
        font-size: 20px;
        cursor: pointer;
    }

    button {
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        text-align: center;
        font-size: 20px;
    }

    /* Responsive Styles for Mobile */
    @media (max-width: 768px) {
        .header-title {
            font-size: 18px; /* Ukuran font lebih kecil untuk mobile */
        }

        .btn-back img {
            height: 16px; /* Ukuran ikon lebih kecil untuk mobile */
        }

        .footer-add img {
            height: 40px; /* Ukuran ikon lebih kecil untuk mobile */
        }

        .nav {
            padding: 5px; /* Padding lebih kecil untuk mobile */
        }

        .header {
            padding: 10px; /* Padding lebih kecil untuk mobile */
        }

        .form-label {
            font-size: 18px; /* Ukuran font lebih kecil untuk mobile */
        }

        .form-control {
            font-size: 16px; /* Ukuran font input lebih kecil untuk mobile */
        }

        .btn-submit {
            font-size: 18px; /* Ukuran font tombol lebih kecil untuk mobile */
        }

        h3 {
            font-size: 18px; /* Ukuran font judul lebih kecil untuk mobile */
        }
    }

    @media (max-width: 480px) {
        .header-title {
            font-size: 16px; /* Ukuran font lebih kecil untuk layar sangat kecil */
        }

        .btn-back img {
            height: 14px; /* Ukuran ikon lebih kecil untuk layar sangat kecil */
        }

        .footer-add img {
            height: 35px; /* Ukuran ikon lebih kecil untuk layar sangat kecil */
        }

        .form-label {
            font-size: 16px; /* Ukuran font lebih kecil untuk layar sangat kecil */
        }

        .form-control {
            font-size: 14px; /* Ukuran font input lebih kecil untuk layar sangat kecil */
        }

        .btn-submit {
            font-size: 16px; /* Ukuran font tombol lebih kecil untuk layar sangat kecil */
        }

        h3 {
            font-size: 16px; /* Ukuran font judul lebih kecil untuk layar sangat kecil */
        }

        .form-group {
            padding: 10px; /* Padding lebih kecil untuk layar sangat kecil */
        }
    }
</style>
<div class="">
    <!-- Header -->
    <div class="header">
        <div class="nav">
            <a href="<?= base_url('outputdata') ?>" class="btn-back"><img src="<?php echo site_url('assets/img/icon/arrow-back.png') ?>" height="20" alt="Back"></a>
            <p class="header-title">Input Data Customer</p>
            <div class="header-spacer"></div>
        </div>
    </div>
    
    <div class="main-container">
        <div class="input-container">
            <form method="post" action="<?php echo site_url('outputdata/insert') ?>" enctype="multipart/form-data">
                <h3 style="font-size:20px; text-align:center; color:#172169; font-family:'Poppins', sans-serif; font-weight:600;margin-top:20px">Daftar Customer</h3>
                <div class="form-group">
                    <label for="nama_customer" name="nama_customer" id="nama_customer" class="form-label">Nama Lengkap</label>
                    <input class="form-control" id="nama_customer" name="nama_customer" type="text" placeholder="Isi Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="telepon_customer" name="telepon_customer" id="telepon_customer" class="form-label">Nomor Telepon</label>
                    <input class="form-control" id="telepon_customer" name="telepon_customer" type="number" placeholder="Isi Nomor Telepon" required>
                </div>
                
                <div class="form-group">
                    <label for="jaminan" id="jaminan" class="form-label">Jenis Jaminan</label>
                    <select id="jaminan" name="jaminan" class="form-control">
                        <option value="KTP">KTP</option>
                        <option value="SIM">SIM</option>
                        <option value="Kartu Tanda Mahasiswa">Kartu Tanda Mahasiswa</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="foto_sewa" name="foto_sewa" id="foto_sewa" class="form-label">Foto Saat Sewa</label>
                    <input type="file" id="foto_sewa" name="foto_sewa" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="paket_sewa" class="form-label">Paket Sewa</label>
                    <select id="paket_sewa" name="paket_sewa" class="form-control">
                        <option value="Perjam">Paket Jam</option>
                        <option value="Perhari">Paket Harian</option>
                        <option value="Perminggu">Paket Mingguan</option>
                    </select>
                </div>
                
                 <div id="cekpaket" style="display:none">
                     <div class="form-group">
                        <label for="tanggal_ambil"  class="form-label">Tanggal Ambil</label>
                        <input class="form-control" id="tanggal_ambil" name="tanggal_ambil" type="datetime-local">
                    </div>

                       <div class="form-group">
                        <label for="tanggal_kembali"  class="form-label">Tanggal Kembali</label>
                        <input class="form-control" id="tanggal_kembali" name="tanggal_kembali" type="datetime-local">
                    </div>


                 </div>


                <h3 style="font-size:20px; text-align:center; color:#172169; font-family:'Poppins', sans-serif; font-weight:600;margin-top:20px">Detail Sewa</h3>
                
                <div class="form-group">
                    <label for="jenis" id="jenis" class="form-label">Jenis Kendaraan</label>
                    <select id="jenis" name="jenis" class="form-control">
                        
                            <?php

                            foreach ($this->db->query("SELECT * FROM data_kendaraan")->result() as $r ) {
                                
                                ?>
                                    <option><?php echo $r->jenis_kendaraan ?></option>

                                <?php } ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="kelengkapan_sewa" name="kelengkapan_sewa" id="kelengkapan_sewa" class="form-label">Kelengkapan Sewa</label>
                    <div class="checkbox-group">
                        <label class="checkbox-item">
                            <input type="checkbox" name="kelengkapan[]" value="Kunci">
                            Kunci
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="kelengkapan[]" value="STNK">
                            STNK
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="kelengkapan[]" id="helmCheckbox" value="Helm">
                            Helm
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="kelengkapan[]" id="helmCheckbox" value="Jas Huja">
                            Jas Hujan
                        </label>
                    </div>
                    <!-- Inputan tambahan untuk jumlah helm -->
                    <div style="display: black; margin-top: 10px;">
                        <label for="nomor_helm" class="form-label">Masukan Nomor Helm</label>
                        <input type="text" id="nomor_helm" name="nomor_helm" class="form-control" placeholder="Masukkan nomor helm">
                    </div>
                </div>
                
                <div class="form-group">
                    <button class="btn-submit form-control">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    
    $("#paket_sewa").change(() => {
        let val = $("#paket_sewa").val(); // Gunakan langsung ID elemen
        console.log(val);
        if(val!=='Perjam'){
             $("#tanggal_ambil").prop("required", true);
            $("#tanggal_kembali").prop("required", true);
            $("#cekpaket").show();
            $("#tanggal")
        }else{
            $("#cekpaket").hide();
            $("#tanggal_ambil").prop("required", false);
            $("#tanggal_kembali").prop("required", false);
        }
    });



  
</script>