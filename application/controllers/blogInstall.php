<?php

class BlogInstall extends mB_Controller {

  public function index() {
    $this->load->view('blogInstall_index', $this->data);
  }
  
  public function hakkinda() {
    $data = array();
    $this->load->view('blogInstall_hakkinda', $data);
  }
}