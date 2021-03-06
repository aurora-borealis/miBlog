<?php

class Session extends mB_Controller {
  public function index() {
    redirect('session/login');
  }
  
  public function login () {
    // site kurulu değilse kurulum sayfasına yönlendir
    if (!$this->Admin_model->isInstalled())
      redirect('blogInstall');
    
    if ($this->session->userdata('admin') !== false)
      redirect('admin');
    
    if (!empty($_POST)) {
      if (($userdata = $this->Admin_model->login($_POST)) === false)
        $this->data['loginError'] = 'Kullanıcı adı veya şifre yanlış';
      else {
        $this->session->set_userdata('admin', $userdata);
        redirect('admin');
      }
    }
    $this->load->view('login', $this->data);
  }
  
  public function logout() {
    $this->session->unset_userdata('admin');
    redirect('session/login');
  }
}