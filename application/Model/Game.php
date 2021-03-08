<?php
class Game{
    public $id = 0;
    public $title = '';
    public $desc = '';
    public $image = '';
    public function __construct($id)
    {
        global $mysqli;
        $query = "SELECT * FROM games WHERE id = '$id' LIMIT 1";
        $result = $mysqli->query($query);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()){
                $this->id = $row['id'];
                $this->title = $row['title'];
                $this->desc = $row['description'];
                $this->image = $row['img'];
            }
        }
        
    }
    public function getData($game_id=0){
        return $this;
    }
}