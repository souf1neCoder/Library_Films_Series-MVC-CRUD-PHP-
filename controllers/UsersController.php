<?php 
    class UsersController{
        public function loginUser(){
            if(isset($_POST['submit'])){
                $data = array(
                    'username' => $_POST['username']
                );
                $result = User::login($data);
                if($result->username === $_POST['username'] && password_verify($_POST['password'],$result->password)){
                    $_SESSION['logged'] = true;
                    $_SESSION['user'] = $result;
                    Redirect::to('home');
                }else{
                    Session::setAlert('danger','Username Or Password Incorrect');
                    Redirect::to('login');
                }
            }
        }
        public function register(){
            if(isset($_POST['submit'])){
                $username = array(
                    'username'=>$_POST['username']
                );
                $checkNumber = User::checkUser($username);
                if($checkNumber === 0){
                    $options = [
                        'cost'=>12
                    ];
                    $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
                    $data = array(
                        'fullname'=>$_POST['fullname'],
                        'username'=>$_POST['username'],
                        'password'=>$password
                    );
                    $result = User::createUser($data);
                    if($result === 'ok'){
                        Session::setAlert('success','Account Created Successfully!');
                        Redirect::to('login');
                    }
                }
                else{
                    Session::setAlert('danger','Username Already Exist Please try Another Username');
                }
               
            }
        }
        static public function logout(){
            session_destroy();
        }
    }
?>