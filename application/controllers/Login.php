<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        // Mengubah validasi dari username ke nomor telepon
        $this->form_validation->set_rules('nomortelepon', 'Nomor Telepon', 'trim|required', [
            'required' => 'Nomor telepon harus diisi.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password harus diisi.'
        ]);
    
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/login_header', $data);
            $this->load->view('page/logindanregister/login');
        } else {
            $this->_login(); // Panggil fungsi _login jika validasi sukses
        }
    }
    


   public function validasi()
    {
        // Ambil inputan username dan password
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        $kode_undangan = $_POST['kode_undangan'];

        $cek="SELECT * FROM data_undangan WHERE kode_undangan='$kode_undangan'";

        if($this->db->query($cek)->num_rows()==0){
             // Jika username tidak ditemukan
            $this->session->set_flashdata('error', 'Kode Undangan tidak terdaftar !');
            redirect('login');
        }

        // Cari user berdasarkan username
        $sql = "SELECT * FROM data_pengguna WHERE username = ? AND password = ? AND kode_undangan=?";
        $query = $this->db->query($sql, [$username,$password,$kode_undangan]);
        $user = $query->row_array();

        // Jika user ditemukan
        if ($user) {
        $_SESSION = $user;
            redirect('dashboard');
            
        } else {
            // Jika username tidak ditemukan
            $this->session->set_flashdata('error', 'Username, Password atau Kode Undangan salah !');
            redirect('login');
        }
    }


    public function logout()

    {
        $this->session->destroy();
        

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
 Kamu telah keluar dari situs!
</div>');
        redirect('login');
    }
}
