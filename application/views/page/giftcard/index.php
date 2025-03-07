<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        color: black;
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
        font-size: 25px;
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

    .search-input::placeholder {
        color: #999; /* Placeholder color */
    }

    .list-smartphone-container {
        padding: 20px;
        text-align: center; /* Center text */
    }

    .list-smartphone-container h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        color: #555;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .header-title {
            font-size: 20px; /* Smaller font size for mobile */
        }

        .search-input {
            font-size: 12px; /* Smaller font size for input */
            padding: 8px 12px; /* Adjust padding for smaller screens */
        }

        .list-smartphone-container h3 {
            font-size: 14px; /* Smaller font size for list items */
        }

        nav {
            flex-direction: row; /* Keep items in a row for medium screens */
            align-items: center; /* Center items vertically */
        }

        .arrow-left {
            width: 18px; /* Adjust arrow size */
            height: 28px; /* Adjust arrow size */
        }
    }

    @media (max-width: 480px) {
        .header-title {
            font-size: 18px; /* Further reduce font size for very small screens */
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
    }
</style>

<header>
    <nav>

    <a class="header-btn-back" href="<?= base_url('Dashboard') ?>">
        <img class="arrow-left" src="assets/img/icon/left-arrow.png" alt="arrow-back">
    </a>

    <h3 class="header-title">Gift Card</h3>

    <div style="padding: 10px;"></div>

    </nav>
</header>

<div class="container">

<!-- search -->
 <div>
    <!-- buatkan search border-radiusnya 20 -->
    <input type="text" placeholder="Cari smartphone..." class="search-input">
 </div>

 <!-- list smartphone -->
 <div class="list-smartphone-container">
    <h3>Belum ada Gift Card....</h3>
</div>






</div>