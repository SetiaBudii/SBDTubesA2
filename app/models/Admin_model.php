<?php

class Admin_model {
    private $table = 'ACCOUNT';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllUser(){
        $this->db->query('SELECT * FROM ACCOUNT ORDER BY USERID');
        return $this->db->resultSet();
    }

    public function getAdmin(){
        $this->db->query("SELECT * FROM ACCOUNT WHERE ROLE = 'ADMIN' ORDER BY USERID");
        return $this->db->resultSet();
    }

    public function getPanitia(){
        $this->db->query("SELECT * FROM ACCOUNT WHERE ROLE = 'PANITIA' ORDER BY USERID");
        return $this->db->resultSet();
    }

    public function getPendaftar(){
        $this->db->query("SELECT * FROM ACCOUNT WHERE ROLE = 'PESERTA' ORDER BY USERID");
        return $this->db->resultSet();
    }

    public function tambahAkun($data){
        $query = "BEGIN 
                    registrasiAccount (:username, :password, :email, :role , :notelp , :nama);
                  END;";

        $this->db->query($query);
        $this->db->bind('username', $data['TambahUsername']);
        $this->db->bind('password', $data['TambahPass']);
        $this->db->bind('email', $data['TambahEmail']);
        $this->db->bind('role', $data['TambahRole']);
        $this->db->bind('notelp', $data['TambahNo']);
        $this->db->bind('nama', $data['TambahNama']);

        $this->db->execute();

        return $this->db->rowCount();
    }

     public function updateInfo($data){
            $query = "BEGIN 
                    updateInfoAccount (:id, :notelp, :nama);
                 END;";
    
            $this->db->query($query);
            $this->db->bind('id', $data['userid']);
            $this->db->bind('notelp', $data['updateNo']);
            $this->db->bind('nama', $data['updateNama']);
            $this->db->execute();
            return $this->db->rowCount();
    }

    public function checkUsername($data){
        $query = "BEGIN
                    CHECKUNAME (:username);
                  END;";

        $this->db->query($query);
        $this->db->bind('username', $data['updateUsername']);
        return $this->db->execute();
    }

    public function getTotalAdmin(){
        $query = "SELECT COUNT(USERNAME) AS TOTAL FROM ACCOUNT WHERE ROLE='ADMIN'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->single();
    }

    public function getTotalAccount(){
        $query = "SELECT COUNT(USERNAME) AS TOTAL FROM ACCOUNT ";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->single();
    }

    public function getTotalPanitia(){
        $query = "SELECT COUNT(USERNAME) AS TOTAL FROM ACCOUNT WHERE ROLE='PANITIA'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->single();
    }

    public function getTotalPendaftar(){
        $query = "SELECT COUNT(USERNAME) AS TOTAL FROM ACCOUNT WHERE ROLE='PESERTA'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->single();
    }

    public function hapusAkun($data){
        $query = "DELETE FROM PENDAFTAR WHERE USERID = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $data['hapusid']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
