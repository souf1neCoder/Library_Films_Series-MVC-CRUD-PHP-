<?php
class User{
    static public function checkUser($data){
        $check = DB::connecte()->prepare("select * from users where username = :username");
        $check->bindParam(":username",$data['username']);
        $check->execute();
        return $check->rowCount();
    }
    static public function createUser($data){
        $add = DB::connecte()->prepare("insert into users(fullname,username,password) values(:fullname,:username,:password)");
        $add->bindParam(":fullname",$data['fullname']);
        $add->bindParam(":username",$data['username']);
        $add->bindParam(":password",$data['password']);
        
        if($add->execute()){
            return 'ok';
        } else{
            return 'error';
        }
        $add = null;
    }
    static public function login($data){
        $check = DB::connecte()->prepare("select * from users where username = :username");
        $check->bindParam(":username",$data['username']);
        $check->execute();
        return $check->fetch(PDO::FETCH_OBJ);
    }
}