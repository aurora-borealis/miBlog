<?php

class BlogInstall extends CI_Controller {

  public function index() {
    $data['link'] = array(
        array(
            'href' => 'css/bootstrap.css',
            'rel' => 'stylesheet',
            'type' => 'text/css'
        ),
        array(
            'href' => 'css/bootstrap-responsive.css',
            'rel' => 'stylesheet',
            'type' => 'text/css'
        ),
        array(
            'href' => 'css/miBlog.css',
            'rel' => 'stylesheet',
            'type' => 'text/css'
        )
    );

    $this->load->view('blogInstall_index', $data);
  }

}
