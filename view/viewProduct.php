
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	
</body>
</html>

<?php


	$pid= $_POST['pid'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'abc_com');
	$sql = "select * from product where pid like '%{$pid}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=2>
					<tr>
						<td>ID</td>
						<td>Product Name</td>
						<td>Brand</td>
						<td>Price</td>
                        <td>Descriotion </td>
						
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['pid']}</td>
							<td>{$row['pname']}</td>
							<td>{$row['brand']}</td>
							<td>{$row['price']}</td>
                            <td>{$row['descrip']}</td>
							
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>