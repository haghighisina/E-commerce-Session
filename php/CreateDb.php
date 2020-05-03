<?php


class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbName;
    public $tableName;
    public $con;

    public function __construct(
        $dbName     = "NewDb",
        $tableName  = "ProductDb",
        $servername = "localhost",
        $username   = "root",
        $password   = ""
)
    {
        $this->dbName     = $dbName;
        $this->tableName  = $tableName;
        $this->servername = $servername;
        $this->username   = $username;
        $this->password   = $password;

        $this->con = mysqli_connect($servername, $username, $password);

        if (!$this->con){
            die("Connection Failed". mysqli_connect_error());
        }

        $sql = "CREATE DATABASE IF NOT EXISTS $dbName";

        if (mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbName);

            $sql = "CREATE TABLE IF NOT EXISTS $tableName
            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
             product_name VARCHAR(25) NOT NULL,
             product_price FLOAT,
             product_image VARCHAR(100)
             );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating Table". mysqli_error($this->con);
            }
        }else{
            return false;
        }
    }

    public function getData()
    {
        $sql = "SELECT * FROM $this->tableName";
        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0){
            return $result;
        }
    }

}