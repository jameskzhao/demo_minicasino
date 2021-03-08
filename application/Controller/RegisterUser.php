<?php
class RegisterUser{
    public static function doRegister(){
        $username = $_POST['username']??'';
        $password = $_POST['password']??'';
        $dob = $_POST['dob']??'';
        $red_url = $_SERVER['HTTP_REFERER'];
        if($username&&$password&&$dob){
            if(self::saveUser($_POST)){
                $user = new User($username);
                $_SESSION['current_user'] = $user->getData();
                $red_url = '/';
            }
        }
        header('Location:'.$red_url);
        exit();
    }
    private static function saveUser($value):bool{
        global $mysqli;
        $username = $value['username'];
        $password = password_hash($value['password'], PASSWORD_DEFAULT);
        $dob = $value['dob'];
        if($username&&$password&&$dob){
            $query = "INSERT INTO users(username, password, dob, balance) VALUES('$username', '$password', '$dob', 100)";
            return $mysqli->query($query);
        }else{
            return false;
        }   
    }
}