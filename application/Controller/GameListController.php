<?php
class GameListController{
    public static function show($user){
        echo GameList::display($user);
    }
}