<?php
/**
 * Created by PhpStorm.
 * User: arino
 * Date: 19/09/2018
 * Time: 09:54
 */

include 'config.php';

if(isset($_POST['user'])&&isset($_POST['offre'])&&isset($_POST['dateD'])&&isset($_POST['dateF']))
{
    $datenow = date('Ymd');
    $sql="INSERT INTO `reservation`( `id_offre`, `id_use`, `date_res`, `date_deb`, `date_fin`) VALUES (:id, :user, :now, :dated, :datef)";
    $query	= $db->prepare($sql);

    //exit(var_dump($sql));

    try
    {
        $query->execute([
            'id' => $_POST['offre'],
            'user' => $_POST['user'],
            'now' => $datenow,
            'dated' => $_POST['dateD'],
            'datef' => $_POST['dateF'],
        ]);
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST, GET");
         echo json_encode(null);
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
        exit;
    }
}