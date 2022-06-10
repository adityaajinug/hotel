<?php
class Tamu_model extends CI_Model
{
  public function getTamu()
  {
    return $this->db->get('tamu')->result_array();
  }
  public function getTamuId($id)
  {
    $this->db
      ->select('tamu.*')
      ->from('tamu')
      ->where('tamu.id_tamu', $id);
    return $this->db->get()->row_array();
  }
  public function hapus_tamu($id)
  {
    $this->db->where('id_tamu', $id);
    $this->db->delete('tamu');
  }
}
