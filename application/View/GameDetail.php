<?php 
class GameDetail{
    public static function display($game, $user){
        $html = Header::display('game')
        .'<body>'
        .Nav::display($user)
        .'
        <nav class="light-blue darken-3">
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="/" class="breadcrumb">Home</a>
                    <a href="/games" class="breadcrumb">Games</a>
                    <a href="#" class="breadcrumb">'.$game->title.'</a>
                </div>
            </div>
        </nav>
        <div class="container">
        
            <div class="row">
                <div class="col s12">'
                    .($user->loggedin?'':'<h3>Please <a href="#login" class="btn modal-trigger">login</a> to play</h3>')
                    .'<h2 class="game-title">'.$game->title.'</h2>
                    <p class="game-desc">'.$game->desc.'</p>
                    <div class="game-image">
                        <img src="'.$game->image.'">
                    </div>
                </div>
            </div>
            <div class="row">
                Balance: $<span id="user-balance">'.$user->balance.'</span>
            </div>
            <div class="row">
                <a href="/play/1" class="btn btn-play '.($user->balance<1?'disabled':'').'" data-value="1">$1</a>
                <a href="/play/3" class="btn btn-play '.($user->balance<3?'disabled':'').'" data-value="3">$3</a>
                <a href="/play/5" class="btn btn-play '.($user->balance<5?'disabled':'').'" data-value="5">$5</a>
                <a href="/play/10" class="btn btn-play '.($user->balance<10?'disabled':'').'" data-value="10">$10</a>
            </div>'
            
        .'</div>'
        .Footer::display()
        .LoginModal::display()
        .'</body>'
        .'</html>';
        return $html;
    }
}