
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

	$email= $_POST['email'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'abc_com');
	$sql = "select * from users where email like '%{$email}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=2>
					<tr>
						<td>ID</td>
						<td>First Name</td>
						<td>User Type</td>
						<td>Email</td>
                        <td>Phone </td>
						
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['id']}</td>
							<td>{$row['firstname']}</td>
							<td>{$row['userType']}</td>
							<td>{$row['email']}</td>
                            <td>{$row['phone']}</td>
							
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>