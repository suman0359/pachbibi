<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function contact(){
    	$this->load->view('common/header');
    	$this->load->view('contact');
    	$this->load->view('common/footer');
    }
}