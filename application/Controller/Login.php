<?php
class Login
{
    public static function doLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = self::validateUser($username, $password);
        if($result){
            $user = new User($username);

            $_SESSION['current_user'] = $user;
            header('Location:/');
        }else{
            header('Location:/loginFailed');
        }
    }
    
    private static function validateUser($username, $password){
        global $mysqli;
        $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
        $result = $mysqli->query($query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $db_password = $row['password'];
                if(password_verify($password, $db_password)){
                    unset($row['password']);
                    return $row;
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }
    }
}
