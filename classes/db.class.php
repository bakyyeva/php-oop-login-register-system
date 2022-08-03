<?php
 session_start();

class DB {

    protected function connect(){
        try {
            $db = new PDO("mysql:dbname=loginsystem;host=localhost;charset=utf8", "root", "");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            return $db;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>