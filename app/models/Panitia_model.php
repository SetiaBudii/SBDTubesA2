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

  public function updateSeleksi($data){
    if($this->getJenisJalur($data['noPendaftaran']) == '1'){
      if($data['KK'] == '1' && $data['IJ'] == '1' && $data['UN'] == '1' && $data['JRK'] == '1'){
          $query = "BEGIN 
                     UPDATEINFOSELEKSI ('5', :no);
                    END;";
      }else if($data['KK'] == '1' && $data['IJ'] == '1' && $data['UN'] == '1' && !isset($data['JRK'])){
        $query = "BEGIN 
                     UPDATEINFOSELEKSI ('4', :no);
                    END;";
      }else if($data['KK'] == '1' && $data['IJ'] == '1' && !isset($data['UN']) && !isset($data['JRK']) ){
        $query = "BEGIN 
                     UPDATEINFOSELEKSI ('3', :no);
                    END;";
      }else if($data['KK'] == '1' && !isset($data['IJ']) && !isset($data['UN']) && !isset($data['JRK']) ){
        $query = "BEGIN 
                     UPDATEINFOSELEKSI ('2', :no);
                    END;";
      }else if(!isset($data['KK']) && !isset($data['IJ']) && !isset($data['UN']) && !isset($data['JRK']) ){
        $query = "BEGIN 
                     UPDATEINFOSELEKSI ('1', :no);
                    END;";
      }else{
         $query = "BEGIN 
                     UPDATEINFOSELEKSI ('0', :no);
                    END;";
      }
    }else if($this->getJenisJalur($data['noPendaftaran']) == '2'){
      if($data['KK'] == '1' && $data['IJ'] == '1' && $data['UN'] == '1' && $data['KIP'] == '1'){
          $query = "BEGIN 
                     UPDATEINFOSELEKSI ('5', :no);
                    END;";
      }else if($data['KK'] == '1' && $data['IJ'] == '1' && $data['UN'] == '1' && !isset($data['KIP'])){
        $query = "BEGIN 
                     UPDATEINFOSELEKSI ('4', :no);
                    END;";
      }else if($data['KK'] == '1' && $data['IJ'] == '1' && !isset($data['UN']) && !isset($data['KIP']) ){
        $query = "BEGIN 
                     UPDATEINFOSELEKSI ('3', :no);
                    END;";
      }else if($data['KK'] == '1' && !isset($data['IJ']) && !isset($data['UN']) && !isset($data['KIP']) ){
        $query = "BEGIN 
                     UPDATEINFOSELEKSI ('2', :no);
                    END;";
      }else if(!isset($data['KK']) && !isset($data['IJ']) && !isset($data['UN']) && !isset($data['KIP']) ){
        $query = "BEGIN 
                     UPDATEINFOSELEKSI ('1', :no);
                    END;";
      }else{
         $query = "BEGIN 
                     UPDATEINFOSELEKSI ('0', :no);
                    END;";
      }
    }else{
          if($data['KK'] == '1' && $data['IJ'] == '1' && $data['UN'] == '1' && $data['PR'] == '1'){
            $query = "BEGIN 
                      UPDATEINFOSELEKSI ('5', :no);
                      END;";
        }else if($data['KK'] == '1' && $data['IJ'] == '1' && $data['UN'] == '1' && !isset($data['PR'])){
          $query = "BEGIN 
                      UPDATEINFOSELEKSI ('4', :no);
                      END;";
        }else if($data['KK'] == '1' && $data['IJ'] == '1' && !isset($data['UN']) && !isset($data['PR']) ){
          $query = "BEGIN 
                      UPDATEINFOSELEKSI ('3', :no);
                      END;";
        }else if($data['KK'] == '1' && !isset($data['IJ']) && !isset($data['UN']) && !isset($data['PR']) ){
          $query = "BEGIN 
                      UPDATEINFOSELEKSI ('2', :no);
                      END;";
        }else if(!isset($data['KK']) && !isset($data['IJ']) && !isset($data['UN']) && !isset($data['PR']) ){
          $query = "BEGIN 
                      UPDATEINFOSELEKSI ('1', :no);
                      END;";
        }else{
          $query = "BEGIN 
                      UPDATEINFOSELEKSI ('0', :no);
                      END;";
        }
    }
    
    $this->db->query($query);
    $this->db->bind('no', $data['noPendaftaran']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getJenisJalur($data){
    $val = 0 ;
    $query = "BEGIN
                  :var := GETJALUR(:nop);
              END;";
    $this->db->query($query);
    $this->db->bind('nop',$data);
    $this->db->bindOutput('var', $val);
    $this->db->execute();
    return $val;
  }

  public function manajemenZonasi(){
    $this->db->query("SELECT ACCOUNT.USERNAME, FORMULIR.NOPENDAFTARAN, FORMULIR.NISN, PENDAFTAR.NILAIUN, PENDAFTAR.JARAKALAMAT
                      FROM FORMULIR JOIN PENDAFTAR 
                         ON FORMULIR.NISN = PENDAFTAR.NISN
                                JOIN ACCOUNT
                                    ON ACCOUNT.USERID = PENDAFTAR.USERID
                      WHERE FORMULIR.JALURSELEKSI = '1' ");
    $this->db->execute();
    return $this->db->resultSet();
  }
}