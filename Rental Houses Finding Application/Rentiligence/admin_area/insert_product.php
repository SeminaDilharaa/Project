<?php
	include("includes/db.php");
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert Product</title>

    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">



    <style>
      body{
    font-size: 14px;
    line-height: 1.42857143;
    color: #333333;
    background: #f0f0f0;
    overflow-x: hidden;
    padding-bottom: 10px;
}

/* Top Styles */

#top{
    background: #555555;
    padding: 10px 0;
}
#top .offer{
    color: #ffffff;
}
#top .offer .btn{
    text-transform: uppercase;
}
@media(max-width: 991px){
    #top .offer{
        margin-bottom: 10px;
    }
}
@media(max-width: 991px){
    #top{
        font-size: 12px;
        text-align: center;
    }
}
#top a{
    color: #ffffff;
}
#top ul.menu{
    padding-top: 5px;
    margin: 0px;
    text-align: right;
    font-size: 12px;
    list-style: none;
}
@media(max-width: 991px){
    #top ul.menu{
        text-align: center;
    }
}
#top ul.menu > li{
    display: inline-block;
}
#top ul.menu > li a{
    color: #eeeeee;
}
#top ul.menu > li + li:before{
    content: "|\00a0";
    color: #f7f7f7;
    padding: 0 5px;
}

/* Header Styles */

.navbar{
    background: #ffffff;
}
.navbar-collapse .right{
    float: right;
}
.navbar-brand{
    float: left;
    padding: 10px 15px;
    font-size: 18px;
    line-height: 20px;
    height: 70px;
}
.navbar-brand:hover,
.navbar-brand:focus{
    text-decoration: none;
}
.navbar ul.nav > li > a{
    text-transform: uppercase;
    font-weight: bold;
    font-size: 14px;
}
.navbar ul.nav > li > a:hover{
    background: #e7e7e7;
}
.padding-nav{
    padding-top: 10px;
}
.btn-primary{
    color: rgb(255, 255, 255);
    background: rgb(79, 191, 168);
    border-color: rgb(65, 179, 156);
}
#search .navbar-form{
    float: right;
}
#search{
    clear: both;
    border-top: solid 1px #9adacd;
    text-align: right;
}
#search .navbar-form .input-group{
    display: table;
}
#search .navbar-form .input-group .form-control{
    width: 100%;
}
#slider{
    margin-bottom: 40px;
}

/* advantages Styles */

#advantages{
    text-align: center;
}
.box{
    background: #ffffff;
    margin: 0 0 30px;
    border: solid 1px #e6e6e6;
    box-sizing: border-box;
    padding: 20px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, .3);
}
#advantages .box .icon{
    position: absolute;
    font-size:120px;
    width: 100%;
    text-align: center;
    top: -20px;
    left: 0px;
    height:100%;
    float: left;
    color: #dadada;
    box-sizing: border-box;
    z-index: 1; 
}
#advantages .box h3{
    position: relative;
    margin: 0 0 20px;
    font-weight: 300;
    text-transform: uppercase;
    z-index: 2;
}
#advantages .box h3 a{
    color: #4fbfa8;
}
#advantages .box h3 a:hover{
    text-decoration: none;
}
#advantages .box p{
    position: relative;
    z-index: 2;
    color: #555555;
}

/* Latest Products Styles */

#hot h2{
  font-size: 36px;
  font-weight: 400;
  color: #4fbfa8;
  text-align: center;
  text-transform: uppercase;
}
#content{
  padding-left: 25px;
}
.single{
  width: 290px;
}
@media(max-width: 768px){
  .single{
    width: 60%;
    margin: 0 auto;
  }
}
#content .product{
  background: #ffffff;
  border: solid 1px #e6e6e6;
  margin-bottom: 30px;
  box-sizing: border-box;
}
#content .product .text{
  padding: 10px 10px 0px;
}
#content .product .text p.price{
  font-size: 18px;
  text-align: center;
  font-weight: 400;
}
#content .product .text .button{
  text-align: center;
  clear: both;
}
#content .product .text .button .btn{
  margin-bottom: 10px;
}
#content .product .text h3{
  text-align: center;
  font-size: 20px;
}
#content .product .text h3 a{
  color: rgb(85, 85, 85);
}


/*Details.php Styles*/

#content #productMain{
  margin-bottom: 30px;
}
#content #productMain .price{
  font-size: 30px;
  font-weight: 300;
  text-align: center;
  margin-top: 30px;
}
#content #mainImage{
  box-shadow: 0px 1px 5px  rgba(0, 0, 0, .7);
}
#content #thumbs a{
  display: block;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, .5);
  border: 2px solid transparent;
}
#content .headline{
  height: 350px;
}


/* cart.php Styles*/

