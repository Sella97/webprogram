<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Registrasi</title>
</head>
<body>
 <tr>
     <h1>Data Registrasi</h1>
 </tr> 
 <table width="500" border="2">
<?php
error_reporting(0);
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$temhir=$_POST["temhir"];
$tahir=$_POST["tahir"];
$jeniskel=$_POST["jeniskel"];
$pendi=$_POST["pendi"];
?>
<td>Nama</td><td><?php echo $nama;?></td>
</tr>
<td>Alamat</td><td><?php echo $alamat;?></td>
</tr>
<td>Tempat Lahir</td><td><?php echo $temhir;?></td>
</tr>
<td>Tanggal Lahir</td><td><?php echo $tahir;?></td>
</tr>
<td>Jenis Kelamin</td><td><?php echo $jeniskel;?></td>
</tr>
<td>Pendidikan</td><td><?php echo $pendi;?></td>
 </table> 
</h1> 
<a href="tugas06.php">Back To Home</a> 
</body>
</html>