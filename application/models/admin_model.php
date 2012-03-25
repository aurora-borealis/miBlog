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
  
  public function login($post) {
    $result = $this->db->select('*')
                       ->from('admin')
                       ->where(array('kullanici_adi' => $post['username']));
    if ($result->num_rows() == 0)
      return false;
    
    $userdata = $result->first_row();
    if ($userdata['sifre'] != sha1($post['password']))
      return false;
    
    return $userdata;
  }
}