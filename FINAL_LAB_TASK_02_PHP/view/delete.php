<?php 
     session_start();
     require_once('../model/userModel.php');
     $id=$_GET['id'];
     $data=getProductbyId($id);
 
     $_SESSION['edit_id']=$id;
 

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="../controller/delete.php">
		<fieldset>
			<legend>Delete PRODUCT</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><?php echo$data['productName'] ?></td>
				</tr>
				<tr>
					<td>Buying price</td>
					<td><?php echo$data['buyingPrice'] ?></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td><?php echo$data['sellingPrice'] ?></td>
				</tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				<tr>
					<td>Displayable</td>
                    <td>: Yes</td>
				</tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Delete"> 
						
					</td>
                    <td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
