<?php 
/** url-shortener project by GitHub user @seb646. Source: https://github.com/seb646/url-shortener. */
	
// Start a session 
session_start();

// Import MySQL connection information
require_once 'assets/db_connect.php';

// Query the latest five entries 
$recent = db_connect()->query("SELECT * FROM links ORDER BY created DESC LIMIT 5");

// Query the latest five entries 
$clicked = db_connect()->query("SELECT * FROM links ORDER BY clicks DESC LIMIT 5");
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

  			<div class="row">
  				<div class="col">
  					<a class="btn btn-success btn-block p-3" role="button" href="directory.php">Links Directory</a>
		  		</div>
  				<div class="col">
  					<a class="btn btn-dark btn-block p-3" role="button" href="https://github.com/seb646/url-shortener">GitHub Source</a>
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
								// Display latest five database entries
								while ($entries = mysqli_fetch_assoc($recent)) {
									echo "<tr>";
									echo '<td><a href="//'.$_SERVER['HTTP_HOST'].'/'.$entries['code'].'" target="_blank">'.$_SERVER['HTTP_HOST'].'/'.$entries['code'].'<a></td>';
					     			echo '<td>'.$entries['url']."</td>";
					     			echo "<td>".$entries['created']." (UTC-5)</td>";
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
								// Display top five most clicked database entries
								while ($entries = mysqli_fetch_assoc($clicked)) {
									echo "<tr>";
					     			echo '<td>'.$entries['clicks']."</td>";
					     			echo '<td><a href="//'.$_SERVER['HTTP_HOST'].'/'.$entries['code'].'" target="_blank">'.$_SERVER['HTTP_HOST'].'/'.$entries['code'].'<a></td>';
					     			echo '<td>'.$entries['url']."</td>";
					     			echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div><br><br>
		</div>
	</body>
	<?php $mysqli->close();?>
</html>