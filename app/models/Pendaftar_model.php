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
      if($data == '5'){
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
}