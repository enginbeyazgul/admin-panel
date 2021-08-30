<?php
define('PATH','http://127.0.0.1/admin-panel/');
function controller($controllerName)
{
    $controllerName = strtolower($controllerName);
    return 'controller/'.$controllerName.'.php';
}
function view($viewName)
{
    $viewName = strtolower($viewName);
    return 'view/'.$viewName.'.php';
}
?>