<?php
/**
 * Created by PhpStorm.
 * User: arino
 * Date: 20/09/2018
 * Time: 14:50
 */

session_start();
if(isset($_SESSION['role']))
{
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET");
    echo json_encode($_SESSION['role']);
}
else
{
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET");
    echo json_encode(null);
}