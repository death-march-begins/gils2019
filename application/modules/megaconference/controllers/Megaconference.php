<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Megaconference extends CI_Controller
    {

        function __construct() {
            parent::__construct();
            $this->load->model('FormModel');
        }

        public function index(){
            $this->load->view('megaconference');
        }

        public function save() {
            $nama=$this->input->post('name');
            $email=$this->input->post('email');
            $No_Hp=$this->input->post('phone');
            $profesi=$this->input->post('profesi');
            $institusi=$this->input->post('institusi');

            $lenght = sizeof($nama);
            $data=array();
            for ($i=0; $i <$lenght ; $i++) { 
                $data[$i] = array(
                    'Nama' => $nama[$i],
                    'Email' => $email[$i],
                    'No_Hp' => $No_Hp[$i],
                    'Profesi' => $profesi,
                    'Institusi' => $institusi
                );
            }

            foreach ($data as $value) {
                $this->FormModel->insert("form_pendaftaran", $value);
            }
        }

        public function sendEmailVerification() {

        }
        

    }