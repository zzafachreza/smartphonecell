<style>
.header-container {
    padding: 10px;
    background-color: #AD6163;
    width: 100%;
    position: fixed;
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
    font-size: 50px;
}

.icon-header {
    width: 30px; /* Ukuran default ikon */
    height: auto;
}

.main-container {
    padding: 10px;
    width: 100%;
    height: 100%;
    font-family: 'Poppins', sans-serif;
    color: black;
    margin-top: 10%;
}

.list-container {
    padding: 10px;

   
}

.judul-artikel {
    font-family: 'Poppins', sans-serif;
    font-size: 50px;
    font-weight: bold;
    text-align: center;
}



 .deks-artikel {
    font-family: 'Poppins', sans-serif;
    font-weight: medium;
    text-align: center;
    font-size: 50px;
}

.video-container {
    display:flex;
    justify-content: center;
    align-items: center;
    
}

.image-container {
    display:flex;
    justify-content: center;
    align-items: center;
    
}

@media only screen and (max-width: 480px) {
    .content-header h3 {
        font-size: 24px;
    }
    
    .icon-header {
        width: 20px;
    }

    .main-container {
        margin-top: 30%;
    }

    .judul-artikel {
        font-size: 24px;
    }

    .deks-artikel {
        font-size: 18px;
    }
    
    .video-container iframe {
        width: 332px;
        height: 206px;
    }
    
    .image-container img {
         width: 332px;
        height: 206px;
    }
}
</style>

<!-- header -->
<div class="header-container">
    <div class="content-header">
       <a href="<?= base_url('dashboard') ?>"><img class="icon-header" src="../assets/img/icon/lef.png" alt="Back"></a>
    </div>

    <div class="content-header">
        <h3>Latihan Rentang Gerak</h3>
    </div>

    <div class="content-header">
       <div style="padding:10px;"></div>
    </div>
</div>

<div class="main-container">
    <?php
    foreach ($this->db->query("SELECT * FROM data_pemulihan WHERE sub_judul='Latihan Rentang Gerak'")->result() as $r) {
       
       // Mendapatkan konten dari kolom keterangan
        $content = $r->keterangan;
        
        // Regex untuk mencari elemen video (iframe) dan gambar (img)
        $video_pattern = '/<iframe.*?src="(.*?)".*?<\/iframe>/';
        $img_pattern = '/<img.*?src="(.*?)".*?>/';

        // Cari dan simpan elemen video dan gambar
        preg_match($video_pattern, $content, $video_match);
        preg_match($img_pattern, $content, $img_match);

        // Hapus elemen video dan gambar dari konten untuk menyisakan teks
        $content_text = preg_replace([$video_pattern, $img_pattern], '', $content);
       
       
        ?>
        <div class="list-container">
            <!-- Menampilkan judul -->
            <p class='judul-artikel'>
                <?php echo $r->judul ?>
            </p>
            
             <!-- Menampilkan video jika ada -->
            <?php if (!empty($video_match)): ?>
                <div class="video-container">
                    <iframe src="<?php echo htmlspecialchars($video_match[1]); ?>" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                </div>
            <?php endif; ?>
            
              <!-- Menampilkan gambar jika ada -->
            <?php if (!empty($img_match)): ?>
                <div class="image-container">
                    <img src="<?php echo htmlspecialchars($img_match[1]); ?>" alt="Deskripsi gambar" style="max-width: 100%; height: auto;">
                </div>
            <?php endif; ?>
            
            <!-- Menampilkan keterangan/deskripsi -->
            
            <p class='deks-artikel'>
                 <?php echo $content_text; ?>
            </p>
        </div>
    <?php } ?>
</div>
