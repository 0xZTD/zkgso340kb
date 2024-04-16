<?php


class BaseController
{
    protected function display($view, $data = [])
    {
        extract($data);

        include "Views/$view.php";
    }
}