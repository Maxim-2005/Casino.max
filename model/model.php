<?php

abstract class Model {

    private $path;
    private $connect;

    protected function __construct() {
        $this -> path = "model/data/casino.sqlite";
    }

    // Save from data base
    protected function inDB($sql) {
        try {
            $this -> connect = new PDO("sqlite:$this");
            $this -> connect -> exec($sql);
            $this -> connect = null;
        } catch(PDOException $e){
            echo "Date base error". $e -> getMessage();
        }
    }

    // Load from data base
    protected function outDB($sql) {
        try {
            $this -> connect = new PDO("sqlite:$this");
            $request = $this -> connect -> query($sql);
            $this -> connect = NULL;
            return $request;
        } catch(PDOException $e){
            echo "Date base error". $e -> getMessage();
            return null;
        }
    }
}