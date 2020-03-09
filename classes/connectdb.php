<?php
require_once "db_cred.php";

class Connectdb extends db_cred
{
    protected $db_host;
    protected $db_name;
    protected $db_user;
    protected $db_password;
    protected $db_dataset;
    // propterties used to connect

    public function start_conn() 
    {
        try 
        {
            $this->db_host = $this->db_host_data;

            $this->db_name = $this->db_name_data;  

            $this->db_user = $this->db_user_data; 

            $this->db_password = $this->db_password_data;  

            $this->db_dataset = $this->db_dataset_data;  
            // value of properties 
            $pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
            // echo "connection succeded";
        }

        catch (PDOexception $e) 
        {
            ini_set("log_errors", 1);
            ini_set("error_log", "log/db.log");
            error_log($e->getMessage());
            // error log
           echo "Connection failed: Something went wrong";
        }
    
    }
    // method used to connect to database 

}