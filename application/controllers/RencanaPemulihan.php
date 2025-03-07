<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RencanaPemulihan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    // Fungsi untuk mereset checklist pengguna berdasarkan user ID
public function updateChecklist() {
    $userId = $this->input->post('userId');

    // Update data di database menjadi tidak tercentang (0)
    $this->db->where('fid_pengguna', $userId);
    $this->db->update('data_temp', [
        'a1' => 0,
        'a2' => 0,
        'a3' => 0,
        'a4' => 0,
        'a5' => 0,
        'a6' => 0,
        'a7' => 0,
        'a8' => 0,
        'a9' => 0,
        'a10' => 0,
        'a11' => 0,
    ]);

    // Mengembalikan respons
    echo json_encode(['success' => true]);
}
    function insert() {
        print_r($_POST);
        
        $a1 = !empty($_POST['a1']) ? $_POST['a1'] : 0;
        $a2 = !empty($_POST['a2']) ? $_POST['a2'] : 0;
        $a3 = !empty($_POST['a3']) ? $_POST['a3'] : 0;
        $a4 = !empty($_POST['a4']) ? $_POST['a4'] : 0;
        $a5 = !empty($_POST['a5']) ? $_POST['a5'] : 0;
        $a6 = !empty($_POST['a6']) ? $_POST['a6'] : 0;
        $a7 = !empty($_POST['a7']) ? $_POST['a7'] : 0;
        $a8 = !empty($_POST['a8']) ? $_POST['a8'] : 0;
        $a9 = !empty($_POST['a9']) ? $_POST['a9'] : 0;
        $a10 = !empty($_POST['a10']) ? $_POST['a10'] : 0;
        $a11 = !empty($_POST['a11']) ? $_POST['a11'] : 0;

        $fid_pengguna = $_SESSION['id_pengguna'];
        $temp = $_POST['temp'];

        if ($temp > 0) {
            // simpan ke server
            $sql = "INSERT INTO data_mobilisasi(
                fid_pengguna,
                a1,
                a2,
                a3,
                a4,
                a5,
                a6,
                a7,
                a8,
                a9,
                a10,
                a11
            ) VALUES (
                '$fid_pengguna',
                '$a1',
                '$a2',
                '$a3',
                '$a4',
                '$a5',
                '$a6',
                '$a7',
                '$a8',
                '$a9',
                '$a10',
                '$a11'
            )";
            
            $sql2 = "UPDATE data_temp SET
                a1='$a1',
                a2='$a2',
                a3='$a3',
                a4='$a4',
                a5='$a5',
                a6='$a6',
                a7='$a7',
                a8='$a8',
                a9='$a9',
                a10='$a10',
                a11='$a11' WHERE fid_pengguna='$fid_pengguna'
            ";

            if ($this->db->query($sql) && $this->db->query($sql2)) {
                $this->session->set_flashdata('update', 'Data berhasil di simpan !');
                redirect('RencanaPemulihan/fasemobilisasi/');
            }
        } else {
            $cek = $this->db->query("SELECT * FROM data_temp WHERE fid_pengguna='$fid_pengguna'")->num_rows();

            if ($cek > 0) {
                $sql = "UPDATE data_temp SET
                    a1='$a1',
                    a2='$a2',
                    a3='$a3',
                    a4='$a4',
                    a5='$a5',
                    a6='$a6',
                    a7='$a7',
                    a8='$a8',
                    a9='$a9',
                    a10='$a10',
                    a11='$a11' WHERE fid_pengguna='$fid_pengguna'
                ";
            } else {
                $sql = "INSERT INTO data_temp(
                    fid_pengguna,
                    a1,
                    a2,
                    a3,
                    a4,
                    a5,
                    a6,
                    a7,
                    a8,
                    a9,
                    a10,
                    a11
                ) VALUES (
                    '$fid_pengguna',
                    '$a1',
                    '$a2',
                    '$a3',
                    '$a4',
                    '$a5',
                    '$a6',
                    '$a7',
                    '$a8',
                    '$a9',
                    '$a10',
                    '$a11'
                )";
            }

            if ($this->db->query($sql)) {
                $this->session->set_flashdata('update', 'Data berhasil di simpan sementara !');
                redirect('RencanaPemulihan/fasemobilisasi');
            }
        }
        die();
    }

    public function fasemobilisasi() {
        $data['title'] = 'Mode Aktif | Fase Mobilisasi';
        $this->load->view('templates/header', $data);
        $this->load->view('page/rencanapemulihan/fasemobilisasi/fasemobilisasi', $data);
        $this->load->view('templates/footer');
    }

    public function tahapanmobilisasi() {
        $data['title'] = 'Mode Aktif | Tahapan Mobilisasi';
        $this->load->view('templates/header', $data);
        $this->load->view('page/rencanapemulihan/tahapanmobilisasi/tahapanmobilisasi', $data);
        $this->load->view('templates/footer');
    }

    public function tahapanmobilisasi_detail() {
        $data['title'] = 'Mode Aktif | Tahapan Mobilisasi Detail';
        $this->load->view('templates/header', $data);
        $this->load->view('page/rencanapemulihan/tahapanmobilisasi/video', $data);
        $this->load->view('templates/footer');
    }

    public function latihanrentangerak() {
        $data['title'] = 'Mode Aktif | Latihan Rentan Gerak';
        $this->load->view('templates/header', $data);
        $this->load->view('page/rencanapemulihan/latihanrentangerak/latihanrentangerak', $data);
        $this->load->view('templates/footer');
    }

    public function latihanrentangerak_detail() {
        $data['title'] = 'Mode Aktif | Tahapan Mobilisasi Detail';
        $this->load->view('templates/header', $data);
        $this->load->view('page/rencanapemulihan/latihanrentangerak/video', $data);
        $this->load->view('templates/footer');
    }
}
