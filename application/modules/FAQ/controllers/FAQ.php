<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends CI_Controller {

	function __Construct(){
		parent::__Construct ();
		 $this->load->database(); // load database
	   }

	public function index()
	{
		$this->load->view('FAQ');
	}


}
