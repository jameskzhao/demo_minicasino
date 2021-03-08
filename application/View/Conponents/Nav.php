<?php
class Nav
{
    public static function display($user):string{

        if($user->loggedin){
            $user_link = '<a href="/games">Hi '.$user->username.', go to games</a>';
            $user_link_mob = '<a href="/games">Hi '.$user->username.', go to games</a>';
            $balance = '<li><a href="#">Balance: $'.$user->balance.'</a></li>';
            $logout = '<li><a href="/logout">Logout</a></li>';
        }else{
            $user_link = '<a class="modal-trigger" href="#login">Register / Login</a>';
            $user_link_mob = '<a class="modal-trigger" href="#login">Register / Login</a>';
            $logout = '';
        }
        $html = '<nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">
                    MINI CASINO
                </a>
                <ul class="right hide-on-med-and-down">
                    <li>'.$user_link.'</li>
                    '.$balance.'
                    '.$logout.'
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li>'.$user_link_mob.'</li>
                    '.$balance.'
                    '.$logout.'
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
            </div>
        </nav>';
        return $html;
    }
}
