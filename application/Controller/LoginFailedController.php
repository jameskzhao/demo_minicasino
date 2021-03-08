<?php
class LoginFailedController{
    public static function show($user){
        echo LoginFailed::display($user);
    }
}