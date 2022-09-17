<?php
require_once("model/model.php");

class Roulette extends Model {

    private $sql;

    public function __construct(){
        parent::__construct();
        $this -> sql = "";
    }

    // Add static in data base
    public function setStat($sector){
        $this -> sql = "
            UPDATE `Roulette` SET stat=stat+1 WHERE sector = $sector
        ";
        $this -> inDB ($this -> sql);
    }

    // Receive from data base
    public function getStat(){
        $this -> sql = "
            SELECT `sector`, `stat` FROM `Roulette` ORDER BY sector
        ";
        $request = $this -> outDB($this -> sql);
        $stat = [];
        foreach ($request as $row)
            $stat[$row[`sector`]] = $row[`stat`];
        return $stat;
    }

    // Reset data base
    public function resetStat(){
        $this -> sql = "
            UPDATE `Roulette` SET stat = 0
        ";
        $this -> inDB ($this -> sql);
    }

}

?>