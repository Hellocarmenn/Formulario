<?php
$con = mysqli_connect("localhost","root","","miData");
$sql=" INSERT INTO datos1(hotel,service, passenger,fad,fat,fdd,fdt)
VALUES ('".$_POST["hotel"]."','".$_POST["service"]."','".$_POST["passenger"]."','".$_POST["fad"]."','".$_POST["fat"]."','".$_POST["fdd"]."','".$_POST["fdt"]."')";

mysqli_query($con,$sql)or die(mysqli_error($con));
?>
<script language="javascript">window.location.href="formulario.php"</script>