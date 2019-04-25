<?php
require './db.php';

try {
    
    //delete query
    $sql="delete from todo where id=:id";
    $stmt=$db->prepare($sql);
    $stmt-> bindValue("id",$_GET["id"], PDO::PARAM_INT);
    $stmt-> execute();
    
    header("Location: index.php");
    
} catch (PDOException $ex) {
    header("Location: error.php");
}