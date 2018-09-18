<?php
/**
 * Created by PhpStorm.
 * User: arino
 * Date: 18/09/2018
 * Time: 15:58
 */

include 'config.php';

if (isset($_POST['mail'])&&isset($_POST['pwd'])) {
    $sql="SELECT * FROM users WHERE  mail_users=:mail AND pasword_users=:pwd";
    $query	= $db->prepare($sql);

    try
    {
        $query->execute([
            'mail'=>$_POST['mail'],
            'pwd'=>$_POST['pwd'],
        ]);
        $results=$query->fetchAll();
        header("Content-Type: application/json");
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST, GET");
        http_response_code(200);
        echo json_encode($results);
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
        exit;
    }
}