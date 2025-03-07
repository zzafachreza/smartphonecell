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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        /* Gaya CSS tambahan */
        body {
            background-color: #ffffff;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            /* Tambahkan ini agar background memenuhi tinggi layar */
            background-attachment: fixed;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .login-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            width: 100%;
            width: 550px;

            margin-top: -20px;

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
            background-color: #172169;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            margin-top: 10px;
          
        }

        .btn-block:hover {
            background-color: #2980b9;
        }

        .logo {
            padding: 10px;
            margin-top: 150px;
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

        .title {
            font-family: "Racing Sans One", serif;
            color: #172169;
            font-size: 25px;
            text-align: center;
        }

        .user {
                margin-top:  -120px;
            }

        @media (max-width: 480px) {
            body {
                background-color: white;
                background-position: center;
                background-repeat: no-repeat;
                min-height: 100vh;
                /* Tambahkan ini untuk tinggi layar */


            }

            .user {
                margin-top:  -120px;
            }

            .login-container {
                padding: 10px;
            }

            .login-card {
                padding: 20px;
                width: 90%;
            }

            .logo {
                margin-left: 15%;
            }

            .logo img {
                height: 250px;
                width: 250px;
                margin-bottom: 20px;
                align-items: center;
                align-self: center;
            }

            .logoteks {
                padding: 10px;

                width: 500px;
                display: flex;
                justify-content: center;
                align-items: center;


            }

            .logoteks-container {
                align-items: center;

                padding: 10px;
                margin-left: 30px;

            }

            .logoteks img {
                height: 50px;
                width: 350px;
                align-self: center;
            }

            .btn-register {
                font-size: 15px;
            }

            .card-body {

                align-items: center;
                width: 500px;
                display: flex;
                justify-content: center;
            }

            .form-group {
                margin-bottom: 5px;
                padding: 10px;
                width: 100%;

                align-self: center;
                align-items: center;
                align-content: center;
            }

            .form-control {
                width: 100%;
            }

            .btn-block {
                margin-top: 120px;
            }
        }



        .btn-register {
            color: black;
        }

        .btn-register strong {
            font-weight: bold;
            color: black;
        }

        .href-reg {
            color: black;

        }
    </style>
</head>
<?php
// unutk mobile
function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

?>

<body>
    <div class="container">

        <center>
            <?php if (isMobile()) { ?>
                <div style="margin-bottom: 20%;margin-top:30%">
                    <div>
                        <img src="assets/img/icon/logo2.png" width="300">
                    </div>
                 
                </div>
            <?php } ?>


            <?php if (!isMobile()) { ?>
                <div style="margin-bottom: 5%;margin-top:-50px;">
                    <div>
                        <img src="assets/img/icon/logo2.png" width="320">
                    </div>

                </div>
            <?php } ?>
            <form class="user" method="post" action="<?= base_url('login/validasi'); ?>">
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    <small class="text-danger"><?= form_error('username'); ?></small>
                </div>
                <div class="form-group">
                    <input type="password" style="width: 100%" class="form-control" id="password" name="password" placeholder="Kata Sandi">
                    <small class="text-danger"><?= form_error('password'); ?></small>
                </div>
                <div class="form-group">
                    <input type="number" style="width: 100%" class="form-control" id="kode_undangan" name="kode_undangan" placeholder="Kode Undangan">
                    <small class="text-danger"><?= form_error('kode_undangan'); ?></small>
                </div>
                <div style="align-items: center; justify-content:center; ">
                    <a href="#">
                        <p style="font-family: 'Poppins', sans-serif;">Lupa Kata Sandi</p>
                    </a>
                </div>    
                <div class="form-group">
                    <button class="btn btn-block" type="submit">Masuk</button>
                </div>

            </form>

            <div class="btn-register">
                <a class="href-reg" href="#">
                    <p>Belum buat akun? Silakan daftar</p>
                </a>
            </div>

         

        </center>


    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js"></script>


<script type="text/javascript">
    <?php if ($this->session->flashdata('update')) { ?>
        Swal.fire(
            'Successfully',
            '<?php echo $this->session->flashdata('update'); ?>',
            'success'
        )
    <?php } ?>


    <?php if ($this->session->flashdata('error')) { ?>
        Swal.fire(
            'Warning',
            '<?php echo $this->session->flashdata('error'); ?>',
            'error'
        )
    <?php } ?>
</script>