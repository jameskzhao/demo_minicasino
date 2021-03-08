<?php
class Controller{
    public static function init(){
        if (!session_id()) session_start();
    }
    public static function show($user){
        echo Index::display($user);
    }
    public static function getSessionUser(){
        return $_SESSION['current_user'];
    }
}