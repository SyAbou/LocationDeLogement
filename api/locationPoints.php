<?php
/**
 * Created by PhpStorm.
 * User: arino
 * Date: 18/09/2018
 * Time: 09:20
 */

include 'config.php';

if (isset($_GET['GeoCor']))
{
$geocor = json_decode($_GET['GeoCor']);
$x = $geocor->coordinates[0];
$y = $geocor->coordinates[1];

$nbKM = 30;

$const = 0.0089936 * $nbKM;

$xmin = $x-$const;
$xmax = $x+$const;
$ymin = $y-$const;
$ymax = $y+$const;






 $sql="SELECT id_offre, cordonne FROM offre WHERE ST_CONTAINS(ST_GEOMFROMTEXT('POLYGON((".$xmin." ".$y.",".$x." ".$ymax.",".$xmax." ".$y.",".$x." ".$ymin.",".$xmin." ".$y."))',4326),ST_GeomFromGeoJSON(cordonne))=1";
 //echo $sql;
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
        echo json_encode($e->getMessage());
        exit;
    }





}