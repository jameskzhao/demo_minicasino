var from = 0;
var size = 8;
var keyword = '';
$(document).ready(function() {
    getGames(false, '', true);
});
$('#search-btn').on('click', function() {
    keyword = $('#search').val();
    if (!keyword) {
        alert('No keyword entered. Returning all results');
    }
    getGames(false, keyword, true);
});