<?php
class RegisterController{
    public static function show($user){
        echo Register::display($user);
    }
}