<head>
    <title>
        Book Report
    </title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    
</head>
<body>
	<table id="example" class="display nowrap" style="width:100%">
	<thead>
            <tr>
                <th>ID</th>
                <th>Img</th>
                <th>bname</th>
                <th>qua</th>
                <th>author</th>
                <th>price</th>
            </tr>
        </thead>
<?php

$databaseHost = 'localhost';
$databaseName = 'reg';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
   
  $result = mysqli_query($mysqli, "SELECT cartid FROM login");
  $books = array();

  while ($row = mysqli_fetch_array($result)) {

  	$a=$row['cartid'];
  	//echo $a;
  	echo "<br />";

  	$b="SELECT `id` FROM `$a` where YEAR(`due`) = 2019 ";
  	
	$result1 = mysqli_query($mysqli, $b);  
	while($row1 = mysqli_fetch_array($result1))
	{

		$d=$row1['id'];
		$c="SELECT * FROM `bookcp` where id='$d' ";

		$result2 = mysqli_query($mysqli, $c);  
		while($row2 = mysqli_fetch_array($result2))
		{
			echo '<tr><td>'.$row1['id'].'</td>
                            <td> '.$row['cartid'].' </td>';
                            
                            $in = $row2['bname'];
                            array_push($books, $in); 

                            echo '<td> '.$row2['bname'].'</td>
                            <td> '.$row2['price'].'</td>
                            <td>  '.$row2['quant'].'</td>
                            <td>'.$row2['quant'].'</td></tr>'; 
			
			
		}
							print_r($books);
		 					
  							


		
	}
	if (in_array($in,$books)) 
  							{ 
  								echo "found<br />";
  								echo $in."<br />"; 
  							} 
							else
  							{ 
  								echo "not found"; 
  							}
  							

  }

  //echo extract(year from '2019-11-11');
  ?>
</table>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
                   
         
    <script>
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );

 
    </script>
</body>
</html>