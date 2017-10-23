<?php 
require('UserInfo.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>UserInfo Demo</title>
	<style>
table {
	margin-top: 20px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
h2{font-family: sans-serif,'Helvetica';}
</style>

</head>
<body>
<center><h2>UserInfo demo</h2></center>


	<table>
		<tr>
			<th>Ip</th>
			<th>Device</th>
			<th>Os</th>
			<th>Browser</th>
		</tr>
		<tr>
			<td><?= UserInfo::get_ip();?></td>
			<td><?= UserInfo::get_device();?></td>
			<td><?= UserInfo::get_os();?></td>
			<td><?= UserInfo::get_browser();?></td>
		</tr>
	</table>

</body>
</html>