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
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>
    
        <!-- <?php 
  //           if (isset($_POST['create_product']) && isset($_FILES['fileUpload'])) {
		// 	if ($_FILES['fileUpload']['error'] > 0)
		// 		echo "Upload lỗi rồi!";
		// 	else {
		// 		move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'upload/' . $_FILES['fileUpload']['name']);
		// 		echo "upload thành công <br/>";
		// 		echo 'Dường dẫn: upload/' . $_FILES['fileUpload']['name'] . '<br>';
		// 		echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
		// 		echo 'Dung lượng: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . 'KB';
		// 	}
		// }
        ?> -->

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Startmin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
                <!-- Menu -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <!-- Tìm kiếm -->
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <!-- Trang chủ -->
                            <li>
                                <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
                            </li>
                            <!-- Danh mục -->
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Danh mục<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="list_category.php">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="form_category.php">Tạo danh mục mới</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- NSX -->
                            <li>
                                <a href="#"><i class="fa fa-table fa-fw"></i> NSX<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="list_producer.php">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="form_producer.php">Tạo NSX mới</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Sản phẩm -->
                            <li>
                                <a href="#"><i class="fa fa-edit fa-fw"></i> Sản phẩm<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="list_product.php">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="form_product.php">Tạo sản phẩm mới</a>
                                    </li>
                                </ul>
                            </li>
 
                        </ul>
                    </div>
                </div>

            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Forms</h1>
                        </div>

                    </div>
 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tạo sản phẩm mới
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- Form tạo danh mục -->
                                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                            	<!-- CategoryId -->
                                            	<div class="form-group">
                                            		<label>Danh mục</label>
                                            		<select class="form-control" name="categoryId">
                                            			<?php  
                                            				$con = mysqli_connect("localhost", "root", "");
				                                            mysqli_select_db($con, "myshop");
				                                            $sql = "SELECT * FROM category";
				                                            $query = mysqli_query($con,$sql);
				                                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) : ?>
																<option value="<?php echo $row['categoryId']; ?>"><?php echo $row['categoryName']; ?></option>
				                                            <?php endwhile; ?>
                                            		</select>
                                            	</div>

                                            	<!-- producerId -->
                                            	<div class="form-group">
                                            		<label>Nhà sản xuất</label>
                                            		<select class="form-control" name="producerId">
                                            			<?php  
                                            				$con = mysqli_connect("localhost", "root", "");
				                                            mysqli_select_db($con, "myshop");
				                                            $sql = "SELECT * FROM producer";
				                                            $query = mysqli_query($con,$sql);
				                                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) : ?>
																<option value="<?php echo $row['producerId']; ?>"><?php echo $row['producerName']; ?></option>
				                                            <?php endwhile; ?>
                                            		</select>
                                            	</div>

												<!-- productName -->
												<div class="form-group">
													<label>Tên sản phẩm</label>
													<input class="form-control" type="text" name="productName">
												</div>

												<!-- productPrice -->
												<div class="form-group">
													<label>Giá sản phẩm</label>
													<input class="form-control" type="number" name="productPrice">
												</div>

												<!-- productSale -->
												<div class="form-group">
													<label>Khuyến mại</label>
													<input class="form-control" type="number" name="productSale">
												</div>

												<!-- unit -->
												<div class="form-group">
													<label>Đơn vị</label>
													<input class="form-control" type="text" name="unit">
												</div>

												<!-- shortDescripion -->
												<div class="form-group">
													<label>Mô tả ngắn</label>
													<input class="form-control" type="text" name="shortDescripion">
												</div>

												<!-- description -->
												<div class="form-group">
													<label>Mô tả chi tiết</label>
													<textarea class="form-control" name="description"></textarea>
												</div>

                                            	<!-- productImg -->
                                            	<div class="form-group">
                                                    <label>Ảnh sản phẩm</label>
                                                    <input class="form-control" type="file" name="fileUpload" value="">
                                                </div>
                                                <input class="btn btn-default" type="reset" name="xoa" value="Hủy">
                                            	<input class="btn btn-primary" type="submit" name="up" value="Lưu">
                                            </form>

                                            <!-- Lưu thông tin sản phẩm vào db và upload file vào file img -->
                                            <?php
                                            if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
                                            	$categoryId = $_POST['categoryId'];
                                            	$producerId = $_POST['producerId'];
                                            	$productName = $_POST['productName'];
                                            	$productPrice = $_POST['productPrice'];
                                            	$productSale = $_POST['productSale'];
                                            	$unit = $_POST['unit'];
                                            	$shortDescripion = $_POST['shortDescripion'];
                                            	$description = $_POST['description'];
                                            	$productImg = $_FILES['fileUpload']['name'];
                                            	if (($_FILES['fileUpload']['error'] > 0) || $categoryId == null)
                                            		echo "Upload file bị lỗi!";
                                            	else {
                                            		$conn = mysqli_connect("localhost", "root", "");
								                    mysqli_select_db($conn, "myshop");
								                    $sql = "INSERT INTO product(categoryId, producerId, productName, productPrice, productSale, unit, shortDescription, description, productImage) VALUES('$categoryId', '$producerId', '$productName', '$productPrice', '$productSale', '$unit', '$shortDescripion', '$description', '$productImg')";
								                    if (mysqli_query($conn, $sql)) {
							                    			move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../img/' . $_FILES['fileUpload']['name']);
								                            header('Location: http://localhost/PHP/MyShop/pages/list_product.php');
								                        } else {
								                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								                        }
								                    }
                                            	}
                                            
                                            ?>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                
            </div>

        </div>

        <script src="../js/jquery.min.js"></script>

        <script src="../js/bootstrap.min.js"></script>

        <script src="../js/metisMenu.min.js"></script>

        <script src="../js/startmin.js"></script>

    </body>
</html>
