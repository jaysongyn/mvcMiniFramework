<?php

namespace SON\Controller;


class Action
{
    protected $view;
    protected $action;

    public function __construct(){

        $this->view = new \stdClass();
    }

    public function render($action, $layout = true){

        $this->action = $action;

        if($layout == true && file_exists("../App/View/layout.phtml")){

            include_once "../App/View/layout.phtml";
        }else{
            $this->content();
        }

    }

    public function content(){

        $atual = get_class($this);

        $singleClassName = strtolower(str_replace("App\Controller\\","",$atual));
        include_once "../App/View/".$singleClassName.'/'.$this->action.".phtml";

    }

}