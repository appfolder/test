<?php
include '../vendor/autoload.php';
include '../inc/dbcon.php';
include '../inc/config.php';
if (isset($_GET['query']) && !empty($_GET['query']))
{
    $sql = $_GET['query'];
    $result =$conn->query($sql);
    if($result && $result->num_rows==1){
        while ($row = $result->fetch_array(MYSQLI_ASSOC)){

            $rows[]=$row;
        }
        die(json_encode($rows));
    }else
    die("0");
}
