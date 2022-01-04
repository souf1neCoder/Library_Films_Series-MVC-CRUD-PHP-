<?php
class DB{
    static public function connecte(){
        
        $db = new PDO("mysql:host=localhost
        ;dbname=mym","root","");
        $db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }
}
?>