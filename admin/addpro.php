<?php
include("header.php");
?>
<?php

if(isset($_POST['btnpro']))
{
    $name=$_POST['proname'];
    $des=$_POST['prodes'];
    $price=$_POST['proprice'];
    $cat=$_POST['procat'];
    // -------------files
    $img=$_FILES['proimg']['name'];
    $temp_loc=$_FILES['proimg']['tmp_name'];
      
    // ---------------------moving file to desired folder
         
        if(move_uploaded_file($temp_loc,$folder="admin_image/".$img))
        {
          $query="INSERT INTO product(pro_name,pro_desc,pro_price,pro_catfk,pro_img) VALUES('".$name."','".$des."','".$price."','".$cat."','".$img."')";
              $r=mysqli_query($conn,$query);
                        
                    if($r)
                    {
                        echo "<script>alert('Product Added');</script>";
                    }

                    else{
                        echo "<script>alert('Product not Added');</script>";
                    }
        }
        else{
            echo "<script>alert('Image not Uploaded');</script>";
        }



}

?>
<section id="main-content">
          <section class="wrapper">
 <!-- Basic Forms & Horizontal Forms-->
 <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add Product</h3>
					
				</div>
			</div>   
 <div class="row">
                  <div class="col-lg-12 mt-3">
                      <section class="panel">
                          <header class="panel-heading">
                              Add Product
                          </header>
                          <div class="panel-body">
                              <form method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Product Name</label>
                                      <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Enter Product" name="proname">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Product description</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter short Product Description" name="prodes"></textarea>
                                      
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Product price</label>
                                      <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Enter Product Price" name="proprice">
                                  </div>
                               
                                    
                                    <!-- --------------show category from table-------- -->
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Product category</label>
                                  <select  id="" class="form-control form-control-lg"  name="procat">
                                      <?php
                                            $show="SELECT * FROM category";
                                            $result=mysqli_query($conn,$show);
                                            while($row=mysqli_fetch_array($result))
                                           {                                                                                      
                                      ?>
                                  <option value="<?php  echo $row['cat_id']?>"><?php  echo $row['cat_name']?></option>
                                        <?php
                                           }
                                        ?>
                                 </select>                                    
                                  </div>






                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Product Image</label>
                                      <input type="file" class="form-control form-control-lg" id="exampleInputEmail1" name="proimg">
                                  </div>
                               
                                 <input type="submit" value="Submit" class="btn btn-primary btn-lg" name="btnpro">
                                  <!-- <button type="submit" class="btn btn-dark">Submit</button> -->
                              </form>

                          </div>
                      </section>
                  </div>
                  <div class="col-lg-12 mt-5 mx-5 text-success display-6">
                    <b>
                    <?php 
                     echo @$message 
                     ?>
                    </b>

                  </div>
              </div>

</section>
</section>






<?php

include("footer.php");
?>