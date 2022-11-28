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
}