<?php
 include("header.php")

?>


   <!--main content start-->
   <section id="main-content">
          <section class="wrapper">
		 
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Product List
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>

                              <tr>

                                 <th>ID</th>
                                 <th> Name</th>
                                 <th>Description</th>
                                 <th> Price</th>
                                 <th> Category</th>
                                 <th>Image</th>
                                
                              </tr>

                              <?php
                                $query="SELECT * FROM productdetail";
                                $result=mysqli_query($conn,$query);
                                while($row=mysqli_fetch_array($result))
                                {
                         
                                ?>
                              <tr>
                          
                                 <td><?php echo $row["pro_id"]  ?></td>
                                 <td><?php echo $row["pro_name"]  ?></td>
                                 <td><?php echo $row["pro_desc"]  ?></td>
                                 <td><?php echo $row["pro_price"]  ?></td>
                                 <td><?php echo $row["cat_name"]  ?></td>
                                 <td><img src="<?php echo "admin_image/".$row["pro_img"]  ?>" alt="" class="img-thumbnail" width="100" height="40"></td>
                               
                               
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                   
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                              <?php
                                    }
                                 ?>
                              
                                                      
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->



<?php
 include("footer.php")

?>
