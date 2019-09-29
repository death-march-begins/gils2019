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
            echo "tes";
        }

    }