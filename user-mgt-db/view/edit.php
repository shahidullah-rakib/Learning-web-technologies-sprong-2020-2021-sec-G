<?php
	$title = "Edit Page";
	include('header.php');
	require('../model/db_connect.php');
	$id=$_GET['id'];

	$sql="select name, email, password from user where ID='$id'";
	$users_obj=mysqli_query($con, $sql);
	$data=mysqli_fetch_assoc($users_obj);

	$_SESSION['edit_id']=$id;
?>

	<form method="post" action="../controller/update.php">
		<fieldset>
			<legend>EDIT User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="name" value="<?php echo$data['name'] ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass" value="<?php echo$data['password'] ?>"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo$data['email'] ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Update"> 
						<a href="user_list.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
	include('footer.php');
?>