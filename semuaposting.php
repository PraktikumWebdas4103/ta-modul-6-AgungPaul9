<?php
	include "connect.php";
	$query = mysqli_query($conn ,"SELECT * FROM registrasi ORDER BY nim DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Posting</title>
</head>
<body style="font-family: century gothic">
<h1>Menampilkan Postingan</h1>
<hr>
<center>
	<form action="" method="post">
    <table border="1" rules="all" style="width: 100%">
        <tr>
            <th>NIM</th>
            <th>Cerita</th>
            <th>Photo</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["post"];?></td>
            <td><?php echo $data["photo"];?></td>
            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
    <hr>
</form>
</center>
</body>
</html>