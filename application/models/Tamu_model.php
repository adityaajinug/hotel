<?php


class Tamu_model extends CI_Model
{
  public function getTamu()
  {
    return $this->db->get('tamu')->result_array();
  }
}