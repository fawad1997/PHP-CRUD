<?php
function openCon(){
	$con = mysqli_connect("localhost","root","","test")
	or
	die("Error During Connection!");
	return $con;
}
if(!isset($_SESSION)){
	session_start();
}
function selectAllFrom($tableName){
	return mysqli_query(openCon(),"Select * from ".$tableName);
}
?>