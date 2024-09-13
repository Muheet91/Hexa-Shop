<?php
session_start();
if(isset($_REQUEST["index"]))
{
	if(isset($_SESSION["mycart"]))
	{
		unset($_SESSION["mycart"][$_REQUEST["index"]]);
	
		sort($_SESSION["mycart"]);
		echo "<script>window.location.href='addcart.php'</script>";
	}
	
}


?>