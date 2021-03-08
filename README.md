# demo_minicasino

#### Following Nginx rewrite rules have to be applied so that all the pages could work.

    rewrite ^/logout?$ /index.php?page=logout last;
    rewrite ^/login?$ /index.php?page=login last;
    rewrite ^/loginFailed?$ /index.php?page=loginFailed last;
    rewrite ^/games?$ /index.php?page=games last;
    rewrite ^/registerUser?$ /index.php?page=registerUser last;
    rewrite ^/user?$ /index.php?page=user last;
    rewrite ^/register?$ /index.php?page=register last;
    rewrite ^/game/([\d]*)/?$ /index.php?page=game&id=$1 last;
    rewrite ^/game/([\d]*)/([^/]*)?$ /index.php?page=game&id=$1&title=$2 last;
    rewrite ^/play/([\d]*)?$ /index.php?page=play&amount=$1 last;

#### Database connection needed. Please refer to /application/database/demo.sql for more information.