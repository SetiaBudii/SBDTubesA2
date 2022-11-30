<?php

class Pendaftar_model
{
      private $db;
      public function __construct()
      {
        $this->db       = new Database;
      }

      public function getUser(){
        $this->db->query("SELECT * FROM ACCOUNT WHERE USERNAME = 'Reka09' ");
        return $this->db->single();
      }

      public function updateBiodataPendaftar($data){
        $query = "BEGIN 
                UPDATEINFOPENDAFTAR (:id, :nisn, :jarak, :jk , :un , :alamat, :tgl);
            END;";

        $this->db->query($query);
        $this->db->bind('id', $_SESSION['id']);
        $this->db->bind('nisn', $data['NISN']);
        $this->db->bind('jarak', (int) $data['Jarak']);
        $this->db->bind('jk', $data['JenisKelamin']);
        $this->db->bind('un', (float) $data['UN']);
        $this->db->bind('alamat', $data['AlamatLengkap']);
        $this->db->bind('tgl', $data['TanggalLahir']);
        $this->db->execute();
        return $this->db->rowCount();
    }

      public function buttonFormulir($data){
        $nisn = $this->getNisn($data);
        if($nisn != $data){
        return '
                  <div class = "row>
                    <div class= "col-4">
                      <div class="alert alert-danger" role="alert">
                        Mohon Maaf, anda sudah pernah mengisi biodata. Untuk mengubah data diri anda mohon hubungi admin!
                      </div>
                    </div>
                  </div>';
                    
        }else{
          return '<button type="submit" class="btn btn-primary">Submit</button>';
        }
      }

      public function tambahFormulir($data){
        $nisn = $this->getNisn($_SESSION['id']);
        $query = "BEGIN 
                    addFormulir (:nisn, :jurusan, :tgl, :jalur);
                END;";

      $this->db->query($query);
      $this->db->bind('nisn', $nisn);
      $this->db->bind('jurusan', $data['formjurusan']);
      $this->db->bind('tgl', $data['formtanggal']);
      $this->db->bind('jalur', $data['formjalur']);
      $this->db->execute();
      return $this->db->rowCount();
    }

    public function getNisn($data){
      $val = 0 ;
      $query = "BEGIN
                    :var := GETNISN(:id);
                END;";
      $this->db->query($query);
      $this->db->bind('id',$data);
      $this->db->bindOutput('var', $val);
      $this->db->execute();
      return $val;
    }

    public function uploadBerkas($filenya){
      $nisn = $this->getNisn($_SESSION['id']);
      $jalur = $this->getJenisJalur($nisn);
      $nameKK =  "KK_$nisn";
      $nameKIP =  "KIP_$nisn";
      $namePre =  "PRESTASI_$nisn";
      $nameIJ =  "IJAZAH_$nisn";
      $success = 0;
      
      if($jalur['JALURSELEKSI'] == '1'){
        move_uploaded_file($filenya['uploadKK']['tmp_name'],"../public/File/Berkas/".  $nameKK . ".pdf");
        move_uploaded_file($filenya['uploadIjazah']['tmp_name'],"../public/File/Berkas/".  $nameIJ . ".pdf");
        $success = 1;
        
      }else if($jalur['JALURSELEKSI'] == '2'){
        move_uploaded_file($filenya['uploadKK']['tmp_name'],"../public/File/Berkas/".  $nameKK . ".pdf");
        move_uploaded_file($filenya['uploadIjazah']['tmp_name'],"../public/File/Berkas/".  $nameIJ . ".pdf");
        move_uploaded_file($filenya['uploadKip']['tmp_name'],"../public/File/Berkas/".  $nameKIP . ".pdf");
        $success = 1;
      }else{
        move_uploaded_file($filenya['uploadKK']['tmp_name'],"../public/File/Berkas/".  $nameKK . ".pdf");
        move_uploaded_file($filenya['uploadIjazah']['tmp_name'],"../public/File/Berkas/".  $nameIJ . ".pdf");
        move_uploaded_file($filenya['uploadPrestasi']['tmp_name'],"../public/File/Berkas/".  $namePre . ".pdf");
        $success = 1;
      }
      return $success;
  }

  public function getJenisJalur($data){
    $val = 0 ;
    $query = "SELECT JALURSELEKSI FROM FORMULIR WHERE NISN = :nis";
    $this->db->query($query);
    $this->db->bind('nis',$data);
    $this->db->execute();
    return $this->db->single();
  }

  public function getNopendaftaran($data){
    $val = 0 ;
    $query = "BEGIN
                  :var := GETNOPENDAFTARAN(:nisn);
              END;";
    $this->db->query($query);
    $this->db->bind('nisn',$data);
    $this->db->bindOutput('var', $val);
    $this->db->execute();
    return $val;
  }

}