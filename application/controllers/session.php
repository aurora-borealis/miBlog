<?php

class Session extends mB_Controller {
  public function index() {
    redirect('session/login');
  }
  
  public function login () {
    if ($this->session->userdata('admin') !== false)
      redirect('home');
    
    if (!empty($_POST)) {
      if (($userdata = $this->Admin_model->login($_POST)) === false)
        $this->data['loginError'] = 'Kullanıcı adı veya şifre yanlış';
      else {
        $this->session->set_userdata('admin', $userdata);
        redirect('home');
      }
    }
    $this->load->view('login', $this->data);
  }
  
  public function logout() {
    $this->session->unset_userdata('admin');
    redirect('session/login');
  }
}