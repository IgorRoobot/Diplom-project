<?php
/**
 * Created by PhpStorm.
 * User: Igrik
 * Date: 19.09.2017
 * Time: 23:49
 */

class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {

    }
}