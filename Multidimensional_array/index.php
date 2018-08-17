<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://Fabsoft.com">MrFab</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h4 class="text-primary">PHP Multidimensional Array sorting base on Price</h4>
		<hr style="border-top:1px dotted #000;"/>
		<form method="POST" action="">
			<div class="">
				<select name="sort" required="required" class="form-control">
					<option value="SORT_ASC">ASCENDING</option>
					<option value="SORT_DESC">DESCENDING</option>
				</select>
				<button name="toggle" class="btn btn-primary">Sort</button>
			<div>
		</form>
		<br />
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<?php include 'sort.php'?>
			</tbody>
		</table>
	</div>
</body>
</html>