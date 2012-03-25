<?php

class Admin_model extends mB_Model {
  public function newAdmin($post) {
    $this->db->set('kullanici_adi', $post['username']);
    $this->db->set('sifre', sha1($post['password']));
    $this->db->set('site_adi', $post['blogTitle']);
    $this->db->set('slogan', $post['aboutBlog']);
    return $this->db->insert('admin');
  }
  
  public function isInstalled()
  {
    return ($this->db->count_all('admin') == 0) ? false : true;
  }
}