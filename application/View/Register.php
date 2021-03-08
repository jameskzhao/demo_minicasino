<?php
class Register{
    public static function display($user){
        $html = Header::display('register')
        .'<body>'
        .Nav::display($user)
        .'
        <div class="container row">
            <form class="col m6 offset-m3" method="POST" id="my-form" action="/registerUser">
            <div class="row">
                <div class="input-field col s12">
                    <input id="username" type="text" class="validate" name="username" required>
                    <label for="username">Username</label>
                    <span id="username-helper" class="helper-text"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate" name="password" required>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="re-password" type="password" class="validate" required>
                    <label for="re-password">Repeat Password</label>
                    <span id="re-pass-helper" class="helper-text"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="birthdate" type="date" class="validate" name="dob" required>
                    <label for="birthdate">Birthdate</label>
                </div>
            </div>
            <button class="btn">Register User</button>
        </div>
        
    </form>'
        .Footer::display()
        .LoginModal::display()
        .'</body>'
        .'</html>';
        return $html;

        
    }
}