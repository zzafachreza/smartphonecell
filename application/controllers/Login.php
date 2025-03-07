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
    
private function _login()
{
    // Ambil inputan username dan password
    $username = htmlspecialchars(trim($this->input->post('username')));
    $password = $this->input->post('password');

    // Cari user berdasarkan username, pastikan username tanpa spasi dan trim whitespace
    $user = $this->db->get_where('user', ['username' => $username])->row_array();

    // Jika user ditemukan
    if ($user) {
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Jika password cocok, set session
            $data = [
                'user_id' => $user['id'],  // Ganti 'id' dengan 'user_id' untuk konsistensi di seluruh aplikasi
                'namalengkap' => $user['namalengkap'],
                'username' => $user['username']
            ];
            $this->session->set_userdata($data);

            // Redirect ke dashboard atau halaman lainnya
            redirect('dashboard');
        } else {
            // Jika password salah, tampilkan pesan error
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password salah!
            </div>');
            redirect('login');
        }
    } else {
        // Jika username tidak ditemukan, tampilkan pesan error
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Username tidak terdaftar!
        </div>');
        redirect('login');
    }
}


   public function validasi()
{
    // Ambil inputan username dan password
    $username = $this->input->post('username');
    $password = sha1($this->input->post('password'));

    // Cari user berdasarkan username
    $sql = "SELECT * FROM data_pengguna WHERE username = ? AND password = ?";
    $query = $this->db->query($sql, [$username,$password]);
    $user = $query->row_array();

    // Jika user ditemukan
    if ($user) {
    $_SESSION = $user;
        redirect('dashboard');
        
    } else {
        // Jika username tidak ditemukan
        $this->session->set_flashdata('error', 'Username atau password salah !');
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