#content #cart .table tbody tr td img{
  width: 50px;
}
#content #cart .table tbody tr td input{
  width: 40px;
  text-align: right;
}
#content #cart .table tbody tr td{
  vertical-align: middle;
}
#content #cart .table tfoot{
  font-size: 18px;
}
.box .box-footer{
  background-color: #f7f7f7;
  margin: 30px -20px 20px;
  padding: 20px;
  border-top: 1px solid #eeeeee; 
}
.box .box-footer:before,
.box .box-footer:after{
  content: "";
  display: table;
}
.box .box-footer:after{
  clear: both;
}
.box .box-header{
  background-color: #f7f7f7;
  margin: -20px -20px 20px;
  padding: 20px;
  border-top: 1px solid #eeeeee; 
}
#content #order-summary table{
  margin-top: 20px;
}
#content #order-summary table td{
  color: #999999;
}
#content #order-summary table tr.total td,
#content #order-summary table tr.total th{
  font-size: 18px;
  color: #555555;
  font-weight: 700;
}


/* for firefox only*/

@-moz-document url-prefix(){
  .form-height-custom{
    height:auto;
  }
}




/* Footer Styles*/

#footer{
  background: #e0e0e0;
  padding: 20px 0;
}
#footer a{
  color: #999999;
  padding: 0;
  text-decoration: none;
}
#footer a:hover{
  color: #666666;
}
#footer ul{
  list-style: none;
  padding-left: 0px;
}
#footer .social{
  text-align: left;
}
#footer .social a{
  margin: 0px 10px 0px 0px;
  display: inline-block;
  color: #ffffff;
  width: 30px;
  height: 30px;
  border-radius: 15px;
  line-height: 30px;
  font-size: 15px;
  text-align: center;
  vertical-align: bottom;
  background: #555555;
  text-decoration: none;
}

#footer .social a:hover{
  color: #dedede;
  background: #777777;
}

/* Copyright Styles*/

#copyright{
  background: #333333;
  color: #cccccc;
  padding: 20px 0px;
  font-size: 12px;
}

#copyright p{
  margin: 0px;
}

/* Breadcrumb Styles */

.breadcrumb{
  padding: 8px 15px;
  margin-bottom: 20px;
  background: #ffffff;
  border-radius: 5px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, .5);
}

.breadcrumb> li + li:before{
  content: ">\00a0";
  color: #cccccc;
}
@media(max-width:991px){
  .breadcrumb{
    padding: 8px 0px;
    text-align: center;
  }
}

/* Products Categories & Categories Styles */

#content .panel.sidebar-menu{
  box-sizing: border-box;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, .5);
}
#content .panel.sidebar-menu ul.nav.category-menu{
  margin-bottom: 20px;
}
#content .panel.sidebar-menu ul.nav.category-menu li a{
  text-transform: uppercase;
  font-weight: 600;
}

#content .panel.sidebar-menu h3{
  padding: 5px 0px;
  margin: 0px;
}





    </style>





