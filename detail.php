<?php
include_once 'config.php';
if(!isset($_GET["id"])){
	
?>

	<h1>not find page</h1>

<?php
}



$row = PDOWrapper::instance()->selectFirst("os_items","*",array("item_id"=>$_GET["id"]));
if(!$row){ 
?>

	<h1>not find page</h1>

<?php

}

?>

<h1><?php echo $row["item_name"]; ?></h1>

<div>
	<?php echo $row["item_body"]; ?>
</div>




