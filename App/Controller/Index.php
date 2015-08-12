<?php

namespace App\Controller;
use SON\Controller\Action;


use SON\DI\Container;


/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/08/15
 * Time: 20:26
 */
class Index extends Action
{

    public function empresa(){

        $artigo =  Container::getClass('Artigo');

        $this->view->artigos = $artigo->fetchAll();

        $this->render('index');


    }
}