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

  public function checkUsernameEmail($data){
    $this->db->query("SELECT COUNT(USERNAME) AS TOTAL FROM ACCOUNT WHERE USERNAME = :username OR EMAIL = :email");
    $this->db->bind('username', $data['Username']);
    $this->db->bind('email', $data['Email']);
    $this->db->execute();
    return $this->db->single();
  }

  public function tambahAkun($data){
    $row['USER'] = $this->checkUsernameEmail($data);
    if(  intval($row['USER']['TOTAL']) > 0 ){
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



  public function loginAccount($data){
    $val = 0 ;
    $query = "BEGIN
                  :var := LOGIN(:uname,:pass);
              END;";
    $this->db->query($query);
    $this->db->bind('uname',$data['Username']);
    $this->db->bind('pass',$data['Password']);
    $this->db->bindOutput('var', $val);
    $this->db->execute();
    return $val;
  }


  public function getRole($data){
    $this->db->query("SELECT ROLE FROM ACCOUNT WHERE USERNAME = :username");
    $this->db->bind('username', $data['Username']);
    $this->db->execute();
    return $this->db->single();
  }

  public function getnama($data){
    $this->db->query("SELECT NAME FROM ACCOUNT WHERE USERNAME = :username");
    $this->db->bind('username', $data['Username']);
    $this->db->execute();
    return $this->db->single();
  }

  public function CheckExistUsername($data){
    $val = 0;
    $query = "BEGIN
                  :var := CHECKUNAME(:Name);
              END;";
    $this->db->query($query);
    $this->db->bind('Name',$data['Username']);
    $this->db->bindOutput('var', $val);
    $this->db->execute();
    return $val;
  }

  public function CheckExistEmail($data){
    $val = 0;
    $query = "BEGIN
                  :var := CHECKUNAME(:Name);
              END;";
    $this->db->query($query);
    $this->db->bind('Name',$data['Username']);
    $this->db->bindOutput('var', $val);
    $this->db->execute();
    return $val;
  }

  public function getIdAccount($data){
    $val = 0 ;
    $query = "BEGIN
                  :var := GETID(:uname);
              END;";
    $this->db->query($query);
    $this->db->bind('uname',$data);
    $this->db->bindOutput('var', $val);
    $this->db->execute();
    return $val;
}
  
  /*Login tanpa function
      public function loginUser($data){
        if( $this->checkUsernamePass($data) == 0){
          return 0;
        }else{
          return 1;
        }
      }

      public function checkUsernamePass($data){
        if($this->checkName($data) > 0 ){
            $pass = $this->getPass($data);
            if($pass['PASSWORD'] == $data['Password']){
              return 1;
            }
        }else{
          return 0;
        }
      }

      public function getPass($data){
        $this->db->query("SELECT PASSWORD FROM ACCOUNT WHERE USERNAME = :username");
        $this->db->bind('username', $data['Username']);
        $this->db->execute();
        return $this->db->single();
      }

      public function checkName($data){
        $this->db->query("SELECT COUNT(USERNAME) AS TOTAL FROM ACCOUNT WHERE USERNAME = :username");
        $this->db->bind('username', $data['Username']);
        $this->db->execute();
        return $this->db->single();
      }
  */
}