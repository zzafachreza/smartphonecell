<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
         $data['title'] = 'Home';
        
        // Cek apakah data user ada berdasarkan username
        if (isset($_SESSION['username'])) {
           
            // Load view untuk halaman home
            $this->load->view('templates/header', $data);
            $this->load->view('page/dashboard/index', $data);
            $this->load->view('templates/footer');
        } else {
            // Jika user tidak ditemukan, redirect ke halaman login
            $this->session->set_flashdata('error', 'Anda belum login!');
            redirect('login');
        }
    }
}
