<?php
class ShowController{
    public function getAllShows(){
        $shows = Show::getAll();
        return $shows;
    }
    public function findShow(){
        if(isset($_POST['search'])){
            
            $data = array(
                'search' => $_POST['search']
            );
            
            $shows = Show::search($data);
            return $shows;
        }
    }
    public function addController(){
        if(isset($_POST['add'])){
            $watch = null;
            if($_POST['watch'] === 'on'){
                $watch = true;
            } else{
                $watch = false;
            }
            $data = array(
                'title'=>$_POST['title'],
                'year'=>$_POST['year'],
                'rating'=>$_POST['rating'],
                'watch'=>$watch
            );
            print_r($data);
            $res = Show::add($data);
            if($res === 'ok'){
                Session::setAlert('success','Show Added Successfullly!');
                Redirect::to("home");
            }else{
                Session::setAlert('danger','Show Added Failed!');
            }

        }
    }
    public function updateController(){
        if(isset($_POST['update'])){
            $watch = null;
            if($_POST['watch'] === 'on'){
                $watch = true;
            } else{
                $watch = false;
            }
            $data = array(
                'title'=>$_POST['title'],
                'year'=>$_POST['year'],
                'rating'=>$_POST['rating'],
                'watch'=>$watch,
                'id'=>$_POST['id']
            );
            
            $res = Show::update($data);
            if($res === 'ok'){
                Session::setAlert('info','Show Updated Successfullly!');
                Redirect::to("home");
            }else{
                Session::setAlert('danger','Show Updated Failed!');
            }

        }
    }
    public function getShowController(){
        if(isset($_POST['id'])){
            $data = array(
                'id'=>$_POST['id']
            );
            $res = Show::getShow($data);
            return $res;
        }
    }
    public function deleteShowController(){
        if(isset($_POST['id'])){
            $data = array(
                'id'=>$_POST['id']
            );
            $res = Show::delete($data);
            if($res === 'ok'){
                Session::setAlert('info','Show Deleted Successfullly!');
                Redirect::to("home");
            }else{
                Session::setAlert('danger','Show Deleted Failed!');
            }
        }
    }

}

?>