<?php
/**
 * Created by PhpStorm.
 * User: arino
 * Date: 18/09/2018
 * Time: 14:47
 */

include 'config.php';

if (isset($_GET['GeoCor'])) {
    $sql="SELECT * FROM offre WHERE ST_CONTAINS(ST_GeomFromGeoJSON('".$_GET['GeoCor']."'),ST_GeomFromGeoJSON(cordonne))=1";
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
