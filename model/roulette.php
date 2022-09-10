<?php
require_once("model/model.php");

class Roulette extends Model {

    private $sql;

    public function __construct(){
        parent::__construct();
        $this -> sql = "";
    }

    // Add static in data base

    // Receive from data base

    // Reset data base
    public function Reset(){
        $this -> sql = "
            UPDATE `Roulette` SET stat = 0
        ";
        $this -> inDB ($this -> sql);
    }

}

?>