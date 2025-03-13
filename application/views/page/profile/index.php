<style>
    /* Styling header */
    /* Styling header */
    .header-container {
        padding: 10px;
        background-color: #0148A8;
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
        margin-top: 0px;
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



 

        

        }


</style>

<!-- header -->
<div class="header-container">
    <div class="content-header">
        <a href="<?= base_url('dashboard') ?>"><img src="assets/img/icon/lef.png" alt=""></a>
    </div>

    <div class="content-header">
        <h3>Profil</h3>
    </div>

    <div class="content-header">
       <div style="padding:10px;"></div>
    </div>
</div>
<div class="main-container">
    <div class="form-container">
        <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input class="form-control" type="text" value="<?= $_SESSION['nama_lengkap']; ?>" disabled>
        </div>

      <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" type="text" value="<?= $_SESSION['username']; ?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Nomor Telepon</label>
            <input class="form-control" type="text" value="<?= $_SESSION['telepon']; ?>" disabled>
        </div>


        <div class="form-group">
            <label for="">Alamat</label>
            <input class="form-control" type="text" value="<?= $_SESSION['alamat']; ?>" disabled>
        </div>


        <div class="form-group">
            <label for="">Bank</label>
            <input class="form-control" type="text" value="<?= $_SESSION['bank_pengguna']; ?>" disabled>
        </div>


        <div class="form-group">
            <label for="">Nomor Rekening</label>
            <input class="form-control" type="text" value="<?= $_SESSION['rekening_pengguna']; ?>" disabled>
        </div>



        <div class="form-group">
            <label for="">Input Kode Undangan</label>
            <input class="form-control" type="text" value="<?= $_SESSION['kode_undangan']; ?>" disabled>
        </div>


        <div class="btn-edit" onclick="window.location.href='<?= base_url('profile/edit') ?>'">
            <button>Edit Profile</button>
        </div>
        
        <div class="btn-keluar" onclick="window.location.href='<?= base_url('profile/logout') ?>'" style="margin-bottom: 10%">
            <button>Keluar</button>
        </div>
    </div>



      

