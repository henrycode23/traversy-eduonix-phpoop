<?php
// PDO Database Class and Connection --- Start
class Database{
  private $host   = 'localhost';
  private $user   = 'root';
  private $pass   = '';
  private $dbname = 'myblog';

  private $dbh; // db handler
  private $error;
  private $stmt; // for prepared statements

  public function __construct(){
    // Set DSN - connection string
    $dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname;
    // Set PDO Options
    $options = array(
      PDO::ATTR_PERSISTENT   => true,
      PDO::ATTR_ERRMODE      => PDO::ERRMODE_EXCEPTION
    );
    // Create new PDO
    try{
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
    } catch(PDOException $e){
      $this->error = $e->getMessage();
    }
  }
// PDO Database Class and Connection --- End

// Fetching Data --- Start
  public function query($query){
    $this->stmt = $this->dbh->prepare($query);
  }

  public function bind($param, $value, $type = null){
    if(is_null($type)){
      switch(true){
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value);
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue($param, $value, $type);
  }

  public function execute(){
    return $this->stmt->execute();
  }

  public function lastInsertId(){
    $this->dbh->lastInsertId();
  }

  public function resultset(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}