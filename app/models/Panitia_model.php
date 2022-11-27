<?php

class Panitia_model
{
  private $db;
  public function __construct()
  {
    $this->db       = new Database;
  }

  public function seleksiZonasi(){
    $this->db->query("SELECT ACCOUNT.USERNAME, FORMULIR.NOPENDAFTARAN, FORMULIR.NISN, SELEKSI.STATUSSELEKSI
                      FROM FORMULIR JOIN PENDAFTAR 
                         ON FORMULIR.NISN = PENDAFTAR.NISN
                                JOIN ACCOUNT
                                    ON ACCOUNT.USERID = PENDAFTAR.USERID
                                JOIN SELEKSI
                                    ON SELEKSI.NOPENDAFTARAN = FORMULIR.NOPENDAFTARAN
                      WHERE FORMULIR.JALURSELEKSI = '1' ");
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function seleksiAfirmasi(){
    $this->db->query("SELECT ACCOUNT.USERNAME, FORMULIR.NOPENDAFTARAN, FORMULIR.NISN, SELEKSI.STATUSSELEKSI
                      FROM FORMULIR JOIN PENDAFTAR 
                           ON FORMULIR.NISN = PENDAFTAR.NISN
                                JOIN ACCOUNT
                                    ON ACCOUNT.USERID = PENDAFTAR.USERID
                                JOIN SELEKSI
                                    ON SELEKSI.NOPENDAFTARAN = FORMULIR.NOPENDAFTARAN
                       WHERE FORMULIR.JALURSELEKSI = '2' ");
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function seleksiPrestasi(){
    $this->db->query("SELECT ACCOUNT.USERNAME, FORMULIR.NOPENDAFTARAN, FORMULIR.NISN, SELEKSI.STATUSSELEKSI
                        FROM FORMULIR JOIN PENDAFTAR 
                             ON FORMULIR.NISN = PENDAFTAR.NISN
                                JOIN ACCOUNT
                                    ON ACCOUNT.USERID = PENDAFTAR.USERID
                                JOIN SELEKSI
                                    ON SELEKSI.NOPENDAFTARAN = FORMULIR.NOPENDAFTARAN
                      WHERE FORMULIR.JALURSELEKSI = '3' ");
    $this->db->execute();
    return $this->db->resultSet();
  }
  
  public function getTotalJalur($data){
    $val = 0 ;
    $query = "BEGIN
                  :var := GETTOTALJALUR(:jalur);
              END;";
    $this->db->query($query);
    $this->db->bind('jalur',$data);
    $this->db->bindOutput('var', $val);
    $this->db->execute();
    return $val;
}
}