<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Splash</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            background-color: white;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: "Racing Sans One", serif;
        }

        .splash-container {
            text-align: center;
            color: white;
        }

        .splash-logo {
            width: 500px; /* Ukuran untuk desktop */
            height: 500px; /* Ukuran untuk desktop */
            margin-bottom: 20px;
        }

        .splash-title {
            font-size: 36px;
            font-weight: bold;
        }

        .splash-subtitle {
            font-size: 18px;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .splash-logo {
                width: 375px; /* Ukuran untuk mobile */
                height: 375px; /* Ukuran untuk mobile */
            }

            .splash-title {
                font-size: 35px;
            }

            .splash-subtitle {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .splash-logo {
                width: 375px; /* Ukuran untuk mobile */
                height: 375px; /* Ukuran untuk mobile */
            }

            .splash-title {
                font-size: 35px;
            }

            .splash-subtitle {
                font-size: 17px;
                margin-top: -30px;
            }
        }
    </style>
</head>

<body>
    <div class="splash-container animate__animated animate__fadeIn">
        <img src="assets/img/icon/logo2.png" alt="Logo" class="splash-logo">
        <p class="splash-title">RENTOR BAROKAH</p>
    </div>

    <script>
        setTimeout(function () {
            // Check if the user is logged in
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                window.location.href = '<?= site_url("dashboard") ?>';
            <?php else: ?>
                window.location.href = '<?= site_url("login") ?>';
            <?php endif; ?>
        }, 3000); // Redirect after 3 seconds
    </script>
</body>

</html>
