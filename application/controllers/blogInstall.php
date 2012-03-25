<?php

class BlogInstall extends mB_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Admin_model');
  }

  public function index() {
    if ($this->Admin_model->isInstalled())
      redirect('home');
    
    $this->load->view('blogInstall_index', $this->data);
  }
  
  public function about() {
    $data = array();
    $this->load->view('blogInstall_about', $this->data);
  }
}