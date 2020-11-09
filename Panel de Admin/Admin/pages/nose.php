<html>
<head>
<meta charset ="UTF-8">
</head>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" size="20" name="img" ><br>
<input type="submit" name="b1" value="aceptar">
</form>
<?php
$con=mysqli_connect("localhost","root","","ejemplo");
if(isset($_POST["b1"])){
$imagen= $_FILES['img'];
$ima=$imagen['tmp_name'];
$names=$imagen['name'];
$tipos=$imagen['type'];
$sql="INSERT INTO imagen (id,nombre,img) VALUES ('2','$names','$ima')";
$ejecuta=mysqli_query($con,$sql);

move_uploaded_file($imagen['tmp_name'],"imagenes/".$imagen['name']);
$sql="SELECT *FROM imagen";
$ejecuta=mysqli_query($con,$sql);
while($fila=$ejecuta->fetch_assoc()){
    header("Content-type:".$fila['tipo']);
    ?>
<img style="witdh:500px;" src="<?php echo $fila['img']; ?>"/>
<?php
}
}
?>
</body>
</html>
