<?php

abstract class Components_MainController
{
    protected $m;

    public function __construct() {
        $this->m = new Models_Model();
    }

    public function get_body($tpl) {
        $this->get_content();
        $tp = "Templates/User/".$tpl.".php";
        include ("$tp");
    }

    abstract function get_content();

}