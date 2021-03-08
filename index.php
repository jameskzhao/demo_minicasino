<?php

require_once 'application/database/db.php';

require_once 'application/Model/User.php';

require_once 'application/Model/Game.php';

require_once 'application/View/Index.php';

require_once 'application/View/Conponents/Nav.php';

require_once 'application/View/Conponents/Header.php';

require_once 'application/View/Conponents/Main.php';

require_once 'application/View/Conponents/Footer.php';

require_once 'application/View/Conponents/LoginModal.php';

require_once 'application/Controller/Controller.php';

$page = $_GET['page'] ?? 'index';

Controller::init();
$session_user = Controller::getSessionUser();
$user = new User($session_user->username);

switch ($page) {
    case 'logout':
        require_once 'application/Controller/Logout.php';
        Logout::doLogout();
        break;
    case 'login':
        require_once 'application/Controller/Login.php';
        Login::doLogin();
        break;
    case 'loginFailed':
        require_once 'application/Controller/LoginFailedController.php';
        require_once 'application/View/LoginFailed.php';
        LoginFailedController::show($user);
        break;
    case 'registerUser':
        require_once 'application/Controller/RegisterUser.php';
        RegisterUser::doRegister();
        break;
    case 'buy':
        require_once 'application/Controller/Buy.php';
        Buy::doBuy($user);
        break;
    case 'games':
        require_once 'application/Controller/GameListController.php';
        require_once 'application/View/GameList.php';
        GameListController::show($user);
        break;
    case 'register':
        require_once 'application/Controller/RegisterController.php';
        require_once 'application/View/Register.php';
        RegisterController::show($user);
        break;
    case 'game':
        $game_id = $_GET['id'] ?? 0;
        require_once 'application/Controller/GameController.php';
        require_once 'application/View/GameDetail.php';
        GameController::show($game_id, $user);
        break;
    case 'play':
        require_once 'application/Controller/GamePlayController.php';
        $amount = $_GET['amount'] ?? 0;
        GamePlayController::doPlay($amount, $user);
        break;
    case 'index':
        Controller::show($user);
        break;
}
