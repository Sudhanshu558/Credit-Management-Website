<!DOCTYPE html>
<html>
	<head>
		<style>
			
		table, td, th {
		border: 1px solid #ddd;
		text-align: left;
		}
		table {
		border-collapse: collapse;
		
		}
		th, td {
		padding: 15px;
		}
		</style>
		<title>Database
		</title>
	</head>
	<link rel="stylesheet" text='text/css' href="css/design.css">
	<body >
		<div class="main-div">
			<h1 align="center">Database</h1>
			<div class="center-div">
				<div class="table-responsive">
					<table align="center">
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody>
							<?php
									include 'connection.php';
									$selectquery = 'select * from user';
									$query = mysqli_query($con, $selectquery);
									while ($res = mysqli_fetch_array($query)) {
							?>
							<tr>
								<td><?php   echo $res['Id'];  ?></td>
								<td><?php   echo $res['Name'];  ?></td>
								<td><?php   echo $res['Amount'];  ?></td>
							</tr>
							<?php
													}
							?>
							
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
		<br>
		<br>
		<br>
		<div id="bottom">
			Click for starting page
			<a href=index.php>
				<br>
				<button class="button">Click here</button>
			</a>
			
		</div>
		<br>
		
		
		<div id="right">Click here to transfer
			<br>
			<a href=transfer.php>
				<button class="button">Click here</button>
			</a>
			
		</div>
	</body>
</html>