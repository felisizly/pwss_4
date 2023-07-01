<?php
include 'tersekon.php';
$teskon = new database();

$action = $_GET['action'];
if($action == "add") {
	$teskon->tambah_data($_POST['nim'],$_POST['nama'],$_POST['email'],$_POST['hp'],$_POST['prodi']);
	header('location:tampil_data.php');

}else if($action == "update") {
	$teskon->update_data($_POST['nim'],$_POST['nama'],$_POST['email'],$_POST['hp'],$_POST['prodi']);
	header('location:tampil_data.php');

}else if($action == "delete"){
	$nim = $_GET['x'];
	$teskon->delete_data($nim);
	header('location:tampil_data.php');
}
