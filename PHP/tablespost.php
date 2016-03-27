<html>
<head>
	<title>Ashish Sareen 13BCE0019</title>
	<style type="text/css">

	body
	{
		background-color: lightgrey;
	}

	.cent
	{
		text-align : center;
		width: 500px;
		font-family: "Arial";
	}

	table{
		border-collapse: collapse;
	}


	</style>

</head>
<body>
	<div class="cent">
	<table style="width:90%;" border="1">
		<col align="right">
		<col align="left">
	<tr>
		<td>Name</td>
		<td><?php echo $_POST["name"]; ?></td>
	</tr>
	<tr>
		<td>Register Number</td>
		<td><?php echo $_POST["regno"]; ?></td>
	</tr>		
	<tr>
		<td>Gender</td>
		<td><?php echo $_POST["gender"]; ?></td>
	</tr>
	<tr>
		<td>E-Mail</td>
		<td><?php echo $_POST["email"]; ?></td>
	</tr>

	<tr>
		<td>Phone Number</td>
		<td><?php echo $_POST["phone"]; ?></td>
	</tr>

	<tr>
		<td>Branch</td>
		<td><?php echo $_POST["branch"]; ?></td>
	</tr>
	</table>

	</div>
</body>
</html>