<?php
/**
 * Created by PhpStorm.
 * User: arino
 * Date: 19/09/2018
 * Time: 13:38
 */

include 'config.php';

if (isset($_GET['id'])) {
    $sql="SELECT * FROM offre WHERE id_createur=".$_GET['id'];
    $query	= $db->prepare($sql);

    try
    {
        $query->execute();
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
