<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biayasewa extends CI_Controller
{


    function __construct()
    {

        parent::__construct();
    }
    
    
   public function index()
{
    $data['title'] = 'Biaya Sewa';
    $data['data_pengguna'] = $this->db->get_where('data_pengguna', ['username' =>
    $this->session->userdata('username')])->row_array();

    // Langsung tampilkan view tanpa pengecekan role_id
    $this->load->view('templates/header', $data);
    // $this->load->view('topbar', $data);
    $this->load->view('page/sewa/index', $data);
    $this->load->view('templates/footer');
}

    public function add()
    {
        $data['title'] = 'Input Costumer';
        $data['data_pengguna'] = $this->db->get_where('data_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/outputdata/add', $data);
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

}
