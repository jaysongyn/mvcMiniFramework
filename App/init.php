<?php

namespace App;

use SON\init\Bootstrap;

class init extends Bootstrap
{
    protected function initRoutes(){

        $ar['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
        $ar['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
        $this->setRoutes($ar);
    }

    public static function getDb(){

        try {

                $db = new \PDO('mysql:host=localhost;dbname=mvc','root','gamecube');
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                return $db;

        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }



    }

}