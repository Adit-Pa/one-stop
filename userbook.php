<?php
$con=mysqli_connect("localhost","root","","reg");

@$cartid = $_GET['cartid'];
//echo $cartid;
//selecting data associated with this particular id
$query = "SELECT * FROM `$cartid` WHERE `checkout`=1";
  $result = mysqli_query($con,$query);
  

  while($row = mysqli_fetch_assoc($result))
  {
    $query1 = "SELECT * FROM bookcp where id=".$row['id'];
    $result1 = mysqli_query($con,$query1);
   while( $result2 = mysqli_fetch_assoc($result1))
   {
    
  echo '<table id="customers"><tr>
    
    <td><img style="width:80px; height:100px;" src="aditimg/'.$result2['img'].'"></td>
    <td>'.$result2['bname'].'</td>
    <td>'.$result2['price'].'</td>

   <td>'.$row['status']."</td>
  </tr>";
}
}
?>