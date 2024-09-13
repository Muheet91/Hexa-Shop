<?php
include("header.php");
?>



<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading about-page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>CHeckout</h2>
                    <span>Few Steps Left to order</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-8 mt-5">
            <h2 class="mb-3">Shipping Details</h2>
            <form class="row g-3"  method="post" action="purchase.php">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="inputAddress" name="uname">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4"  name="uemail">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="inputPassword4" name="uno">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="uaddres">
                </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" name="ucity">
                </div>

                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="uzip">
                </div>

                <div class="col-12">
                    <input type="submit" name="btnorder" class="btn btn-dark" value="Confirm Order">
                
                </div>
            </form>
        </div>


        <div class="col-md-4 mt-5">
        <div class="row text-light mt-5">
            <div class="col-md-12 bg-dark mt-5">
             <h2 class="mt-5">Summary</h2>
             <hr>
          
             <table class="table table-bordered text-light">
                    <tr>
                        <td>Cart SubTotal</td>
                        <td>Rs. <?php echo @$subtotal ?></td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Rs. <?php echo @$tax?></td>
                    </tr>
                    <tr>
                        <td>Total Bill Including Tax</td>
                        <td>Rs. <?php echo @$subtotal+@$tax; ?></td>
                    </tr>
             </table>
            </div>

            <div class="col-md-12 my-4 text-end">
                <a href="checkout.php" class="btn btn-outline-light">Checkout</a>
            </div>
         </div>
        </div>
    </div>
</div>


<?php
include("footer.php");
?>