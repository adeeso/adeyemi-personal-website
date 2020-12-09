<?php session_start();
// echo "<pre>";
// print_r($_GET);
// echo "<pre>";
include('../adeyemi.php');
$contact=new Contact("www.adeyemiadeeso.com", "adeyemi3_adeyemi1", "dantealighieri", "adeyemi3_adeyemi");

$result= $contact->deleteContact($_GET['id']);
//var_dump($result);
//exit();

header('Location:../admin/dashboard.php?$msg= successfully deleted');

?>
