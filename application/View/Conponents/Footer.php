<?php
class Footer{
    public static function display(){
        $html = '<footer class="page-footer orange">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">About</h5>
                    <p class="grey-text text-lighten-4">
                        This is a demo site to serve as a simplified version of a online casino. You will be able to register and login. You can also play games in our library.</p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Games</h5>
                    <ul>
                        <li><a class="white-text" href="/games">Library</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="orange-text text-lighten-3" href="https://jameszhao.ca">James Zhao</a>
            </div>
        </div>
    </footer>';
    return $html;
    }
}