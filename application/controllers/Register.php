<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
   
            // Jika validasi gagal, kembali ke halaman register
            $data['title'] = 'Mode Aktif - Register';
            $this->load->view('templates/login_header', $data);
            $this->load->view('page/logindanregister/register');
        
    
    }
    

    public function check_username($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('memberadmin');

        if ($query->num_rows() > 0) {
            return true; // Username terdaftar
        } else {
            return false; // Username tidak terdaftar
        }
    }
    private function _login()

    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('memberadmin', ['username' => $username])->row_array();

        if ($admin) {
            // Jika username terdaftar, cek password
            if (password_verify($password, $admin['password'])) {
                $data = [
                    'username' => $admin['username'],
                    'role_id' => $admin['role_id']
                ];
                $this->session->set_userdata($data);
                if ($admin['role_id'] == 1) {
                    redirect('dashboard');
                } else if ($admin['role_id'] == 2) {
                    redirect('dashboard');
                }
            } else {
                // Jika password tidak cocok, tampilkan pesan kesalahan
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password!
            </div>');
                redirect('login');
            }
        } else {
            // Jika username tidak terdaftar, tampilkan pesan kesalahan
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This username is not registered.
        </div>');
            redirect('login');
        }
    }



    public function insert()
    {


        $nama_lengkap = $_POST['nama_lengkap'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $operasi = $_POST['operasi'];
        $waktu_operasi = $_POST['waktu_operasi'];
        $telepon = $_POST['telepon'];
        $password = sha1($_POST['password']);


        // cek

        $cek = $this->db->query("SELECT * FROM data_pengguna WHERE telepon='$telepon'")->num_rows();

        if($cek > 0){
            // Set pesan sukses dan redirect ke halaman login
        $this->session->set_flashdata('error', 'Nomor telepon sudah terdaftar !');
            redirect('register');
        }else{


          echo  $sql="INSERT INTO data_pengguna(

            nama_lengkap,
            tempat_lahir,
            tanggal_lahir,
            jenis_kelamin,
            operasi,
            waktu_operasi,
            telepon,
            password


            ) VALUES(

            '$nama_lengkap',
            '$tempat_lahir',
            '$tanggal_lahir',
            '$jenis_kelamin',
            '$operasi',
            '$waktu_operasi',
            '$telepon',
            '$password'
            );


            ";

            if($this->db->query($sql)){
                  // Set pesan sukses dan redirect ke halaman login
                $this->session->set_flashdata('update', 'Berhasil mendaftar akun !');
                redirect('login');
            }


          
        
    
            
        }
    }



    public function logout()

    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
 Kamu telah keluar dari situs!
</div>');
        redirect('login');
    }
}
