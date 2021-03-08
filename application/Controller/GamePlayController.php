<?php
class GamePlayController{
    public static function doPlay($amount, $user){
        global $mysqli;
        if($amount>0){
            $arr = range(1,20);
            $rand = $arr[array_rand($arr, 1)];
            if($rand==$amount){
                // wins
                $win_amount = $amount * 2;
                $query = "UPDATE users SET balance = balance + $win_amount WHERE username = '{$user->username}'";
                
            }else{
                $lost_amount = $amount;
                $query = "UPDATE users SET balance = balance - $lost_amount WHERE username = '{$user->username}'";
            }
            $mysqli->query($query);
        }
        header("Location:{$_SERVER['HTTP_REFERER']}");
        exit();
    }
}