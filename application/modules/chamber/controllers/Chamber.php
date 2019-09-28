<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Chamber extends CI_Controller
    {

        function __construct() {
            parent::__construct();
            $this->load->model("inmodel");
        }

        public function index(){
            $this->load->view('landingApp');
        }

       function getDataChamber($id){    
            $data['chamber'] = $this->inmodel->getData($id);
            $this->load->view('chamber', $data);  
        }

    }