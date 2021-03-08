<?php
class GameList{
    public static function display($user){
        $html = Header::display('games')
        .'<body>'
        .Nav::display($user)
        .Main::display('games', $user)
        .Footer::display()
        .LoginModal::display()
        .'</body>'
        .'</html>';
        return $html;
    }
}