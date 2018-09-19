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
    $sql="INSERT INTO `reservation`( `id_offre`, `id_use`, `date_res`, `date_deb`, `date_fin`) VALUES (".$_POST['offre'].",".$_POST['user'].",".$datenow.",".$_POST['dateD'].",".$_POST['dateF'].")";
    $query	= $db->prepare($sql);

    try
    {
        $query->execute();
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST, GET");
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
        exit;
    }
}