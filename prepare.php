<?php
$servername="localhost";
$username="root";
$password="";

try{
    $conn=new pdo("mysql:host=$servername;dbname=new",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt=$conn->prepare("INSERT INTO newtable(name,age)VALUES(:name,:age)");

$stmt ->bindParam(':name',$name);
$stmt->bindParam(':age', $age);

$name="manu";
$age=10;
$stmt->execute();

echo"new data is done";
}
catch(PDOException $e){
    echo"something went be worng".$e->getmessage();
}