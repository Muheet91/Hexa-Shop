<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">
     <?php
          session_start();
    //   --------------------login page work

      if(isset($_POST['btnlog']))
      {
          $name=$_POST['uname'];
          $pass=$_POST['upass'];

        //   echo $name."<br>";
        //   echo $pass;
              
           if($name == "admin" && $pass == "admin")
           {
               $_SESSION['username']=$name;
               header("location:dashboard.php");
           }

           else{
              $message="Invalid Username Password";
           }

      }
     ?>
    <div class="container">

      <form class="login-form" method="post">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Username" name="uname">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="upass">
            </div>
           <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block" name="btnlog">
            <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button> -->
               <div class="text-danger text-center mt-4">
               <?php
                    echo @$message;

                      ?>
               </div>
           


        </div>
      </form>
 


  </body>
</html>
