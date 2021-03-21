<?php
	require_once('../model/userModel.php');
	$title = "Edit Page";
	include('header.php');
	$id=$_GET['id'];
	$data=getUserbyId($id);

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
