<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	function _construct() {
		parent::_construct();
	}

	function index(){
		$this->load->view('producto');

	}
	
}