<?php 
	// Connect to MySQL Database 
	$mysqli  = mysqli_connect("localhost", "USERNAME", "PASSWORD", "surl");

	// Query the latest five entries 
	$newest = $mysqli->query("SELECT * FROM links ORDER BY created DESC");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Links Directory</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class="container">
			<a href="index.php">← Back to Home</a><br><br>
			<div class="jumbotron bg-dark text-light">
				<h1 class="display-4">Links Directory</h1>
			</div>
			<table class="table">
				<thead>
				    <tr>
				      <th scope="col">Short Link</th>
				      <th scope="col">Destination</th>
				      <th scope="col">Date Added</th>
				      <th scope="col">Clicks</th>
				    </tr>
			    </thead>
				<tbody>
					<?php 
						// Display latest five dataabse entries
						while ($entries = mysqli_fetch_assoc($newest)) {
							echo "<tr>";
							echo '<td><a href="//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/'.$entries['code'].'" target="_blank">'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/'.$entries['code'].'<a></td>';
			     			echo '<td>'.$entries['url']."</td>";
			     			echo "<td>".$entries['created']." EST</td>";
			     			echo "<td>".$entries['clicks']."</td>";
			     			echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
	<?php $mysqli->close();?>
</html>