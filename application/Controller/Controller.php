<?php
class Controller{
    public static function init(){
        if (!session_id()) session_start();
    }
    public static function show($user){
        echo Index::display($user);
    }
    public static function showHead($page){
        echo Header::display($page);
    }
    public static function showNav($user){
        echo Nav::display($user);
    }
    public static function showFooter(){
        echo Footer::display();
    }
    public static function showLoginModal(){
        echo LoginModal::display();
    }
    public static function getSessionUser(){
        return $_SESSION['current_user'];
    }
}