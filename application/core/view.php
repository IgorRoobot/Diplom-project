<?php
/**
 * Created by PhpStorm.
 * User: Igrik
 * Date: 19.09.2017
 * Time: 23:49
 */

class View
{
    //    public  $template_view; //Здесь можно указать общий вид по умолчанию
    function generate($content_view, $template_view, $data = null)
    {
//        if(is_array($data))
//        {
//            //преобразуем элементы массива в переменныеэ
//            extract($data);
//        }
        include 'application/views/'.$template_view;
    }
}