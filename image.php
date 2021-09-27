<?php
function showdata(){
	$conn=mysqli_connect("localhost","root","","data_excel");

	

    $categories = array();
$result= mysqli_query($conn,"SELECT ISBN,book_name,book_writer FROM `book` GROUP BY ISBN");
$count=1;
while($row = mysqli_fetch_assoc($result)){
    
   ?>
     <tr>
     	<td><?php echo $count;?></td>
     	<td><?php echo $row['ISBN']?></td>
     	<td><?php echo $row['book_name']?></td>
     	<td><?php echo $row['book_writer']?></td>
     	
     </tr>
   <?php
   $count=$count+1;
}
	

}

// any type of outout you like


		// $url="https://images.isbndb.com/covers/67/55/9788126556755.jpg";
		// $ch=curl_init($url);
		// curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		// $image=curl_exec($ch);
		// curl_close($ch);
		// header('Content-type:image/jpeg');
		// header('Content-Disposition:attachment;filename="9788.jpg"');
		// echo $image;


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><table border="2">
		<tbody>
			<tr>
				<td>S.No.</td>

				<td>ISBN</td>
				<td>Book Name</td>
				<td>Writer</td>
			</tr>
			<?php echo showdata();?>
		</tbody>
	</table>
</center>
	
</body>
</html>