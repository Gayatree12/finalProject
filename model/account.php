<?php

final class account extends \database\model {
    public $id;
    public $email;
    public $fname;
    public $lname;
    public $phone;
    public $birthday;
    public $gender;
    public $password;
    protected static $modelName = 'account';
    public static function getTablename() {
        $tableName = 'accounts';
        return $tableName;
    }
    
    public static function findOne($id) {
        
      $db = dbConn::getConnection();
      $tableName = get_called_class();
      $sql = 'SELECT * FROM ' . $tableName . ' WHERE id =' . $id;
      $statement = $db->prepare($sql);
      $statement->execute();
      $class = static::$modelName;
      $statement->setFetchMode(PDO::FETCH_CLASS, $class);
      $records =  $statement->fetchAll();
      return $records;

    }
    
    public function setPassword($password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        return $password;
    }
    public function checkPassword($LoginPassword) {
        return password_verify($LoginPassword, $this->password);
    }
    public function validate()
    {
        $valid = TRUE;
        echo 'myemail: ' . $this->email;
        if($this->email == '') {
            $valid = FALSE;
            echo 'nothing in email';
        }
        return $valid;
    }
}
?>