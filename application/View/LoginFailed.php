<?php
class LoginFailed{
    public static function display($user){
        $html = Header::display('index')
        .'<body>'
        .Nav::display($user)
        .'<div class="container">
            <h2>Sorry, login failed.</h2>
            <p>Please check your username and password and try again</p>
        </div>'
        .Footer::display()
        .LoginModal::display()
        .'</body>'
        .'</html>';
        return $html;
    }
}