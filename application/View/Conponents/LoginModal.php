<?php
class LoginModal{
    public static function display(){
        $html = '<!-- Modal Structure -->
        <div id="login" class="modal">
            <div class="modal-content">
                <h4>Login</h4>
                <form class="col s12" action="/login" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="username" type="text" class="validate" name="username" required>
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="password" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <button class="btn" type="submit">Login</button>
                    <p>Don\'t have account with us? <a href="/register">Click here to register one.</a></p>
                </form>
            </div>
        </div>';
        return $html;
    }
}