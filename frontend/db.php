<?php
function exeQuery($sqlQuery,$getAll=true){
    $host="localhost";
    $dbname="baikt";
    $dbusername="root";
    $dbpassword="";
    $connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$dbusername,$dbpassword);
    $stmt =$connect->prepare($sqlQuery);
    $stmt->execute();
    if($getAll==true){
        return $stmt->fetchAll();
        echo"<pre>";
    }
    else {
        return $stmt->fetch();
        echo "<prev>";
    }
}
?>