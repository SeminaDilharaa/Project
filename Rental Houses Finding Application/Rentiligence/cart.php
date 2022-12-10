<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">



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
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="customer/my_account.php">My Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Go To Save</a>
                   </li>
                   <li>
                       <a href="checkout.php">Login</a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/rentiligence-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                   <img src="images/rentiligence-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li >
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="house.php">Houses</a>
                       </li>
                       <li>
                           <a href="customer/my_account.php">My Account</a>
                       </li>
                       <li class="active">
                           <a href="cart.php">Saved Houses</a>
                       </li>
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>See Saved Houses</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->


   <div id="content"><!-- #content Begin -->
   	<div class="container"><!-- container Begin -->
   		<div class="col-md-12"><!-- col-md-12 Begin -->
   			<ul class="breadcrumb"><!-- breadcrumb Begin -->
   				<li>
   					<a href="index.php">HOME</a>
   				</li>
   				<li>
   					SAVED HOUSES
   				</li>
   			</ul><!-- breadcrumb Finish -->
   		</div><!-- col-md-12 Finish -->


      <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
        <div class="box"><!-- box Begin -->


          <form action="cart.php" method="post" enctype="multipart/form-data"><!-- Form Begin -->
            <h1>Saved Houses</h1>
            <p class="text-muted">You currently have 3house in your Saved Houses</p>


            <div class="table-responsive"><!-- table-responsive Begin -->
              <table class="table"><!-- table Begin -->
                <thead><!-- thead Begin -->
                  <tr><!-- tr Begin -->
                    <th colspan="2">House</th>
                    <th>House ID</th>
                    <th>Owner Name</th>
                    <th>Contact No</th>
                    <th colspan="1">Delete</th>
                    <th colspan="2">Sub totl</th>
                  </tr><!-- tr Finish -->
                </thead><!-- thead Finish -->


                <tbody><!-- tbody Begin -->
                  <tr><!-- tr Begin -->
                    <td>
                      <img class="img-responsive" src="admin_area/product_images/images 4.jpg" alt="images 4.jpg">
                    </td>


                    <td>
                      <a href="#">Rentaligince</a>
                    </td>
                       
                    <td>
                       2
                    </td>

                    <td>
                      Rs:30000
                    </td>

                    <td>
                      AC House
                    </td>

                    <td>
                      <input type="checkbox" name="remove[]">
                    </td>

                    <td>
                      Rs:50000
                    </td>


                  </tr><!-- tr Finish -->
                </tbody><!-- tbody Finish -->


                <tbody><!-- tbody Begin -->
                  <tr><!-- tr Begin -->
                    <td>
                      <img class="img-responsive" src="admin_area/product_images/images 4.jpg" alt="images 4.jpg">
                    </td>


                    <td>
                      <a href="#">Rentaligince</a>
                    </td>
                       
                    <td>
                       2
                    </td>

                    <td>
                      Rs:30000
                    </td>

                    <td>
                      AC House
                    </td>

                    <td>
                      <input type="checkbox" name="remove[]">
                    </td>

                    <td>
                      Rs:50000
                    </td>


                  </tr><!-- tr Finish -->
                </tbody><!-- tbody Finish -->


                <tbody><!-- tbody Begin -->
                  <tr><!-- tr Begin -->
                    <td>
                      <img class="img-responsive" src="admin_area/product_images/images 4.jpg" alt="images 4.jpg">
                    </td>


                    <td>
                      <a href="#">Rentaligince</a>
                    </td>
                       
                    <td>
                       2
                    </td>

                    <td>
                      Rs:30000
                    </td>

                    <td>
                      AC House
                    </td>

                    <td>
                      <input type="checkbox" name="remove[]">
                    </td>

                    <td>
                      Rs:50000
                    </td>


                  </tr><!-- tr Finish -->
                </tbody><!-- tbody Finish -->



                <tfoot><!-- tfoot Begin -->
                  <tr><!-- tr Begin -->
                    <th colspan="5">Total</th>
                    <th colspan="2">Rs:40000</th>
                  </tr><!-- tr Finish -->
                </tfoot><!-- tfoot Finish -->



              </table><!-- table Finish -->
            </div><!-- table-responsive Finish -->



            <div class="box-footer"><!-- box-footer Begin -->
              <div class="pull-left"><!-- pull-left Begin -->
                <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                  <i class="fa fa-chevron-left"></i> Continue Houses
                </a><!-- btn btn-default Finish -->
              </div><!-- pull-left Finish -->


              <div class="pull-right"><!-- pull-right Begin -->
                <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->
                  <i class="fa fa-refresh"></i>Update Save
                </button><!-- btn btn-default Finish -->

                <a href="checkout.php" class="btn btn-primary">
                  Proceed Checkout <i class="fa fa-chevron-right"></i>
                </a>

              </div><!-- pull-right Finish -->


            </div><!-- box-footer Finish -->



          </form><!-- Form Finish -->


        </div><!-- box Finish -->


               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
         <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
           <div class="box same-height headline"><!-- box same-height headline Begin -->
             <h3 class="text-center">House You Maybe Like</h3>
           </div><!-- box same-height headline Finish -->
         </div><!-- col-md-3 col-sm-6 Finish -->


          <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
            <div class="product same-height"><!-- product same-height Begin -->
              <a href="details.php">
                <img class="img-responsive" src="admin_area/product_images/images 1.jpg" alt="images 1">
              </a>

              <div class="text"><!-- text Begin -->
                <h3><a href="details.php">Rentaligence</a></h3>
                <p class="price">Rs.25000</p>
              </div><!-- text Finish -->

            </div><!-- product same-height Finish -->
          </div><!-- col-md-3 col-sm-6 center-responsive Finish -->


          <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
            <div class="product same-height"><!-- product same-height Begin -->
              <a href="details.php">
                <img class="img-responsive" src="admin_area/product_images/images 2.jpg" alt="images 2">
              </a>

              <div class="text"><!-- text Begin -->
                <h3><a href="details.php">Rentaligence</a></h3>
                <p class="price">Rs.25000</p>
              </div><!-- text Finish -->

            </div><!-- product same-height Finish -->
          </div><!-- col-md-3 col-sm-6 center-responsive Finish -->


          <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
            <div class="product same-height"><!-- product same-height Begin -->
              <a href="details.php">
                <img class="img-responsive" src="admin_area/product_images/images 3.jpg" alt="images 3">
              </a>

              <div class="text"><!-- text Begin -->
                <h3><a href="details.php">Rentaligence</a></h3>
                <p class="price">Rs.25000</p>
              </div><!-- text Finish -->

            </div><!-- product same-height Finish -->
          </div><!-- col-md-3 col-sm-6 center-responsive Finish -->


       </div><!-- #row same-heigh-row Finish -->


      </div><!-- col-md-9 Finish -->

      <div class="col-md-3"><!-- col-md-3 Begin -->
        <div id="order-summary" class="box"><!-- box Begin -->
          <div class="box-header"><!-- box-header Begin -->
            <h3>Saved Summary</h3>
          </div><!-- box-header Finish -->

          <p class="text-muted"><!-- text-muted Begin -->
            Shipping and additional cost
          </p><!-- text-muted Finish -->


          <div class="table-responsive"><!-- table-responsive Begin -->
            <table class="table"><!-- table Begin -->
              <tbody><!-- tbody Begin -->
                <tr><!-- tr Begin -->
                  <td>Order Sub-Total</td>
                  <th>Rs:16000</th>
                </tr><!-- tr Finish -->

                <tr><!-- tr Begin -->
                  <td>Shippi</td>
                  <td>Order </td>
                </tr><!-- tr Finish -->

                   <tr><!-- tr Begin -->
                  <td>Shpi</td>
                  <th>Oer </th>
                </tr><!-- tr Finish -->

                   <tr class="total"><!-- tr Begin -->
                  <td>hylai</td>
                  <th>Ordnjser </th>
                </tr><!-- tr Finish -->

              </tbody><!-- tbody Finish -->
            </table><!-- table Finish -->
          </div><!-- table-responsive Finish -->


        </div><!-- box Finish -->
      </div><!-- col-md-3 Finish -->

    </div><!-- container Finish -->
   </div><!-- #content Finish -->

     <?php 
      include("includes/footer.php");
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>