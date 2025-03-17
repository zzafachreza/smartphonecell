<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saldo extends CI_Controller
{


    function __construct()
    {

        parent::__construct();
    }
    
       function modul(){
        return 'sewa';
    }
    
   public function index()
{
    $data['title'] = 'Produk Smartphone';
    $data['data_pengguna'] = $this->db->get_where('data_pengguna', ['username' =>
    $this->session->userdata('username')])->row_array();

    // Langsung tampilkan view tanpa pengecekan role_id
    $this->load->view('templates/header', $data);
    // $this->load->view('topbar', $data);
    $this->load->view('page/saldo/index', $data);
    $this->load->view('templates/footer');
}

    public function isisaldo()
    {
        $data['title'] = 'Input Costumer';
        $data['data_pengguna'] = $this->db->get_where('data_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/saldo/isisaldo', $data);
        $this->load->view('templates/footer');
    }


   public function detail()
    {
        $data['title'] = 'Input Costumer';
        $data['data_pengguna'] = $this->db->get_where('data_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();
        $id_saldo = $this->uri->segment(3);
        $data['saldo'] = $this->db->query("SELECT * FROM data_saldo WHERE id_saldo='$id_saldo'")->row_object();

        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/saldo/detail', $data);
        $this->load->view('templates/footer');
    }



    public function confirm()
    {
        $data['title'] = 'Input Costumer';
        $data['data_pengguna'] = $this->db->get_where('data_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/saldo/confirm', $data);
        $this->load->view('templates/footer');
    }

    public function tariksaldo()
    {
        $data['title'] = 'Input Costumer';
        $data['data_pengguna'] = $this->db->get_where('data_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/saldo/tarik', $data);
        $this->load->view('templates/footer');
    }


    public function komisi()
    {
        $data['title'] = 'Input Costumer';
        $data['data_pengguna'] = $this->db->get_where('data_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/saldo/komisi', $data);
        $this->load->view('templates/footer');
    }


    public function riwayattransaksi()
    {
        $data['title'] = 'Input Costumer';
        $data['data_pengguna'] = $this->db->get_where('data_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/saldo/riwayat', $data);
        $this->load->view('templates/footer');
    }






     public function edit()
    {
        $data['title'] = 'Input Costumer';
        $data['data_pengguna'] = $this->db->get_where('data_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/outputdata/edit', $data);
        $this->load->view('templates/footer');
    }

    public function output()

    {
        $data['title'] = 'Ouput Costumer';
        $data['memberadmin'] = $this->db->get_where('data_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/outputdata/output', $data);
        $this->load->view('templates/footer');
    }


public function uploadFoto($name_data,$ref_user){

    error_reporting(0);
         $target_dir = "datafoto/";
      
        $ext = $target_dir .date('ymdhis').basename($_FILES[$name_data]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($ext,PATHINFO_EXTENSION));
        
          $target_file = $target_dir .sha1(md5(date('ymdhis').$ref_user.$name_data)).'.'.$imageFileType;
    
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES[$name_data]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        }
    
        // Check if file already exists
        if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
        }
    
        // Check file size
        if ($_FILES[$name_data]["size"] > 12000000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
        }
    
      
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES[$name_data]["tmp_name"], $target_file)) {
          //  echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
            return $target_file;
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
        }
    }   


    function update(){

            date_default_timezone_set('Asia/Jakarta');

            $id_sewa = $_POST['id_sewa'];

            $nama_customer = $_POST['nama_customer'];
            $telepon_customer = $_POST['telepon_customer'];
            $jaminan = $_POST['jaminan'];
            $paket_sewa = $_POST['paket_sewa'];
            $tanggal_ambil = $_POST['tanggal_ambil'];
            $jam_ambil = explode("T", $tanggal_ambil)[1];
            $tanggal_kembali = $_POST['tanggal_kembali'];
            $jam_kembali = explode("T", $tanggal_kembali)[1];
            $jenis = $_POST['jenis'];
            $kelengkapan = implode(",", $_POST['kelengkapan']);
            $nomor_helm = $_POST['nomor_helm'];
            


            $kendaraan = $this->db->query("SELECT * FROM data_kendaraan WHERE jenis_kendaraan='$jenis'")->row_object();


            $tanggal1 = new DateTime($tanggal_ambil);
                $tanggal2 = new DateTime($tanggal_kembali);



            if($paket_sewa=='Perjam'){
          
                $harga=$kendaraan->perjam;
                $biaya = 0;
            }else if($paket_sewa=='Perhari'){
                

                $selisih = $tanggal1->diff($tanggal2)->days;


                $harga=$kendaraan->perhari;
                $biaya = $selisih*$harga;


            }else if($paket_sewa=='Perminggu'){
                $harga=$kendaraan->perminggu;
                $selisih = floor($tanggal1->diff($tanggal2)->days/7);
                 
                $biaya=$selisih*$harga;
            }


            // hitung durasi
            $tanggaljam1 = new DateTime(substr($tanggal_ambil, 0,10).' '.$jam_ambil);
            $tanggaljam2 = new DateTime(substr($tanggal_kembali, 0,10).' '.$jam_kembali);

            $selisihjam = $tanggaljam1->diff($tanggaljam2);
            $durasi = ($selisihjam->days * 24) + $selisihjam->h;


            if (!empty($_FILES['foto_sewa']) && $_FILES['foto_sewa']['error'] == 0) {
                $foto_sewa = $this->uploadFoto('foto_sewa', date('ymdhis'));
                $sql = "UPDATE data_sewa SET
                            nama_customer='$nama_customer',
                            telepon_customer='$telepon_customer',
                            jaminan='$jaminan',
                            paket='$paket_sewa',
                            tanggal_ambil='$tanggal_ambil',
                            jam_ambil='$jam_ambil',
                            tanggal_kembali='$tanggal_kembali',
                            jam_kembali='$jam_kembali',
                            jenis='$jenis',
                            kelengkapan='$kelengkapan',
                            nomor_helm='$nomor_helm',
                            foto_sewa='$foto_sewa',
                            durasi='$durasi',
                            biaya='$biaya'
                        WHERE id_sewa='$id_sewa'";
            } else {
                $sql = "UPDATE data_sewa SET
                            nama_customer='$nama_customer',
                            telepon_customer='$telepon_customer',
                            jaminan='$jaminan',
                            paket='$paket_sewa',
                            tanggal_ambil='$tanggal_ambil',
                            jam_ambil='$jam_ambil',
                            tanggal_kembali='$tanggal_kembali',
                            jam_kembali='$jam_kembali',
                            jenis='$jenis',
                            kelengkapan='$kelengkapan',
                            nomor_helm='$nomor_helm',
                            durasi='$durasi',
                            biaya='$biaya'
                        WHERE id_sewa='$id_sewa'";
            }







            if($this->db->query($sql)){
                 $this->session->set_flashdata('update', ' Data berhasil di update !');
                    redirect('outputdata'); 
            
            }



    }

    function status(){
            date_default_timezone_set('Asia/Jakarta');
        $id_sewa = $this->uri->segment(3);
        $cek = $this->db->query("SELECT * FROM data_sewa a JOIN data_kendaraan b ON a.jenis = b.jenis_kendaraan WHERE id_sewa='$id_sewa'")->row_object();
        print_r($cek);
        if($cek->paket=='Perjam'){

            $tanggaljam1 = new DateTime($cek->tanggal_ambil.' '.$cek->jam_ambil);
            $tanggaljam2 = new DateTime();

            $selisihjam = $tanggaljam1->diff($tanggaljam2);
            $durasi = $selisihjam->h;
            $biaya = $cek->perjam*$durasi;

            $sql="UPDATE data_sewa SET status='Selesai',durasi='$durasi',biaya='$biaya',tanggal_kembali='".date('Y-m-d')."',jam_kembali='".date('H:i')."' WHERE id_sewa='$id_sewa'";
        }else{
            $sql="UPDATE data_sewa SET status='Selesai' WHERE id_sewa='$id_sewa'";
        }

        
        


         if($this->db->query($sql)){
                 $this->session->set_flashdata('update', ' Data berhasil di update !');
                    redirect('outputdata/output/'.$cek->kode); 
            }

    }

    function insert(){
        date_default_timezone_set('Asia/Jakarta');
      
            $kode = date('ymdhis');
            $nama_customer = $_POST['nama_customer'];
            $telepon_customer = $_POST['telepon_customer'];
            $jaminan = $_POST['jaminan'];
            $paket_sewa = $_POST['paket_sewa'];
            $tanggal_ambil = $_POST['tanggal_ambil'];
            $jam_ambil = explode("T", $tanggal_ambil)[1];
            $tanggal_kembali = $_POST['tanggal_kembali'];
            $jam_kembali = explode("T", $tanggal_kembali)[1];
            $jenis = $_POST['jenis'];
            $kelengkapan = implode(",", $_POST['kelengkapan']);
            $nomor_helm = $_POST['nomor_helm'];
            $foto_sewa = $this->uploadFoto('foto_sewa',date('ymdhis'));


            $kendaraan = $this->db->query("SELECT * FROM data_kendaraan WHERE jenis_kendaraan='$jenis'")->row_object();

            print_r($kendaraan);


            $tanggal1 = new DateTime($tanggal_ambil);
                $tanggal2 = new DateTime($tanggal_kembali);



            if($paket_sewa=='Perjam'){
                $tanggal_ambil=date('Y-m-d');
                $jam_ambil=date('H:i');
                $harga=$kendaraan->perjam;
                $biaya = 0;
            }else if($paket_sewa=='Perhari'){
                

                $selisih = $tanggal1->diff($tanggal2)->days;


                $harga=$kendaraan->perhari;
                $biaya = $selisih*$harga;


            }else if($paket_sewa=='Perminggu'){
                $harga=$kendaraan->perminggu;
                $selisih = floor($tanggal1->diff($tanggal2)->days/7);
                 
                $biaya=$selisih*$harga;
            }


            // hitung durasi
            $tanggaljam1 = new DateTime(substr($tanggal_ambil, 0,10).' '.$jam_ambil);
            $tanggaljam2 = new DateTime(substr($tanggal_kembali, 0,10).' '.$jam_kembali);

            $selisihjam = $tanggaljam1->diff($tanggaljam2);
            $durasi = ($selisihjam->days * 24) + $selisihjam->h;


             


            echo $sql="INSERT INTO data_sewa(

                kode,
                nama_customer,
                telepon_customer,
                jaminan,
                paket,
                tanggal_ambil,
                jam_ambil,
                tanggal_kembali,
                jam_kembali,
                jenis,
                kelengkapan,
                nomor_helm,
                foto_sewa,
                durasi,
                biaya

            ) VALUES(

                '$kode',
                '$nama_customer',
                '$telepon_customer',
                '$jaminan',
                '$paket_sewa',
                '$tanggal_ambil',
                '$jam_ambil',
                '$tanggal_kembali',
                '$jam_kembali',
                '$jenis',
                '$kelengkapan',
                '$nomor_helm',
                '$foto_sewa',
                '$durasi',
                '$biaya'


            )";









            if($this->db->query($sql)){
                 $this->session->set_flashdata('update', ' Data berhasil di simpan');
              redirect('outputdata'); 
           
            }
    
  }


  function topup(){

    $fid_pengguna = $_POST['fid_pengguna'];
    $tipe = $_POST['tipe'];
    $nominal = str_replace(",", "", $_POST['nominal']);
    $catatan = $_POST['catatan'];
    $bukti_transaksi = $this->uploadFoto('bukti_transaksi',date('ymdhis'));
    $sql="INSERT INTO data_saldo(fid_pengguna,tipe,nominal,catatan,bukti_transaksi) VALUES('$fid_pengguna','$tipe','$nominal','$catatan','$bukti_transaksi')";

     if($this->db->query($sql)){
                 $this->session->set_flashdata('update', 'Terima kasih, Transaksi Kamu Akan kami Proses, Mohon Ditunggu ya!');
              redirect('saldo'); 
           
            }

  }


    function tarik(){

    $fid_pengguna = $_POST['fid_pengguna'];
    $tipe = $_POST['tipe'];
    $nominal = str_replace(",", "", $_POST['nominal']);
    $catatan = $_POST['catatan'];
    // $bukti_transaksi = $this->uploadFoto('bukti_transaksi',date('ymdhis'));
    $sql="INSERT INTO data_saldo(fid_pengguna,tipe,nominal,catatan) VALUES('$fid_pengguna','$tipe','$nominal','$catatan')";

     if($this->db->query($sql)){
                 $this->session->set_flashdata('update', 'Terima kasih, Transaksi Kamu Akan kami Proses, Mohon Ditunggu ya!');
              redirect('saldo'); 
           
            }

  }



    function beli(){

        print_r($_POST);

    $fid_pengguna = $_POST['fid_pengguna'];
    $fid_paket = $_POST['fid_paket'];
    $total = $_POST['total'];
    $tipe = 'Beli';
    $total = str_replace(",", "", $_POST['total']);
    $catatan = 'Pembelian Paket Bundling';
    $komisi = $_POST['komisi'];
    
 
    $sql1="INSERT INTO data_saldo(fid_pengguna,tipe,nominal,catatan,status) VALUES('$fid_pengguna','$tipe','$total','$catatan','Berhasil')";
    $sqlKomisi="INSERT INTO data_saldo(fid_pengguna,tipe,nominal,catatan,status) VALUES('$fid_pengguna','Komisi','$komisi','$catatan','Berhasil')";
    $sql2="INSERT INTO data_beli(fid_pengguna,fid_paket,total) VALUES('$fid_pengguna','$fid_paket','$total')";

    

     if($this->db->query($sql1) && $this->db->query($sql2) && $this->db->query($sqlKomisi)){
                 $this->session->set_flashdata('update', 'Terima kasih, Misi Selesai!');
              redirect('misilevel'); 
           
            }

  }


  function refund(){
    $total = $this->uri->segment(3);
    $id_beli = $this->uri->segment(4);
    $fid_pengguna = $_SESSION['id_pengguna'];
    $sql1="UPDATE data_beli SET status_beli='Proses' WHERE id_beli='$id_beli'";
       $sql2="INSERT INTO data_saldo(fid_pengguna,tipe,nominal,catatan,status) VALUES('$fid_pengguna','Refund','$total','Refund Paket Bundling#$id_beli','Proses')";

            if($this->db->query($sql1) && $this->db->query($sql2)){
                 $this->session->set_flashdata('update','Terima kasih, Transaksi Kamu Akan kami Proses, Mohon Ditunggu ya!');
              redirect('misilevel'); 
           
            }

  }


    function claim(){

    $fid_voucher = $this->uri->segment(3);
    $fid_pengguna = $_SESSION['id_pengguna'];
    $sql="INSERT INTO data_claim(fid_pengguna,fid_voucher) VALUES('$fid_pengguna','$fid_voucher')";
      
            if($this->db->query($sql)){
                 $this->session->set_flashdata('update', ' Data berhasil disimpan ');
              redirect('giftcard'); 
           
            }

  }

  function delete(){
    $id = $this->uri->segment(3);

    $sql="DELETE FROM data_sewa WHERE id_sewa='$id'";
 if($this->db->query($sql)){
                 $this->session->set_flashdata('update', ' Data berhasil di hapus');
              redirect('outputdata'); 
           
            }
    

  }
    

}
