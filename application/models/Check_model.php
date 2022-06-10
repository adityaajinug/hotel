<?php
class Check_model extends CI_Model
{
  public function getTamu()
  {
    return $this->db->get('tamu')->result_array();
  }
  public function getKamar()
  {
    $this->db
      ->select('kamar.*')
      ->from('kamar')
      ->where('kamar.status', 0);
    return $this->db->get()->result_array();
  }
  public function getCheckIn()
  {
    $this->db
      ->select('check_in.*, tamu.nama')
      ->from('check_in')
      ->join('tamu', 'tamu.id_tamu = check_in.id_tamu');

    return $this->db->get()->result_array();
  }
  public function hapus_checkin($id)
  {
    $this->db->where('no_checkin', $id);
    $this->db->delete('check_in');
  }
}
