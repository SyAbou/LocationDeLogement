<?php
/**
 * Created by PhpStorm.
 * User: arino
 * Date: 19/09/2018
 * Time: 16:09
 */

include 'config.php';

if (isset($_GET['id'])) {
    $sql="SELECT * FROM reservation INNER JOIN offre ON reservation.id_offre=offre.id_offre WHERE id_use=".$_GET['id'];
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