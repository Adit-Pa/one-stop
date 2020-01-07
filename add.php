<?php
session_start();
      //echo $_SESSION['name'];
      if(!isset($_SESSION['name']))
      {
        header("Location:loginadmin.php");
      }
$databaseHost = 'localhost';
$databaseName = 'reg';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if(isset($_POST['add']))
{ 

 
  
  $name = $_POST['name'];
  $author = $_POST['author'];
  $quant = $_POST['quant']; 
  $price = $_POST['price'];
  $cat = $_POST['cat'];
  
  $allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "aditimg/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "aditimg/" . $_FILES["file"]["name"];
      $imgname=$_FILES["file"]["name"];
      echo $imgname;
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  
    //updating the table
    $abc="INSERT INTO `bookcp` (img,bname,author,quant,price,cat)VALUES('$imgname','$name','$author','$quant','$price','$cat')";
        $result = mysqli_query($mysqli,$abc);
        if(!$result)
         {
           echo "Fail";
         }
    header('Location:cpedit.php');
    
    //redirectig to the display page. In our case, it is index.php
    //header("Location: index.php");
  
}
?>

<html>
<head>  
  <title>Edit Data</title>
</head>

<body>
 
</html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>One Stop Shop For Engineer'S</title>

    
    <link rel="icon" href="img/core-img/favicon.ico">

    
    <link rel="stylesheet" href="style.css">
	<style>
    input[type=submit] {
    background-color: #4CAF50;
    color:white;
    border-radius: 4px;
    }
    
   
    
    ::placeholder{
    color :red
    }
    
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

.error {color: #FF0000;}
</style>


</head>

<body>
    
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        
        <!-- Top Header Area -->
        <div class="top-header">
			<h1 style="color:#228B22;"><center><u><b>One Stop Shop For Engineer'S</b></u></center></h1>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                   <li><a href="admin.php">Home</a></li>                                    
                                    <li><a href="#">Book</a>
                                        <div class="megamenu">
                                            <ul class="dropdown">                                                
                                                <li><a href="cpedit.php">Computer Eng.</a></li>                            
                                                <li><a href="#">Mechanical Eng.</a></li>
                                                <li><a href="#">Electronics Eng.</a></li>
                                                <li><a href="#">Chemical Eng.</a></li>
                                                <li><a href="#">Civil Eng.</a></li>
                                            </ul>                                                                                       
                                        </div>
                                    </li>
									
                                    <li><a href="user.php">User</a></li>                                  
                                    <li><a href="contact.html">Order</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="logout.php"></i> <span>Welcom Admin</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Admin</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
	
	<br><br><BR><BR><br>
  <br/><br/>
  
  <form name="form1" method="post" action="add.php" enctype="multipart/form-data">
    <table border="0">
      <tr> 
        
		<td><h5>Name</h5></td><td>
	<input type="text" name="name" required></td></tr>
	
      </tr>
      <tr> 
        <td><h5>Author</h5></td>
        <td><input type="text" name="author"></td>
      </tr>
      <tr> 
        <td><h5>Quant</h5></td>
        <td><input type="text" name="quant" ></td>
      </tr>
      <tr> 
        <td><h5>Price</h5></td>
        <td><input type="text" name="price" ></td>
      </tr>
      <tr> 
        <td><h5>Category</h5></td>
        <td><select name="cat">
          <option value="1">computer engineering</option>
          <option value="2">mechanical engineering</option>
          <option value="3">electronics engineering</option>
          <option value="4">chemical engineering</option>
          <option value="5">civil engineering</option>
        </select>
      </tr>
      <tr> 
        <td><h5>Filename</h5></td>
<td><input type="file" name="file" id="file"></td>
      </tr>
      </table>
        <div class="clearfix">
    
	  <h3><input type="submit" class="signupbtn" placeholder="register" name="add" ></h3>
	  
    </div>
    
  </form>
	
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <div class="widget-title">
                                <h6>Developers</h6>
                            </div>
                            </div>
                            <p>Adit Patel (16IT666)</p>
							<p>Yash Sohagia (16IT470)</p>
							<p>Smit Kakadiya (16IT474)</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Information Technology Department, BVM Engineering College, Vallabh Vidhyanagar, Anand</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Main: 96015-51022 <br>Office: 98982-42240 </p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>bookrentalsystem@bvmengineering.ac.in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    
    <script src="js/bootstrap/popper.min.js"></script>
    
    <script src="js/bootstrap/bootstrap.min.js"></script>
    
    <script src="js/plugins/plugins.js"></script>
    
    <script src="js/active.js"></script>
</body>

</html>