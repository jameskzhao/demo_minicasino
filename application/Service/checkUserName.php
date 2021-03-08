<?php
require_once '../database/db.php';

$username = $_POST['username'] ?? '';
$code = 200;
$message = 'OK';
$return_array = array(
    'code' => $code,
    'message' => $message,
    'data' => array(
        'isValid' => check_name($username)
    )
);
echo json_encode($return_array);
exit();
function check_name($username): bool
{
    global $mysqli;
    $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = $mysqli->query($query);
    if ($result->num_rows > 0) {
        return false;
    } else {
        return true;
    }
}
