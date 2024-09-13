<?php
 include("header.php")

?>

 <!-- ***** Men Area Starts ***** -->
 <section class="section my-5" id="men">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                <?php
                                 if(isset($_GET['id']))
                                 {
                                    $Id=$_GET['id'];
                                    $query1="SELECT * FROM productdetail where cat_id='".$Id."'";
                                    $result1=mysqli_query($conn,$query1);
                                    $row1 = mysqli_fetch_array($result1);
                                    if($row1 > 0)
                                    {
                                        
                                    
                                                               
                          ?> 
                                <div class="section-heading">
                                    <h2><?php echo $row1["cat_name"] ?>'s Latest</h2>
                                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                                </div>
                    <?php
                                    }
                        }
                           
                               ?>


                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                          
                         <?php
                                 if(isset($_GET['id']))
                                 {
                                    $Id=$_GET['id'];
                                    $query="SELECT * FROM product where pro_catfk='".$Id."'";
                                    $result=mysqli_query($conn,$query);
                                    $row_count = mysqli_num_rows($result);
                                    if($row_count > 0)
                                    {
                                         while($row=mysqli_fetch_array($result))
                                          {
                                    
                                                               
                          ?> 

                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
      <li><a href="singlepro.php?pid=<?php echo $row["pro_id"] ?>"><i class="fa fa-eye"></i></a></li>                                        
                                            <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>\
                                    
                                    <img src="<?php echo "admin/admin_image/".$row["pro_img"] ?>" alt="">
                                </div>
                                <div class="down-content">
                                    <h4><?php echo $row["pro_name"] ?></h4>
                                    <span><?php echo $row["pro_price"] ?></span>
                                
                                </div>
                            </div>
                           
                            <?php
                            }

                            }
                            else {
                                $message = "No Product Available";
                            }
                        }
                           
                               ?>




                        </div>
                    </div>
                </div>
                <div class="col-lg-12  text-center text-dark display-6">
                <b><h1>
                    <?php
                    echo @$message
                    ?>
                </h1></b>

            </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->


<?php
 include("footer.php")

?>