<?php

class BlogInstall extends mB_Controller {

  public function index() {
    $this->load->view('blogInstall_index', $this->data);
  }
  
  public function about() {
    $data = array();
    $this->load->view('blogInstall_about', $data);
  }
}