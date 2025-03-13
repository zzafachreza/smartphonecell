<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css"/>
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

   
</head>

<body id="page-top" class="bg-gradient">
<!-- Page Wrapper -->
<div id="" class="">


<?php

 date_default_timezone_set('Asia/Jakarta');

function Indonesia3Tgl($tgl) {
    $bulan = [
        'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 
        'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
    ];

    $tanggal = date('d', strtotime($tgl)); // Ambil tanggal (26)
    $bulanIndex = date('n', strtotime($tgl)) - 1; // Ambil bulan (1-12), dikurangi 1 untuk array
    $tahun = date('Y', strtotime($tgl)); // Ambil tahun (2025)

    return $tanggal . ' ' . $bulan[$bulanIndex] . ' ' . $tahun;
}


function urladmin(){
    return 'http://localhost/adminspcell/';
}

 function saldoSaya(){

      $ci = get_instance(); // Ambil instance CodeIgniter
    $ci->load->database(); // Pastikan database sudah dimuat
         
         $usr = $ci->db->query("SELECT 
            a.id_pengguna,
            (
                COALESCE((SELECT SUM(nominal) FROM data_saldo WHERE status='Berhasil' AND tipe = 'Topup' AND fid_pengguna = a.id_pengguna), 0) -
                COALESCE((SELECT SUM(nominal) FROM data_saldo WHERE status='Berhasil' AND tipe = 'Tarik' AND fid_pengguna = a.id_pengguna), 0) -
                COALESCE((SELECT SUM(nominal) FROM data_saldo WHERE status='Berhasil' AND tipe = 'Beli' AND fid_pengguna = a.id_pengguna), 0)+
                COALESCE((SELECT SUM(nominal) FROM data_saldo WHERE status='Berhasil' AND tipe = 'Komisi' AND fid_pengguna = a.id_pengguna), 0) +
                COALESCE((SELECT SUM(nominal) FROM data_saldo WHERE status='Berhasil' AND tipe = 'Refund' AND fid_pengguna = a.id_pengguna), 0)
            ) AS saldo
        FROM data_pengguna a WHERE a.id_pengguna='".$_SESSION['id_pengguna']."'")->row_object();

         return $usr->saldo;


    }



?>