<?php
class Index{
    public static function display($user){
        $html = Header::display('index')
        .'<body>'
        .Nav::display($user)
        .Main::display('index',$user)
        .Footer::display()
        .LoginModal::display()
        .'</body>'
        .'</html>';
        return $html;
    }
}