<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbhandler;
    private $statement;

    public function __construct()
    {
      // source db
      // $dbsource = '//' . $this->host . '/' . $this->db_name;
      
      $tns = "  
        (DESCRIPTION =
            (ADDRESS_LIST =
              (ADDRESS = (PROTOCOL = TCP)(HOST = ". $this->host .")(PORT = 1521))
            )
            (CONNECT_DATA =
              (SERVICE_NAME = ". $this->db_name .")
            )
          )
               ";

      // untuk optimasi koneksi ke database
      $option = [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ];

      try
      {
        $this->dbhandler = new PDO('oci:dbname='.$tns, $this->user, $this->pass, $option);
      }
      catch(PDOException $e)
      {
        die($e->getMessage());
      }
    }

    public function query($query)
    {
      $this->statement = $this->dbhandler->prepare($query);
    }

    public function bind ($param, $value, $type = null)
    {
      if (is_null($type))
      {
        switch(true)
        {
          case is_int($value):
            $type = PDO::PARAM_INT;
          break;
          case is_bool($value):
            $type = PDO::PARAM_BOOL;
          break;
          case is_null($value):
            $type = PDO::PARAM_NULL;
          break;
          default:
            $type = PDO::PARAM_STR;
        }
      }

      $this->statement->bindValue($param, $value, $type); // bindValue adalah fungsi bawaan PDO
    }

    public function bindOutput($param, &$value, $size = 1)
    {
      switch(true)
      {
        case is_int($value):
          $type = PDO::PARAM_INT;
          $size = 11;
        break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          $size = 1;
        break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          $size = 1;
        break;
        default:
          $type = PDO::PARAM_STR;
      }
      $this->statement->bindParam($param, $value, $type | PDO::PARAM_INPUT_OUTPUT, $size); // bindParam adalah fungsi bawaan PDO
    }

    public function execute()
    {
      $this->statement->execute();
    }

    // untuk menampilkan semua data
    public function resultSet()
    {
      $this->execute();
      return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function colCount()
    {
      $this->execute();
      return $this->statement->columnCount();
    }

    // untuk menampilkan data tertentu
    public function single()
    {
      $this->execute();
      return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
      return $this->statement->rowCount(); // fungsi bawaan PDO
    }

    public static function ExceptionString($ex)
    {
      $result = "";
      switch($ex->errorInfo[1])
          {
            case 20000:
              $result = "Stok tidak memenuhi!";
              break;
            case 20001:
              $result = "Alamat tidak sesuai!";
              break;
            case 20002:
              $result = "Alamat tidak sesuai!";
              break;
            default:
              $result = $ex->errorInfo[2];
              break;
          }
      return $result;
    }

}