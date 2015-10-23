<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcomes extends CI_Controller {
  public function index()
  {
    $this->load->view('welcomes/index', $data);
  }
}

//end of main controller
