<?php
// including the database connection file
include_once("config.php");

//getting id from url
@$id = $_GET['id'];
@$author = $_GET['author'];
echo $author;

//selecting data associated with this particular id
$a="SELECT * FROM `bookcp` WHERE author='$author' ";
$result = mysqli_query($mysqli,$a);
//$row = mysqli_fetch_array($result);
//echo $row['bname'];

while($row = mysqli_fetch_array($result))
{
	echo '<p><img style="width=100px;height=100px;" src="aditimg/'.$row['img'].'"></p>
                            <p> Name:  '.$row['bname'].'</p>
                            <p> Price:  '.$row['price'].'</p>
                            <p> Available:  '.$row['quant'].'</p>
                            <p><form name="f1" method="post"  action="viewcart.php"><input type="hidden" name="id"  value="'.$row['id'].'"><input type="submit" name="addtocart" class="btn btn-success" value="add to cart"></form></p></div></div>';

}
?>