<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- Tambahkan link ke CSS eksternal untuk gaya tambahan -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Gaya CSS tambahan */
        body {
            background-color: white;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh; /* Tambahkan ini agar background memenuhi tinggi layar */
            background-attachment: fixed; 
        }

        .login-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 10px;
            margin-top: 250px;
        }

        .login-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            width: 100%;
            width: 550px;
            margin-top: 50px;
        }

        .card-body {
            width: 550px;
        }

        .form-group {
            margin-bottom: 5px;
            padding: 10px;
            width: 500px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            height: 45px;
        }

        .btn-block {
            width: 100%;
            padding: 10px;
            background-color: #0148A8;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }

        .btn-block:hover {
            background-color: white;
            color: #0148A8;
            border: 1px solid #0148A8;
        }

        .logo {
            padding: 10px;
            margin-top: 125vh;
        }

        .logo img {
            width: auto;
            height: 200px;
            margin-bottom: 20px;
        }

        .logoteks {
            padding: 10px;
            margin-top: 20px;
        }

        .logoteks img {
            width: auto;
            height: 50px;
        }

        a {
            text-decoration: none;
        }
        .user {
            margin-top: 50px;
        }

        .header-reg {
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 550px;
            margin-bottom: 20px;
        }

        .header-title {
            color: black;
            font-family: 'Poppins', sans-serif;
                
        }

        @media (max-width: 480px) {
            body {
                background-color: white;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                min-height: 100vh;
                padding: 10px;
            }

            .login-container {
                margin-top: 0;
                padding: 0px;
                height: auto;
            }

            .login-card {
                width: 100%;
                padding: 0px;
                margin-top: 20px;
            }

          
        .header-reg {
            padding: 0px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 550px;
            margin-bottom: 20px;
        }

        .header-title {
            color: black;
            font-family: 'Poppins', sans-serif;
                
        }

            .form-group {
                width: 100%;
                padding: 5px;
                margin-bottom: 10px;
            }

            .form-control {
                width: 100%;
                font-size: 0.9rem;
                height: 40px;
            }

            .btn-block {
                font-size: 0.9rem;
                padding: 8px;
            }

            .btn-register {
                font-size: 0.9rem;
                text-align: center;
            }

            .logo {
                margin-top: 20vh;
            }

            .logo img {
                height: 100px;
                width: 100px;
            }

            .logoteks img {
                width: 100%;
                height: auto;
            }
        }

        .btn-register {
            color: black;
            margin-top: 10px;
        }

        .btn-register strong {
            font-weight: bold;
            color: black;
        }
    </style>
</head>
<?php
// unutk mobile
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

?>
        
<body>
    <div class="container">
        <!-- DIV UNTUK LOGO -->
        <div class="login-container">
            <div class="login-card">
                <div class="header-reg">
                    <div class="btn-back">
                        <a href="<?= base_url('login'); ?>">
                            <img src="assets/img/icon/arrow-back.png" alt="back" width="14px">
                        </a>
                    </div>
                    <div class="header-title-container">
                        <h3 class="header-title">Register</h3>
                    </div>
                    <div style="padding: 0px;"></div>
                </div>
                <center>
                    <?php if(isMobile()){ ?>
                    <?php } ?>
                    <?php if(!isMobile()){ ?>
                    <?php } ?>

                    <!-- header -->
                    <form class="user" method="POST" action="<?= base_url('register/insert'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="namalengkap" name="nama_lengkap" placeholder="Nama Lengkap" required>
                            <small class="text-danger"><?= form_error('namalengkap'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            <small class="text-danger"><?= form_error('username'); ?></small>
                        </div>

                        <div class="form-group">

                            <input type="number" 
                            class="form-control" id="nomor_telepon" name="telepon" placeholder="Nomor Telepon Contoh : 628123 . . ." required>
                            <small class="text-danger"><?= form_error('nomor_telepon'); ?></small>
                            
                        </div>

                        <div class="form-group">
                            <input type="text" 
                            class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                            <small class="text-danger"><?= form_error('alamat'); ?></small>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="bank_pengguna" id="bank" required>
                                <option value="">Pilih Bank</option>

                                <?php
                                foreach ($this->db->query("SELECT * FROM data_bank")->result() as $r) {
                                ?>
                                  <option><?php echo $r->nama_bank ?></option>

                                <?php } ?>
                               
                            </select>
                            <small class="text-danger"><?= form_error('bank'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" id="nomor_rek" name="rekening_pengguna" placeholder="Nomor Rekening" required>
                            <small class="text-danger"><?= form_error('nomor_rek'); ?></small>
                        </div>

       
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Buat Kata Sandi" required>
                            <small class="text-danger"><?= form_error('password'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Konfirmasi Kata Sandi" required>
                            <small class="text-danger"><?= form_error('repassword'); ?></small>
                        </div>


                        
                        <div class="form-group">
                            <input type="text" class="form-control" id="kode_undangan" name="kode_undangan" placeholder="Kode Undangan" required>
                            <small class="text-danger"><?= form_error('kode_undangan'); ?></small>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-block" type="submit">Register</button>
                        </div>
                        <div class="form-group">
                            <p style="text-align: center; color: #aaa;"><a class="btn-register" href="<?php echo base_url('login') ?>">Sudah memiliki akun? Silakan<strong> masuk</strong></a></p>
                        </div>
                    </form>
                </center>
            </div>
        </div>
    </div>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
<?php if($this->session->flashdata('update')){ ?>
Swal.fire(
     'Successfully',
      '<?php echo $this->session->flashdata('update'); ?>',
      'success'
    )
<?php } ?>

<?php if($this->session->flashdata('error')){ ?>
Swal.fire(
     'Warning',
      '<?php echo $this->session->flashdata('error'); ?>',
      'error'
    )
<?php } ?>
</script>