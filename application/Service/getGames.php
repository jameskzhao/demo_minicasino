<?php
require_once '../database/db.php';
$from = $_GET['from'] ?? 0;
$size = $_GET['size'] ?? 8;
$keyword = $_GET['keyword'] ?? '';
$filter = '';
if ($keyword) {
    $filter .= " AND title LIKE '%$keyword%'";
}
$res = array(
    'status' => 'OK',
    'data' => array(
        'games' => get_games($from, $size, $filter),
        'total' => get_total($filter),
    )
);
echo json_encode($res);
function get_games($from, $size, $filter): array
{
    global $mysqli;

    $query = "SELECT * FROM games WHERE 1=1 $filter LIMIT $from, $size";
    $result = $mysqli->query($query);
    $return_array = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $return_array[] = $row;
        }
    }
    return $return_array;
}
function get_total($filter): int
{
    global $mysqli;
    $query = "SELECT COUNT(id) as total_count FROM games WHERE 1=1 $filter ";
    $result = $mysqli->query($query);
    $total = 0;
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $total = intval($row['total_count']);
        }
    }
    return $total;
}
