<?php 
	// Start a session 
	session_start();

	// Connect to MySQL Database 
	$mysqli  = mysqli_connect("localhost", "USERNAME", "PASSWORD", "surl");

	// Query the latest five entries 
	$newest = $mysqli->query("SELECT * FROM links ORDER BY created DESC LIMIT 5");

	// Query the latest five entries 
	$used = $mysqli->query("SELECT * FROM links ORDER BY clicks DESC LIMIT 5");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Short URLs</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class="container">
			<?php  
				// Fetch alert messages 
				if(isset($_SESSION['alert'])){
					echo "<p>{$_SESSION['alert']}</p>";
					unset($_SESSION['alert']);
				}
			?>

			<div class="jumbotron bg-primary text-light">
				<h1 class="display-4">Short URLs</h1>
				<p class="lead">A simple URL shortening service created using PHP.</p>
			</div>

			<div class="card bg-light">
				<div class="card-body">
					<form action="assets/shorten.php" method="post">
				    	<div class="input-group mb-3">
							<input type="url" class="form-control" name="url" placeholder="Enter a URL" autocomplete="off">
							<input type="submit" class="btn btn-success" value="Submit">
						</div>
					</form>	
				</div>
			</div><br>

  			<div class="row" style="text-align: center;">
  				<div class="col">
  					<div class="card">
		  				<div class="card-body">
		  					<a href="directory.php">Links Directory</a>
		  				</div>
		  			</div>
		  		</div>
  				<div class="col">
  					<div class="card">
		  				<div class="card-body">
  							<a href="https://github.com/seb646/url-shortener">GitHub Source</a>
  						</div>
  					</div>
  				</div>
  			</div><br>

			<div class="card">
				<h3 class="card-header">Most Recent</h3>
  				<div class="card-body">
					<table class="table">
						<thead>
						    <tr>
						      <th scope="col">Short Link</th>
						      <th scope="col">Destination</th>
						      <th scope="col">Date Added</th>
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
					     			echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div><br>
			
			<div class="card">
				<h3 class="card-header">Most Used</h3>
  				<div class="card-body">
					<table class="table">
						<thead>
						    <tr>
						      <th scope="col">Clicks</th>
						      <th scope="col">Short Link</th>
						      <th scope="col">Destination</th>
						    </tr>
					    </thead>
						<tbody>
							<?php 
								// Display latest five dataabse entries
								while ($entries = mysqli_fetch_assoc($used)) {
									echo "<tr>";
					     			echo '<td>'.$entries['clicks']."</td>";
					     			echo '<td><a href="//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/'.$entries['code'].'" target="_blank">'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/'.$entries['code'].'<a></td>';
					     			echo '<td>'.$entries['url']."</td>";
					     			echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>

			<br><br>

		</div>
	</body>

	<?php $mysqli->close();?>

</html>