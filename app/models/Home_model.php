<?php

class Home_model
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

  public function checkUsername($data){
    $this->db->query("SELECT COUNT(USERNAME) AS TOTAL FROM ACCOUNT WHERE USERNAME = :username OR EMAIL = :email");
    $this->db->bind('username', $data['Username']);
    $this->db->bind('email', $data['Email']);
    $this->db->execute();
    return $this->db->single();
  }

  public function tambahAkun($data){
    $row['USER'] = $this->checkUsername($data);
    if(  $row['USER']['TOTAL'] <= 0 ){
      return 0;
    }else{
      $query = "BEGIN 
                  registrasiAccount (:username, :password, :email, :role , :notelp , :nama);
                END;";

      $this->db->query($query);
      $this->db->bind('username', $data['Username']);
      $this->db->bind('password', $data['Password']);
      $this->db->bind('role', $data['Role']);
      $this->db->bind('email', $data['Email']);
      $this->db->bind('notelp', $data['No']);
      $this->db->bind('nama', $data['Nama']);

      $this->db->execute();
      return $this->db->rowCount();
    }
  }

  public function loginUser($data){
    $this->db->query("SELECT * FROM ACCOUNT WHERE USERNAME = :username AND PASSWORD = :pass");
    $this->db->bind('username', $data['Username']);
    $this->db->bind('pass', $data['Password']);
    $this->db->execute();
   
    if( $this->db->single() == false){
      return 0;
    }else{
      return 1;
    }
  }

  public function getRole($data){
    $this->db->query("SELECT ROLE FROM ACCOUNT WHERE USERNAME = :username");
    $this->db->bind('username', $data['Username']);
    $this->db->execute();
    return $this->db->single();
  }

}