</head>
<body>
	<div class="row"><!-- row Begin -->
		<div class="col-lg-12"><!-- col-lg-12 Begin -->
			<ol class="breadcrumb"><!-- breadcrumb Begin -->
				<li class="active"><!-- active Begin -->
					<i class="fa fa-dashboard"></i> Dashboard / Insert Products
				</li><!-- active Finish -->
			</ol><!-- breadcrumb Finish -->
		</div><!-- col-lg-12 Finish -->
	</div><!-- row Finish -->



	<div class="row"><!-- row Begin -->
		<div class="col-lg-12"><!-- col-lg-12 Begin -->
			<div class="panel panel-default"><!-- panel panel-default Begin -->
				<div class="panel-heading"><!-- panel-heading Begin -->
					<h3 class="panel-title"><!-- panel-title Begin -->
						<i class="fa fa-money fa-fw"></i> Insert House
					</h3><!-- panel-title Finish -->
				</div><!-- panel-heading Finish -->


				<div class="panel-body"><!-- panel-body Begin -->
					<form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
						<div class="form-group"><!-- form-group Begin -->
							<label class="col-md-3 control-lable"> House Title </label>
							<div class="col-md-6"><!-- col-md-6 Begin -->
								<input name="house_title" type="text" class="form-control" required>
							</div><!-- col-md-6 Finish -->
						</div><!-- form-group Finish -->

					<div class="form-group"><!-- form-group Begin -->
						<label class="col-md-3 control-lable"> House Distric </label>
							<div class="col-md-6"><!-- col-md-6 Begin -->
								<select name="distric_name" class="form-control"><!-- col-md-6 Begin -->
									<option>Select a Distric</option>


									<?php
										$get_h_dist ="select * from house_categories";
										$run_h_dist =mysqli_query($con,$get_h_dist);

										while ($row_h_dist=mysqli_fetch_array($run_h_dist)){
											$h_distric_id = $row_h_dist['h_distric_id'];

											$distric_name = $row_h_dist['distric_name'];



											echo "<option value='$h_distric_id'> $distric_name </option>
											";

											
										}
									?>


								</select><!-- col-md-6 Finish -->
							</div><!-- col-md-6 Finish -->
						</div><!-- form-group Finish -->


						<div class="form-group"><!-- form-group Begin -->
						<label class="col-md-3 control-lable"> Town </label>
							<div class="col-md-6"><!-- col-md-6 Begin -->
								<select name="town_name" class="form-control"><!-- col-md-6 Begin -->
									<option>Select a town</option>


									 <?php
										$get_town ="select * from categories";
										$run_town =mysqli_query($con,$get_town);

										while ($row_town=mysqli_fetch_array($run_town)){
											$distric_id = $row_town['distric_id'];

											$cat_title = $row_town['cat_title'];



											echo "<option value='$distric_id'> $cat_title </option>
											";

											
										}
									?> 




								</select><!-- col-md-6 Finish -->
							</div><!-- col-md-6 Finish -->
						</div><!-- form-group Finish -->


						<div class="form-group"><!-- form-group Begin -->
							<label class="col-md-3 control-lable"> House Image1 </label>
							<div class="col-md-6"><!-- col-md-6 Begin -->
								
								<input name="house_img1" type="file" class="form-control" required>
							</div><!-- col-md-6 Finish -->
						</div><!-- form-group Finish -->



							<div class="form-group"><!-- form-group Begin -->
							<label class="col-md-3 control-lable"> House Image2 </label>
							<div class="col-md-6"><!-- col-md-6 Begin -->
								
								<input name="house_img2" type="file" class="form-control" required>
							</div><!-- col-md-6 Finish -->
						</div><!-- form-group Finish -->


							<div class="form-group"><!-- form-group Begin -->
							<label class="col-md-3 control-lable"> House Image3 </label>
							<div class="col-md-6"><!-- col-md-6 Begin -->
								
								<input name="house_img3" type="file" class="form-control" required>
							</div><!-- col-md-6 Finish -->
						</div><!-- form-group Finish -->


							<div class="form-group"><!-- form-group Begin -->
							<label class="col-md-3 control-lable"> Monthly Rental Price </label>
							<div class="col-md-6"><!-- col-md-6 Begin -->
								
								<input name="rent_price" type="text" class="form-control" required>
							</div><!-- col-md-6 Finish -->
						</div><!-- form-group Finish -->



							<div class="form-group"><!-- form-group Begin -->
							<label class="col-md-3 control-lable"> House Keyword </label>
							<div class="col-md-6"><!-- col-md-6 Begin -->
								
								<input name="house_keywords" type="text" class="form-control" required>
							</div><!-- col-md-6 Finish -->
						</div><!-- form-group Finish -->


						<div class="form-group"><!-- form-group Begin -->
							<label class="col-md-3 control-lable"> House Discription </label>
							<div class="col-md-6"><!-- col-md-6 Begin -->
								
								<textarea name="house_desc" cols="19" rows="6" class="form-control"></textarea>
							</div><!-- col-md-6 Finish -->
						</div><!-- form-group Finish -->


						<div class="form-group"><!-- form-group Begin -->
							<label class="col-md-3 control-lable"></label>
							<div class="col-md-6"><!-- col-md-6 Begin -->
								
								<input type="submit" name="submit" value="Insert house" class="btn btn-primary form-control">


							</div><!-- col-md-6 Finish -->
						</div><!-- form-group Finish -->


					</form><!-- form-horizontal Finish -->
				</div><!-- panel-body Finish -->



			</div><!-- panel panel-default Finish -->
		</div><!-- col-lg-12 Finish -->
	</div><!-- row Finish -->



	<script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
   
</body>
</html>


<?php 

if(isset($_POST['submit'])){

    		$house_title = $_POST['house_title'];
    		$distric_name = $_POST['distric_name'];
    		$town_name = $_POST['town_name'];
    		$rent_price = $_POST['rent_price'];
    		$house_keywords = $_POST['house_keywords'];
    		$house_desc = $_POST['house_desc'];

    		$house_img1 = $_FILES['house_img1']['name'];
    		$house_img2 = $_FILES['house_img2']['name'];
    		$house_img3 = $_FILES['house_img3']['name'];

    		$temp_name1 = $_FILES['house_img1']['tmp_name'];
    		$temp_name2 = $_FILES['house_img2']['tmp_name'];
    		$temp_name3 = $_FILES['house_img3']['tmp_name'];

    		move_uploaded_file($temp_name1,"product_images/$house_img1");
    		move_uploaded_file($temp_name2,"product_images/$house_img2");
    		move_uploaded_file($temp_name3,"product_images/$house_img3");

    		$insert_house ="insert into houses
    		(h_distric_id,town_id,date,house_title,house_img1,house_img2,house_img3,rent_price,house_keywords,house_desc) values
    		('$distric_name','$town_name',NOW(),'$house_title','house_img1','house_img2','house_img3','$rent_price','$house_keywords','$house_desc')";

    		$run_house = mysqli_query($con,$insert_house);

    		if($run_house){
    			echo "<script>alert('House has been inserted sucessfully')</script>";
    			echo "<script>window.open('insert_product.php','_self')</script>";

    		}
    	}
    ?>



