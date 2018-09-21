<?php
/**
 * Created by PhpStorm.
 * User: arino
 * Date: 19/09/2018
 * Time: 11:50
 */


include 'config.php';

if (isset($_POST['createur'])&&isset($_POST['tarif'])&&isset($_POST['desc'])&&isset($_POST['long'])&&isset($_POST['lat'])&&isset($_POST['libelle'])) {
    $coordone = '{
    "type": "Point",
    "coordinates": [
        '.$_POST['long'].',
        '.$_POST['lat'].'
    ]
}';
    $sql="INSERT INTO `offre`(  `id_createur`, `tarif_offre`, `desc_offre`, `cordonne`, `libelle_offre`) VALUES (".$_POST['createur'].",".$_POST['tarif'].",'".$_POST['desc']."','".$coordone."','".$_POST['libelle']."')";
    echo $sql;
    $query	= $db->prepare($sql);

    try
    {
        $query->execute();
        header("Access-Control-Allow-Methods: POST, GET");
        header("Location: ../appartements.php");
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
        exit;
    }
}