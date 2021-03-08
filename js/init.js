(function($) {
    $(function() {
        M.AutoInit();
        $('.sidenav').sidenav();

    }); // end of document ready
})(jQuery); // end of jQuery name space

function getGames(append, keyword, loadbtn) {
    if (append) {
        $('#load').remove();
        from += size;
    } else {
        $('.games-list').empty();
    }
    var params = {
        from: from,
        size: size,
        keyword: keyword
    };
    $.get('/application/Service/getGames.php', params, function(data) {
        var games = data.data.games;
        var total = data.data.total;
        var html = '';

        if (games.length > 0) {
            games.forEach(function(el) {
                html += '<div class="col s12 m3">';
                html += '<div class="card blue-grey darken-1">';
                html += '<div class="card-content white-text">';
                html += '<span class="card-title">' + el.title + '</span>';
                html += '<img src="' + el.img + '" style="width:100%;">';
                html += '</div>';
                html += '<div class="card-action">';
                html += '<a href="/game/' + el.id + '/' + el.title + '">Play!</a>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
            });
        } else {
            html = '<div>No game found</div>';
        }

        $('.games-list').append(html);
        if (total > (from + size) && loadbtn) {
            $('.games-list').append('<button id="load" class="btn" onclick="getGames(true, keyword, true)">See More...</button>');
        }
    }, 'json');
}