<?php session_start();

$cartcount=0;
$gt=0;

if(isset($_SESSION["mycart"]))
{
	$cartcount= count($_SESSION["mycart"]);
	for($i=0;$i<$cartcount;$i++)
	{
		 @$subtotal += $_SESSION["mycart"][$i]["Price"] * $_SESSION["mycart"][$i]["Quantity"]; 
		 @$tax= $subtotal*20/100;
	}
	$gt = @$subtotal+@$tax;
}



?>
<?php
include("admin/config.php");

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Ecommerce HTML CSS Template</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
  
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->


                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>

                             <?php
                                 $q="SELECT * FROM category";
                                 $result=mysqli_query($conn,$q);
                                 while($row=mysqli_fetch_array($result))
                                 {

                                 
                             ?>
                            <li class="scroll-to-section"><a href="category.php?id=<?php echo $row["cat_id"]   ?>"><?php echo $row["cat_name"]  ?>'s</a></li>
                               <?php
                               }
                               ?>
                                 <li class="scroll-to-section"><a href="#top" class="">Cart</a></li>
                        </ul>     
                        
                        

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->