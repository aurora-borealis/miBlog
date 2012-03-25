<?php

class Admin extends mB_Controller {
  public function index() {
    $this->load->view('adminPage', $this->data);
  }
}