<?php
/**
 * Created by PhpStorm.
 * User: Skiff
 * Date: 4/23/2016
 * Time: 10:08 AM
 */

function _autoload($className)
{
    require_once $className . '.class.php';
}

spl_autoload_register('autoload');

$user = new User();