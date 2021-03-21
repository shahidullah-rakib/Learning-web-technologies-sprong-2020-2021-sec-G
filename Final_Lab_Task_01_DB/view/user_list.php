<?php
	$title = "User List Page";
	include('header.php');
	require_once('../model/userModel.php');
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
	
		$row=getAllUser();
		
		foreach($row as $var){
			
			echo "
					<tr>
						<td>{$var['ID']}</td>
						<td>{$var['name']}</td>
						<td>{$var['email']}</td>
						<td><a href='edit.php?id={$var['ID']}'>edit</a> |
							<a href='../controller/delete.php?id={$var['ID']}'>delete</a>
						</td>
						
				";
				//?id={$row['ID']}
			
		}

			echo "</table>";


?>

	
<?php
	include('footer.php');
?>
