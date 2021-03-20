<?php
	$title = "User List Page";
	include('header.php');

	require('../model/db_connect.php');
	$sql="select * from user";
	$users_obj=mysqli_query($con, $sql);

	
?>

	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>
	
	<?php 
		echo "<table border='1'>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>email</td>
			<td>Action</td>
		</tr>";
		
while($row=mysqli_fetch_assoc($users_obj)){
	echo "
			<tr>
				<td>{$row['ID']}</td>
				<td>{$row['name']}</td>
				<td>{$row['email']}</td>
				<td><a href='edit.php?id={$row['ID']}'>edit</a> |
				    <a href='../controller/delete.php?id={$row['ID']}'>delete</a>
				</td>
				
		";
		//?id={$row['ID']}
}

	echo "</table>";

	$p=mysqli_fetch_assoc($users_obj);

	print_r($p);

?>






<?php
	include('footer.php');
?>