<?php
	$title = "Create Page";
	include('header.php');
?>

<form method="post" action="../controller/createCheck.php">
	<fieldset>
		<legend>ADD PRODUCT</legend>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="productName" value=""></td>
			</tr>
			<tr>
				<td>Buying Price</td>
				<td><input type="text" name="buyingPrice" value=""></td>
			</tr>
			<tr>
				<td>Selling Price</td>
				<td><input type="text" name="sellingPrice" value=""></td>
			</tr>
			<tr>
				<td>_________</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="display" value="Display">Display</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="save" value="Save"> 
				</td>
			</tr>
		</table>
	</fieldset>
</form>

<?php
	include('footer.php');
?>
