<?php
	$title = "Product List Page";
	require_once('../model/userModel.php');
?>

	
	<h1>Display</h1>

	<?php 
		echo "<table border='1'>
		<tr>
			<td>Product Name</td>
			<td>Buying Price</td>
            <td>Selling Price</td>
			<td></td>
		</tr>";
	
		$row=getAllProduct();
		
		foreach($row as $var){
			
			echo "
					<tr>
						<td>{$var['productName']}</td>
						<td>{$var['Buying Price']}</td>
                        <td>{$var['Selling Price']}</td>
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