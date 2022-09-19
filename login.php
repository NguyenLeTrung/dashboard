<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="./css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="./css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>

        <?php 
           if(isset($_POST['login'])){
                if ($_POST['email'] == null || $_POST['password'] == null) {
                    echo ("Nhập tài khoản");
                }else{
                    $username = $_POST['email'];
                    $pass =$_POST['password'];
                    $con = mysqli_connect("localhost", "root", "");
                    mysqli_select_db($con, "myshop");
                    $sql = "SELECT * FROM account WHERE accountName = '$username' AND accountPass = '$pass'";
                    $query = mysqli_query($con,$sql);
                    if(mysqli_num_rows($query) == 0){
                        echo ("Đăng nhập không thành công");
                    }else{
                        // echo ("Đăng nhập thành công");
                        header('Location: index.html');
                    }
                }
           }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="color: green; text-align: center;">Login</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="login.php" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                                    <input class="btn btn-lg btn-success btn-block" type="submit" name="login" value="Login" >
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="./js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="./js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="./js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="./js/startmin.js"></script>

    </body>
</html>
