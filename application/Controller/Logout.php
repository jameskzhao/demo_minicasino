<?php 
class Logout{
    public static function doLogout(){
        session_start();
        session_destroy();
        header('Location:/');
    }
}