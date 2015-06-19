<?php
header("Content-Type: application/json; charset=utf-8");
include_once 'config.php';
$data = array(
				"success"=>false
				,"data"=>array()
			);

if(!isset($_POST["id"])){
	// do nothing
}else{
	$row = PDOWrapper::instance()->selectFirst("os_items","*",array("item_id"=>$_POST["id"]));
	if(!$row){
		// do nothing
	}else{
		$data["data"]=$row;
		$data["success"]=true;
	}
}

echo json_encode($data);
