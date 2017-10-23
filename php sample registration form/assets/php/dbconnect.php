<?php

class dbconnect {
    
    /*protected $db_host = "localhost";
    protected $db_name = "makanika_app";
    protected $db_user = "makanika_app";
    protected $db_pass = "Makanikadt.com";*/

    protected $db_host = "localhost";
    protected $db_name = "angella";
    protected $db_user = "root";
    protected $db_pass = "1234";
    
    protected $db;


    //Database connection construstor 
    public function __construct() {
        $this->db = new PDO ("mysql:host={$this->db_host};dbname={$this->db_name}", $this->db_user, $this->db_pass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
