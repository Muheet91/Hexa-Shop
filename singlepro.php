<?php
 include("header.php")

?>


    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2> Product Description</h2>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Product Area Starts ***** -->
    <section class="section my-5" id="product">
        <div class="container my-5">

        <?php
               if(isset($_GET['pid']))
               {
                   $id=$_GET['pid'];
                   $query="SELECT * FROM productdetail where pro_id='".$id."'";
                   $result=mysqli_query($conn,$query);
                   while($row = mysqli_fetch_array($result))
                   {

                 

           ?> 

            <div class="row mt-5">
                <div class="col-lg-6">
                <div class="left-images">
                    <img src="<?php echo "admin/admin_image/".$row["pro_img"]  ?>" alt="">
                  
                </div>
            </div>


            <div class="col-lg-6">
                <div class="right-content">
                    <h4><?php echo $row["pro_name"]  ?></h4>
                    <span class="price">RS:<?php echo $row["pro_price"]  ?></span>
                  
                   
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p><?php echo $row["pro_desc"]  ?></p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>No. of Orders</h6>
                        </div>
                        <br>
                        <br>
                        
                      
                    </div>

                    <div class="total">
                        <form action="addcart.php" method="post" >
                            <input type="hidden" name="hide_id" value="<?php echo $row["pro_id"]  ?>">
                            <input type="hidden" name="hide_name" value="<?php echo $row["pro_name"]  ?>">
                            <input type="hidden" name="hide_price" value="<?php echo $row["pro_price"]  ?>">
                            <input type="hidden" name="hide_img" value="<?php echo $row["pro_img"]  ?>">
                            <input type="number" name="hide_qty"  class="form-control" title="Qty" value="1" name="quantity" min="1" >
                            <br>
                       
                        <div class="main-border-button">
                            <!-- <button class="btn btn-outline-dark" type="submit">Add To Cart</button>                        -->
                            <button class="add_to_cart_button" type="submit" name="btncart">Add to cart</button>
                         
                        </div> 
                    
                    </form>
                    </div>

                </div>
            </div>

            <?php
  }
}
            ?>

            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
    






<?php
 include("footer.php")

?>
