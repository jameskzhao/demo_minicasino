$('.btn-play').on('click', function(e) {
    var userBalance = parseInt($('#user-balance').text());
    var playAmount = $(this).data("value");
    console.log(userBalance);
    console.log(playAmount);
    if (userBalance < playAmount) {
        e.preventDefault();
        alert('Not sufficient balance');
    }

});