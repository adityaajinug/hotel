<?php

class Kamar_model extends CI_Model
{


  public function getKamar()
  {
    return $this->db->get('kamar')->result_array();
  }
}
