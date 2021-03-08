<?php
class Header{
    public static function display($page){
        $game_list_js = $page=='games'?'<script src="/js/games_list.js" defer></script>':'';
        $game_js = $page=='game'?'<script src="/js/game.js" defer></script>':'';
        $register_js = $page=='register'?'<script src="/js/register.js" defer></script>':'';
        $index_js = $page=='index'?'<script src="/js/index.js" defer></script>':'';
        $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
            <title>'.$page.'</title>
        
            <!-- CSS  -->
        
            <!-- Compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
            <link href="/css/style.css" type="text/css" rel="stylesheet" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <!-- Compiled and minified JavaScript -->
            <!--  Scripts-->
            <script src="https://code.jquery.com/jquery-2.1.1.min.js" defer></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" defer></script>
            <script src="/js/init.js" defer></script>
            '.$index_js.$game_list_js.$game_js.$register_js.'
        </head>';
        return $html;
    }
}