<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

        public function dashboard()
        {
            header("Content-Type: application/json; charset=utf-8");

            $search = $this->input->get("search");
            
            $this->db->limit(6);
            if (!empty($search)) {
                $this->db->like("nama_produk", $search);
            }

            $result = $this->db->get("data_produk")->result();

            echo json_encode([
                "status" => !empty($result),
                "message" => !empty($result) ? "Data produk ditemukan" : "Tidak ada data produk",
                "data" => $result
            ]);
        }
        

        public function produk()
        {
            header("Content-Type: application/json; charset=utf-8");

            $search = $this->input->get("search");
            
            $this->db->limit(100);
            if (!empty($search)) {
                $this->db->like("nama_produk", $search);
            }

            $result = $this->db->get("data_produk")->result();

            echo json_encode([
                "status" => !empty($result),
                "message" => !empty($result) ? "Data produk ditemukan" : "Tidak ada data produk",
                "data" => $result
            ]);

        }
}
