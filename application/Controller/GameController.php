<?php
class GameController{
    public static function show($game_id, $user){
        $game = new Game($game_id);
        echo GameDetail::display($game, $user);
    }
}