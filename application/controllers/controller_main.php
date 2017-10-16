<?php
/**
 * Created by PhpStorm.
 * User: Igrik
 * Date: 19.09.2017
 * Time: 23:57
 */
class Controller_Main extends Controller
{
    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}