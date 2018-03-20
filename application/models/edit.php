<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$komentar=$_POST['komentar'];
	$subject=$_POST['subject'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',subject='$subject',komentar='$komentar' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$subject = $user_data['subject'];
	$komentar = $user_data['komentar'];
}
?>
<html>
<head>	
	<title>Edit Komentar</title>
</head>
 
<body>
	
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>subject</td>
				<td><input type="text" name="subject" value=<?php echo $subject;?>></td>
			</tr>
			<tr> 
				<td>komentar</td>
				<td><input type="text" name="komentar" value=<?php echo $komentar;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>