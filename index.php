<?php
include_once 'config.php';
?>


<html>
	<head>
		<script src="//jquery.com/jquery-wp-content/themes/jquery/js/jquery-1.11.2.min.js"></script>
	</head>
	<body>
<!--
<sql>

</sql>
-->

		<h1>Link</h1>
		<ul>
			<?php
			$rows = PDOWrapper::instance()->select("os_items","*",null,5,0);
			for ($i=0; $i < count($rows); $i++) { 
				$row = $rows[$i];
			?>
			<li>
				<a href="detail.php?id=<?php echo $row["item_id"]; ?>"><?php echo $row["item_name"]; ?></a>
			</li>
			<?php } ?>
		</ul>
		
		
		
		<hr>
		<hr>
		
		<h1>Ajax-1</h1>
		<ul>
			<?php
			$rows = PDOWrapper::instance()->select("os_items","*",null,5,0);
			for ($i=0; $i < count($rows); $i++) { 
				$row = $rows[$i];
			?>
			<li>
				<a href="#" class="item_data" data-id="<?php echo $row["item_id"]; ?>"><?php echo $row["item_name"]; ?></a>
			</li>
			<?php } ?>
		</ul>		
		
		
		<hr>
		<hr>
		
		<h1>Ajax-2</h1>
		<ul>
			<?php
			$rows = PDOWrapper::instance()->select("os_items","*",null,5,0);
			for ($i=0; $i < count($rows); $i++) { 
				$row = $rows[$i];
			?>
			<li>
				<a href="#" onclick="calldata(<?php echo $row["item_id"]; ?>)"><?php echo $row["item_name"]; ?></a>
			</li>
			<?php } ?>
		</ul>
		
		
		<div id="leftWindowBox" style="width: 300px; position: absolute; right: 0; top: 0; height: 100%; border: 1px solid #111111; display: none; background-color: #777777; color: #FFFFFF;">
			<div  id="windowCloseBtn">Close</div>			
			<div id="leftItemName"></div>
			<div id="leftItemBody"></div>
			<div id="leftItemLink"></div>
		</div>
		
	</body>
	
	<script>
		$("#windowCloseBtn").bind("click", function() {
			$("#leftWindowBox").hide();
			$("#leftItemName").html("");
			$("#leftItemBody").html("");
			$("#leftItemLink").html("");
		});

		$(".item_data").click(function() {

			var $itemid = $(this).attr("data-id");

			calldata($itemid);
		});

		function calldata($itemid) {
			$.ajax({
				type : "POST",
				url : "detail_json.php",
				data : {
					id : $itemid
				}
			}).done(function(jsondata) {
				if (jsondata.success) {
					var itemdata = jsondata.data;
					$("#leftItemName").html(itemdata.item_name);
					$("#leftItemBody").html(itemdata.item_body);
					$("#leftItemLink").html('<a href="detail.php?id=' + itemdata.item_id + '">detail</a>');
					$("#leftWindowBox").show();
				}
			});
		}

	</script>
</html>
