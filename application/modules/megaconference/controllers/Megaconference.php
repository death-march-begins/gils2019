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

            // set random code
            $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code = substr(str_shuffle($set), 0, 12);
            
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'andikalfahri@gmail.com', // change it to yours
                'smtp_pass' => 'andika123', // change it to yours
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
          );

            $lenght = sizeof($nama);
            $data=array();
            for ($i=0; $i <$lenght ; $i++) { 
                $data[$i] = array(
                    'Nama' => $nama[$i],
                    'Email' => $email[$i],
                    'No_Hp' => $No_Hp[$i],
                    'Profesi' => $profesi,
                    'Institusi' => $institusi,
                    'Code' => $code,
                    'Active' => false
                );
            }

            $id = array();
            for ($i=0; $i <$lenght ; $i++) { 
                $id[$i] = $this->FormModel->insert("form_pendaftaran", $data[$i]);
            }

            $message = 	"
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Terimakasih Telah Mendaftar</h2>
							<h2>".$nama[0]."</h2>
                            <p>Mohon Click link dibawah ini untuk melakukan konfirmasi pendaftran</p>
                            <p>Konfirmasi hanya dilakukan kepada Email pertama yang diinputkan dan berlaku ke email lainnya</p>
							<h4><a href='".base_url()."megaconference/activate/".$id[0]."/".$lenght."/".$code."'>Konfirmasi</a></h4>
						</body>
						</html>
                        ";
                        
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($config['smtp_user']);
            $this->email->to($email[0]);
            $this->email->subject('Purchase Confirmation Email');
            $this->email->message($message);
            
            if($this->email->send()){
                $this->session->set_flashdata('message', "Send Email");
                redirect('asset/emailsendberhasil.html');
		    }
		    else{
		    	$this->session->set_flashdata('message', $this->email->print_debugger());
                redirect('asset/emailsendgagal.html'); 
		    }
             
            
        }


        public function activate(){
            $id =  $this->uri->segment(3);
            $lenght =  $this->uri->segment(4);
            $code = $this->uri->segment(5);

            //fetch user details
            $id_cache = $id;
            $user = array();
            for ($i=0; $i <$lenght ; $i++) { 
                $user[$i] = $this->FormModel->getUser($id_cache);
                $id_cache+=1;
            }
     
            //if code   
            if($user[0]['Code'] == $code){
                //update user active status
                $data =array (
                    'Active' => true 
                );

                $id_cache = $id;
                for ($i=0; $i <$lenght ; $i++) { 
                    $query = $this->FormModel->activate( $data, $id_cache);
                    $id_cache+=1;
                }
               
                if($query){
                    // echo "berhasil";

                    $this->session->set_flashdata('message', 'User activated successfully');
                    redirect('asset/verifikasiemailsukses.html');
                }
                else{
                    $this->session->set_flashdata('message', 'Something went wrong in activating account');
                    redirect('asset/verifikasiemailgagal.html');
                }
            }
            else{
                echo "gagal";
                $this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
                redirect('asset/verifikasiemailgagal.html');
            }
     
            // redirect('megaconference');
     
        }
        

    }