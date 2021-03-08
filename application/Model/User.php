<?php
class User{
    public $username;
    public $loggedin;
    public $balance;
    public $dob;
    public $registerDate;
    public function __construct($username)
    {
        global $mysqli;
        $this->username = $username;
        
        $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
        $result = $mysqli->query($query);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()){
                $this->loggedin = true;
                $this->balance = floatval($row['balance']);
                $this->dob = $row['dob'];
                $this->registerDate = $row['date_added'];
            }
        }
        
    }
    public function getData(){
        return $this;
    }
}