<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Megaconference extends CI_Controller
    {

        function __construct() {
            parent::__construct();
            $this->load->model('FormModel');
        }

        public function index(){
            $data['user'] = $this->FormModel->getJumlahPeserta();
            $this->load->view('megaconference', $data);
        }

        public function save() {
            $nama=$this->input->post('name');
            $email=$this->input->post('email');
            $No_Hp=$this->input->post('phone');
            $profesi=$this->input->post('profesi');
            $institusi=$this->input->post('institusi');

            $lenght = sizeof($nama);

            for ($i=0; $i <$lenght ; $i++) { 
                if ($nama[$i] == "") {
                    redirect('asset/gagal.html');
                } elseif ($email[$i] == "") {
                    redirect('asset/gagal.html');
                } elseif ($No_Hp) {
                    redirect('asset/gagal.html');
                }
            }
            

            // set random code
            $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code = substr(str_shuffle($set), 0, 12);
            
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://srv68.niagahoster.com',
                'smtp_port' => 465,
                'smtp_user' => 'gils2019@inovatornusantara.org', // change it to yours
                'smtp_pass' => 'gils2019', // change it to yours
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
          );

            
            $data=array();

            $harga = 40000;

            if ($profesi == "Umum") {
                $harga = 45000;
            } 

            if ($lenght == 5) {
                $harga-=2000;
            }

            for ($i=0; $i <$lenght ; $i++) { 
                $data[$i] = array(
                    'Nama' => $nama[$i],
                    'Email' => $email[$i],
                    'No_Hp' => $No_Hp[$i],
                    'Profesi' => $profesi,
                    'Institusi' => $institusi,
                    'Code' => $code,
                    'Active' => false,
                    'Bayar' => $harga,
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

            if ($user[0]['Active'] == 1) {
                redirect('asset/emailsudahaktif.html');
            }
            
            elseif ($user[0]['Code'] == $code){
                //update user active status

                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://srv68.niagahoster.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'gils2019@inovatornusantara.org', // change it to yours
                    'smtp_pass' => 'gils2019', // change it to yours
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
              );

               
                $data =array (
                    'Active' => true 
                );

                $id_cache = $id;
                for ($i=0; $i <$lenght ; $i++) { 
                    $peserta = $this->FormModel->getJumlahPeserta();

                    if ($peserta <= 50) {
                        $user[$i]['Bayar'] = (int) $user[$i]['Bayar'] - (int) ( $user[$i]['Bayar'] * (20/100) );
                        $data['Bayar'] = $user[$i]['Bayar'];
                    } else {
                        $data['Bayar'] = $user[$i]['Bayar'];
                    }

                    $query = $this->FormModel->activate( $data, $id_cache);
                    $id_cache+=1;
                }

                if($query){
                    // echo "berhasil";
                    $datahtml['user'] = $user; 
                    $datahtml['lenght'] = $lenght;

                    $message =  $this->load->view('verifikasiemailinfo', $datahtml , true);

                        $this->load->library('email', $config);
                        $this->email->set_newline("\r\n");
                        $this->email->from($config['smtp_user']);
                        $this->email->to($user[0]['Email']);
                        $this->email->subject('INFORMASI PEMBAYARAN TIKET MEGACONFERENCE GILS 2019');
                        $this->email->message($message);

                        if ($this->email->send()) { 
                            redirect('asset/verifikasiemailsukses.html');
                        } else {
                            echo "Email Gagal Dikirim Mohon Hubungi Kontak : +62 812-4981-2473 (Mayang)
                            +62 813-2776-3552 (Novi)";
                        }
                    
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