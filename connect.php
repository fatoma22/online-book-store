<?php
$dsn = 'mysql:host=localhost;dbname=bookshop';
$user = 'root';
$pass ='';
try{
$db = new pdo($dsn,$user,$pass);
echo 'You Are Connected';


}
catch(PDOException $e){
echo 'Failed'.$e->getMessage();
}
?>