<?php

class mB_Controller extends CI_Controller {
  public $miBlogConfig;
  
  public $data;
  
  public function __construct() {
    parent::__construct();
    $this->miBlogConfig = $this->config->item('miBlog');
    $this->data['miBlogConfig'] = $this->miBlogConfig;
  }
}