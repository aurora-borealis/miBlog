<?php

class Admin_model extends mB_Model {
  public function new_admin() {
    
  }
  
  public function isInstalled()
  {
    return ($this->db->count_all('admin') == 0) ? false : true;
  }
}