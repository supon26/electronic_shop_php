<?php

namespace Supon;
use PDO;
use PDOException;
class Db{
    public $pdo;

    public function connect(){
        try {
           $servername = "localhost";
           $username = "root";
           $password = "";
            $this->pdo = new PDO("mysql:host=$servername;dbname=electronic_shop", $username, $password);
            // set the PDO error mode to exception
             $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //  echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
    public function prepareSql($sql){
      return $this->pdo->prepare($sql);
    }

}

?>