<?php
 include("header.php")

?>
<?php
// --------------------Delet work
if(isset($_GET['did']))
{
    $del_id=$_GET['did'];
//    echo $del_id
$q="DELETE FROM category where cat_id='".$del_id."'  ";

$result=mysqli_query($conn,$q);
if($result)
{
    // move to another page
    header("Location:showcat.php");
}
else
{
    // move to another page
    header("not deleted");
}

}

?>


   <!--main content start-->
   <section id="main-content">
          <section class="wrapper">
		 
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Advanced Table
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i ></i>ID</th>
                                 <th><i ></i> Name</th>
                                
                              </tr>

                              <?php
                                 $show="SELECT * FROM category";
                                  $result =mysqli_query($conn,$show);
                                 while($row=mysqli_fetch_array($result))
                                 {
                       
                              ?>
                              <tr>
                                 <td><?php echo $row['cat_id']   ?></td>
                                 <td><?php echo $row['cat_name']   ?></td>
                               
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                   
                                      <a class="btn btn-danger" href="showcat.php?did=<?php echo $row['cat_id']   ?>"><i class="icon_close_alt2"></i></a>
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
