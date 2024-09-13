<?php
include("admin/config.php");
session_start();
?>



<?php
if(isset($_POST["btnorder"]))
{
    $name=$_POST["uname"];
    $em=$_POST["uemail"];
    $no=$_POST["uno"];
    $add=$_POST["uaddres"];
    $city=$_POST["ucity"];
    $zip=$_POST["uzip"];

     // ----------------------user table data

    $query1= "insert into user(user_name,user_email,user_phno,user_add,user_city,user_zip) values 
		('".$name."','".$em."','".$no."','".$add."','".$city."','".$zip."')";

        // ----------------------order table data

        if(mysqli_query($conn,$query1))
        {
            $Order_id = mysqli_insert_id($conn);
            $query2= "insert into  user_order(order_id,order_name,order_price,order_qty) values(?,?,?,?)";
            $stmt=mysqli_prepare($conn,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$order_id,$order_name,$order_price,$order_qty);
                foreach($_SESSION["mycart"] as $keys => $values)
                {
                    $order_id =  $values["ID"];
                    $order_name =  $values["Name"];
                    $order_price = $values["Price"];
                    $order_qty = $values["Quantity"];
                    mysqli_stmt_execute($stmt);		
                }
                unset($_SESSION["mycart"]);
                echo "<script>alert('Order Placed');window.location='index.php'</script>";
            }
            else
            {
                echo "<script>alert('".mysqli_error($conn)."')</script>";
            }

        }


        else
        {		
            echo "<script>alert('".mysqli_error($connect)."')</script>";
        }

}
?>
