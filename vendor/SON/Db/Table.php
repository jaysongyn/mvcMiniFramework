<?php

namespace SON\Db;

class Table
{
    protected $db;
    protected $table;
    public function  __construct(\PDO $db){

        $this->db = $db;
    }

    public function fetchAll(){

        try{
            $query = "select * from {$this->table}";
            $db = $this->db->prepare($query);
            $db->execute();

            return $db->fetchAll();

        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

    }

}