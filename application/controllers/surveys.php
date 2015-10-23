<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {
  public function index()
  {
    $this->load->view('surveys/index');
  }
  public function process_form()
  {
  	if($this->input->post())
    {
      $count = $this->session->userdata('counter');
      $this->session->set_userdata('counter', $count+1);

      $this->session->set_userdata('post_data', $this->input->post());
      redirect('surveys/result');
    }
    else 
      redirect('surveys/index');
  	
  }	
  public function result()
  {
  	 $this->load->view('surveys/result');
  }
}

//end of main controller
