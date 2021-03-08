<?php
    class Main
    {
        public static function display($page, $user)
        {
            switch ($page) {
                case 'index':
                    $page_title = "Welcome to Mini Casino!";
                    $search_panel = '';
                    break;
                case 'games':
                    $page_title = "Game List";
                    $search_panel = '<div class="row card-panel">
                    <div class="input-field col s12 ">    
                        <input type="text" id="search"> <button class="btn" id="search-btn">Search</button>
                        <label for="search">Enter search keyword...</label>
                    </div>
                </div>';
                    break;
                default:
                    $page_title = "Welcome!";
                    $search_panel = '';
                    break;
            }
            $html = '<div class="bg">
        <div class="container">
            <div class="row"></div>
            <div class="row">
                <h1 class="page-title">' . $page_title . '</h1>
            </div>'
            .$search_panel
            .'<div class="row games-list"></div>
        </div>
        </div>';
            return $html;
        }
    }
