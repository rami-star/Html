<?php

//fetch_item.php


include('databse_connection.php');

$query = "SELECT  * FROM tbl_product ORDER BY id DESC";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();

	foreach ($result as $row) {
		$output .= '
		<div class="col-md-3" style="margin-top:12px;">
		     <div style= "border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align = "center">
		         <img src = "imgers/' .$row["image"].'"
		       class = "img-responsive" /><br/>
		     </div>
		  </div>

		 ';
	}
}




?>