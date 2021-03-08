$('#username').on('focusout', function(e) {
    let username = e.target.value;
    if (username) {
        $.post('/application/Service/checkUserName.php', {
            username
        }, function(data) {
            if (!data.data.isValid) {
                $('#username-helper').text('Username is already taken. Choose a different one.');
                $('#username-helper').addClass('red-text');
                $('#username').addClass('invalid');
            } else {
                $('#username-helper').text('');
            }
        }, 'json');

    } else {
        $('#username-helper').text('Please enter a username');
        $('#username-helper').addClass('red-text');
        $('#username').addClass('invalid');
    }
});
$('input[type=password]').on('input blur change focusout', function(e) {
    let password = $('#password').val();
    let repass = $('#re-password').val();
    if (password !== repass) {
        $('#re-password').addClass('invalid');
        $('#re-pass-helper').text('Password not match');
        $('#re-pass-helper').addClass('red-text');
    } else {
        $('#re-password').removeClass('invalid');
        $('#re-pass-helper').text('');
    }
});
$('#my-form').on('submit', function(e) {

    let username = $('#username').val();
    let password = $('#password').val();
    let repass = $('#re-password').val();
    let dob = $('#birthdate').val();
    if (username && password && repass && dob) {
        if (password !== repass) {
            alert('Please enter same password');
            e.preventDefault();
        } else {
            let param = {};
            $('#my-form').submit();
        }
    } else {
        alert('Please enter all required fields');
        e.preventDefault();
    }
});