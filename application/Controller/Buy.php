<?php
class Buy{
    public static function doBuy($user){
        if($user->loggedin){
            self::updateBalance($user);
        }else{
            echo Header::display('index')
        .'<body>'
        .Nav::display($user)
        .'<div class="container row">
            <div class="card-panel">
                <h5>Sorry but this function is for logged in user only.</h5> 
                <p>You can <a href="#login" class="btn modal-trigger">Login</a> or <a href="/" class="btn">Go Home</a></p>
            </div>
        </div>'
        .Footer::display()
        .LoginModal::display();
        }
    }
    private static function updateBalance($user){
        global $mysqli;
        $amount = 100;
        $query = "UPDATE users SET balance = balance + $amount WHERE username = '{$user->username}'";
        $mysqli->query($query);
        header("Location:{$_SERVER['HTTP_REFERER']}");
        exit();
    }
}