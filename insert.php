<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php


		$conn = mysqli_connect("localhost", "root", "", "hotels");

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		$hotel_id = $_REQUEST['hotel_id'];
		$hotel_name = $_REQUEST['hotel_name'];
		$image = $_REQUEST['image'];
		$feature1 = $_REQUEST['feature1'];
		$feature2 = $_REQUEST['feature2'];
		$feature3 = $_REQUEST['feature3'];
		$book_now_link = $_REQUEST['book_now_link'];
		$view_details_link = $_REQUEST['view_details_link'];

		$sql = "INSERT INTO featured_hotels VALUES ('$hotel_id',
			'$hotel_name','$image','$feature1','$feature2','$feature3', '$book_now_link', '$view_details_link' )";

		if (mysqli_query($conn, $sql)) {
			echo "<h3>data stored in a database successfully.</h3>";
		} else {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>