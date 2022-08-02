<?php  
require_once '../controller/productInfo.php';

$product = fetchproduct_details($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Selling Price</th>
		<th>Buying Price</th>
		
	</tr>
	<tr>
		<td><a href="showproduct.php?id=<?php echo $product_detail['ID'] ?>"><?php echo $product['Name'] ?></a></td>
		<td><?php echo $product_details['name'] ?></td>
		<td><?php echo $product_details['sprice'] ?></td>
		<td><?php echo $product_details['bprice'] ?></td>
		
	</tr>

</table>


</body>
</html>