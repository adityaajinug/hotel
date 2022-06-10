<?php


class Reservasi_model extends CI_Model
{
  public function getReservasiPerTh($no_kamar)
  {
    // $query "SELECT COUNT(check_in.no_kamar) as total, no_kamar, tipe, MONTH(tgl_checkin) as month FROM check_in GROUP BY MONTH(tgl_checkin)";

    $q = "SELECT COUNT(check_in.no_kamar) as total, no_kamar, tipe, MONTH(tgl_checkin) as bulan FROM check_in WHERE no_kamar = '$no_kamar' GROUP BY MONTH(tgl_checkin)";

    return $this->db->query($q)->result_array();

    // return $this->qe->;
  }
  public function kamar()
  {
    $queryNoKamar = "SELECT no_kamar, tipe FROM check_in GROUP BY no_kamar";
    // $q = "SELECT * FROM check_in";

    return $this->db->query($queryNoKamar)->result_array();
  }
}
