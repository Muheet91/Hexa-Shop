<?php
include("header.php");

?>







    
<div class="page-heading" id="top">
    <div class="container">
        <div class="row rounded" >
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2> Your Cart</h2>
                    <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                </div>
            </div>

            <h1 class="mt-4"><?php  echo @$message   ?></h1>
        </div>
    </div>
</div>




<?php
			   
			   if(isset($_POST["btncart"]))
			   {	
			//    echo "<script>window.location.href='cart.php'</script>";
				   if(!isset($_SESSION["mycart"]))
				   {
					   $_SESSION["mycart"] = array();
				}
				   
				   //----------------------get hide values
				  $id = $_POST["hide_id"];
				  $name = $_POST["hide_name"];
				  $image = $_POST["hide_img"];
				  $price = $_POST["hide_price"];
			      $qty = $_POST["hide_qty"];
				  
				  $IsExist = false;
				//--------------------------------------------------- quantity existing product meadd karni hogi
                $count = count($_SESSION["mycart"]);
				  $_SESSION["count"]=  $count ; //another variable of session
				  if($count>0)
				  {
					  for($x=0 ; $x<$count;$x++)
					  {
						  if($_SESSION["mycart"][$x]["ID"] ==  $id )
						  {
							  
							  $_SESSION["mycart"][$x]["Quantity"]= $_SESSION["mycart"][$x]["Quantity"]+ $qty ;
							   $IsExist = true;
						  }
					  }
					  
					 }
				  

                //-=----------------------------------------------------------------------------------
				  
				  
				  if(!$IsExist)
				  {
					  
					  array_push($_SESSION["mycart"],array("ID"=>$id,"Name"=>$name,"Image"=>$image,"Price"=>$price,"Quantity"=>$qty));
				  }
				  
			}
			 	   		   
		   ?>
<section class="section" id="product">
<?php
  if(!empty($_SESSION["mycart"]))
  {
      
?>
<div class="container  my-5">
    <div class="row px-2">

        <div class="col-md-8 bg-light">
           <table class="table">
            <h1 class="mb-4 mt-4">Shopping Cart</h1>
         
                  <tr>
                    <th></th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                  <?php
                  if(isset($_SESSION["mycart"]))
                  {
                    $subtotal=0;
					$tax =0;
                    $count =count($_SESSION["mycart"]);
                    for($i=0;$i<$count;$i++)
										{
                  ?>
                  <tr>
                    <td><img src="<?php echo "admin/admin_image/".$_SESSION["mycart"][$i]["Image"]?>" class="img-thumbnail"  height="70" width="70"/></td>
                    <td class="mt-4"><?php echo $_SESSION["mycart"][$i]["Name"]?></td>
                    <td><input type="text" disabled class="form-control" min=1 max=10 value="<?php echo $_SESSION["mycart"][$i]["Quantity"]?>">  </td>
                    <td>Rs. <?php echo $_SESSION["mycart"][$i]["Price"]?> </td>
                    <td> Rs. <?php echo $_SESSION["mycart"][$i]["Price"] * $_SESSION["mycart"][$i]["Quantity"] ?></td>
                    <td><a href="removecart.php?index=<?php echo $i?>"class="btn btn-danger"><i class="fa-solid fa-xmark"></i>x</a></td>
                   


              
                  </tr>
                  <?php
                    $subtotal += $_SESSION["mycart"][$i]["Price"] * $_SESSION["mycart"][$i]["Quantity"];
				 
                    $tax = $subtotal*5/100;
                                        }
                  }
                  ?>
           </table>

           <a href="index.php" class="btn btn-dark mt-5">Continue Shopping</a>
        </div>
        <div class="col-md-4 bg-dark">
         <div class="row text-light">
            <div class="col-md-12 ">
             <h2 class="mt-5">Summary</h2>
             <hr>
             <?php
           
                 ?>
             <table class="table table-bordered text-light">
                    <tr>
                        <td>Cart SubTotal</td>
                        <td>Rs. <?php echo $subtotal ?></td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Rs. <?php echo $tax?></td>
                    </tr>
                    <tr>
                        <td>Total Bill Including Tax</td>
                        <td>Rs. <?php echo $subtotal+$tax; ?></td>
                    </tr>
             </table>
            </div>

            <div class="col-md-12 my-4 text-end">
                <a href="checkout.php" class="btn btn-outline-light">Checkout</a>
            </div>
         </div>
        </div>
    </div>
 <?php
  }

  else{
    $message='Your Cart is Empty';
  }
 ?>   
    <h1 class="mt-4 text-center"><?php  echo @$message   ?></h1>
</section>




<?php
include("footer.php");
?>