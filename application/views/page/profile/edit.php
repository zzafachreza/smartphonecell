<style>
    /* Styling header */
    /* Styling header */
    .header-container {
        padding: 10px;
        background-color: #172169;
        width: 100%;
        position: fixed;
        top: 0;
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
        font-size: 35px;
    }

    .content-header a, img {
        width: auto;
        height: 30px;
    }

    /* Styling main container */
    .main-container {
        padding: 40px;
        font-family: 'Poppins', sans-serif;
        color: black;
        margin-top: 100px; /* Jarak dari header */
        width: 100%;
        margin-left: auto;
        margin-right: auto;

    }

    .form-container {
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 1200px; /* Memperbesar lebar card pada desktop */
        width: 100%; /* Pastikan card menyesuaikan lebar container */
    }

    /* Styling form group */
    .form-group {
        margin-bottom: 20px;
        width: 100%;
    }

    .form-group label {
        display: block;
        font-size: 18px;
        margin-bottom: 5px;
        color: #333;
    }

    /* Styling form control */
    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        color: #666;
    }

    .form-control:disabled {
        background-color: #f5f5f5;
    }
    .btn-edit {
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }

    .btn-edit button {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        background-color: #172169;
        color: white;
        border: 0px;
    }

    .btn-keluar {
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }

    .btn-keluar button {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        background-color: #BBBBBB;
        color: white;
        border: 0px;
    }


    @media only screen and (max-width: 480px) {
        .content-header h3 {
        font-size: 24px; /* Ukuran header lebih kecil di mobile */
    }
    .main-container {
        padding: 20px;
        margin-top: 20%; /* Jarak header lebih kecil di mobile */
    }

    .form-container {
        padding: 15px;
        max-width: 100%; /* Lebar form menyesuaikan ukuran layar */
    }

    .form-group label {
        font-size: 16px; /* Ukuran font label lebih kecil di mobile */
    }

    .form-control {
        padding: 8px; /* Padding input lebih kecil di mobile */
        font-size: 14px;
    }

    .btn-edit button,
    .btn-keluar button {
        padding: 8px;
        font-size: 14px; /* Ukuran font button lebih kecil di mobile */
    }

    .footer-dashboard {
            position: fixed;
    bottom: 0;
    max-width: 1205px;
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    background-color: white;

    z-index: 1000;
    box-sizing: border-box; /* Menjaga padding dalam batasan lebar */
        }

        .icon-container {
            display: flex;
    justify-content: center;
    align-items: center;
    flex: 1; /* Agar setiap icon memiliki ukuran yang sama */
        }
        .icon {
            color: #7FB3B3;
    font-size: 30px; /* Sesuaikan ukuran icon */
    cursor: pointer;
        }


}

.footer-dashboard {
            position: fixed;
    bottom: 0;
    max-width: 1205px;
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    background-color: white;

    z-index: 1000;
    box-sizing: border-box; /* Menjaga padding dalam batasan lebar */
        }

        .icon-container {
            display: flex;
    justify-content: center;
    align-items: center;
    flex: 1; /* Agar setiap icon memiliki ukuran yang sama */
        }
        .icon {
            color: #7FB3B3;
    font-size: 30px; /* Sesuaikan ukuran icon */
    cursor: pointer;
        }

     .scroll-to-top, .rounded {
        z-index: 1000;
     }
     .rounded {
        margin-right: 30px;

     }
</style>

<!-- header -->
<div class="header-container">
    <div class="content-header">
        <a href="<?= base_url('profile') ?>"><img src="<?php echo site_url('assets/img/icon/lef.png') ?>" alt=""></a>
    </div>

    <div class="content-header">
        <h3>Edit Profil</h3>
    </div>

    <div class="content-header">
       <div style="padding:10px;"></div>
    </div>
</div>
<div class="main-container">
    <form method="POST" action="<?php echo site_url('profile/update') ?>">
        <div class="form-container">
        <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input class="form-control" type="hidden" value="<?= $_SESSION['id_pengguna']; ?>" name="id_pengguna" />
            <input class="form-control" type="text" value="<?= $_SESSION['nama_lengkap']; ?>" name="nama_lengkap" />
        </div>

        


        <div class="form-group">
            <label for="">Nomor Telepon ( Contoh : 628123 . . . )</label>
            <input class="form-control" type="text" name="telepon" value="<?= $_SESSION['telepon']; ?>">
        </div>


         <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username" value="<?= $_SESSION['username']; ?>">
        </div>


          <div class="form-group">
             <label for="">Alamat</label>
            
            <input class="form-control" type="text" name="alamat" value="<?= $_SESSION['alamat']; ?>">
        </div>
<div class="form-group">
   <label for="">Pilih bank</label>
                            <select class="form-control" name="bank_pengguna" id="bank" required>
                                <option value="">Pilih Bank</option>

                                <?php
                                foreach ($this->db->query("SELECT * FROM data_bank")->result() as $r) {
                                ?>
                                  <option <?php echo $r->nama_bank==$_SESSION['bank_pengguna']?'selected':'' ?> ><?php echo $r->nama_bank ?></option>

                                <?php } ?>
                               
                            </select>
                            <small class="text-danger"><?= form_error('bank'); ?></small>
                        </div>

           <div class="form-group">
            <label for="">Nomor Rekening</label>
            <input class="form-control" type="text" name="rekening_pengguna" value="<?= $_SESSION['rekening_pengguna']; ?>">
        </div>

           <div class="form-group">
            <label for="">Kode Undangan</label>
            <input class="form-control" type="text" name="kode_undangan" value="<?= $_SESSION['kode_undangan']; ?>">
        </div>


        <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" name="password" type="password" placeholder="Kosongkan jika tidak diubah">
        </div>


        <div class="btn-edit" style="margin-bottom: 20%">
            <button type="submit">Simpan</button>
        </div>
        
        
    </div>
    </form>


    <div class="footer-dashboard">
        <div class="icon-container">
             <a href="<?= base_url('dashboard'); ?>"> <i class="fas fa-home icon"></i></a>
        
    </div>
    <div class="icon-container">
       <a href="<?= base_url('profile'); ?>"> <i class="fas fa-user-circle icon"></i></a>
    </div>
        </div>
</div>
