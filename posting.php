<!DOCTYPE html>
<html>
<head>
	<title>Posting</title>
</head>
<body style="font-family: century gothic">
	<h1>Mini Jurnalistik</h1>
	<hr>
	<form action=" " method="post">
		NIM<input type="number" name="nim">
		Secercah cerita<br>
		<textarea cols="80" rows="20" name="story">Masukan Cerita</textarea><br>
		Upload foto<br>
		<input type="file" name="photo"><br><br>
		<input type="submit" name="submit" value="Unggah">
	</form>
	<hr>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$story = $_POST['story'];
		$photo = $_POST['photo'];
		# code...

		$sql = "INSERT INTO upload value('$nim', '$story', '$photo')";
		include "connect.php";
		if (mysqli_query($conn, $sql)){
			echo "Upload berhasil";
		}else{
			echo "Gagal Upload";
		}
	}
?>