<?php
class Show{
    static public function getAll(){
        $shows = DB::connecte()->prepare("select * from shows where USERID = :userid");
        $userID=$_SESSION['user']->ID;
        $shows->bindParam(":userid",$userID);
        $shows->execute();
        return $shows->fetchAll();
        $shows = null;
    }
    static public function search($data){
        $shows = DB::connecte()->prepare("select * from shows where USERID = :id and TITLE like :value ");
        $searchValue = "%".$data['search']."%";
        $userID=$_SESSION['user']->ID;
        $shows->bindParam(":id",$userID);

        $shows->bindParam(":value",$searchValue);
        $shows->execute();
        return $shows->fetchAll();
        $shows = null;
    }
    static public function add($data){
        $add = DB::connecte()->prepare("insert into shows(TITLE,YEAR,WATCH,USERID,RATING) values(:title,:year,:watch,:userid,:rating)");
        $add->bindParam(":title",$data['title']);
        $add->bindParam(":year",$data['year']);
        $add->bindParam(":watch",$data['watch']);
        $userID=$_SESSION['user']->ID;
        $add->bindParam(":userid",$userID);
        
        $add->bindParam(":rating",$data['rating']);
        if($add->execute()){
            return 'ok';
        } else{
            return 'error';
        }
        $add = null;
    }
    static public function update($data){
        $update = DB::connecte()->prepare("update shows set TITLE = :title , YEAR = :year , WATCH = :watch , RATING = :rating where ID = :id");
        $update->bindParam(":title",$data['title']);
        $update->bindParam(":year",$data['year']);
        $update->bindParam(":watch",$data['watch']);
        $update->bindParam(":id",$data['id']);
        
        $update->bindParam(":rating",$data['rating']);
        if($update->execute()){
            return 'ok';
        } else{
            return 'error';
        }
        $update = null;
    }
    static public function getShow($data){
        $id = $data['id'];
        $show = DB::connecte()->prepare("select * from shows where ID = :id");
        $show->bindParam(":id",$id);
        $show->execute();
        return $show->fetch(PDO::FETCH_OBJ);
        $show = null;
    }
    static public function delete($data){
        $id = $data['id'];
        $show = DB::connecte()->prepare("delete from shows where ID = :id");
        $show->bindParam(":id",$id);
        if($show->execute()){
            return 'ok';
        } else{
            return 'error';
        }
        $show = null;
    }

    }
