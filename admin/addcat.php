<?php
include("header.php");
?>


<?php

if(isset($_POST['btncat']))
{
    $name=$_POST['catname'];
     
    $query="INSERT INTO category(cat_name)values('".$name."')";

    $result=mysqli_query($conn,$query);

    if($result)
    {
        echo "<script>alert('Category Added');</script>";
    }
   else{
    echo "<script>alert('Category not Added');</script>";
   }
    // echo "<script>alert($name);</script>";
    
}

?>
<section id="main-content">
          <section class="wrapper">
 <!-- Basic Forms & Horizontal Forms-->
 <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add Categroy</h3>
					
				</div>
			</div>   
 <div class="row">
                  <div class="col-lg-12 mt-5">
                      <section class="panel">
                          <header class="panel-heading">
                              Add Category
                          </header>
                          <div class="panel-body">
                              <form method="post">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Category Name</label>
                                      <input type="text" class="form-control form-control-lg" placeholder="Enter Category" name="catname">
                                  </div>
                               
                                 <input type="submit" value="Submit" class="btn btn-primary btn-lg" name="btncat">
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