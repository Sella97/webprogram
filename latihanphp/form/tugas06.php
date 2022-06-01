<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan Ke 6</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <br><h2>Form Registrasi</h2>
        <pre>
        <br>Isi Data Dibawah ini :</br>
        <table border="0"width="500">
      <tr>
      <td> Nama </td> 
      <td></td>
      <td><input type="text" name="nama" size="25" placeholder="Masukan Nama Anda"> </td>
      </tr>
      <tr>
      <td> Alamat</td>
      <td></td>
      <td> <textarea name="alamat" cols="45" rows="5" placeholder="Masukan Alamat Anda"></textarea></td>
      </tr>
      <tr>
        <td> Tempat Lahir </td> 
        <td></td>
       <td> <input type="text" name="temhir" size="25" placeholder="Masukan Tempat Lahir Anda"></td>
      </tr>
      <tr>
      <td> Tanggal Lahir </td> 
      <td></td>
     <td> <input type="text" name="tahir" size="25" placeholder="Masukan Tanggal Lahir Anda"></td>
        </tr>
        <tr>
        <td> Jenis Kelamin </td>
        <td></td>
        <td><input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki<input type="radio" name="jeniskel" value="Perempuan">Perempuan</td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td></td>
            <td><select name="pendi">
                <option value="-Pilih-">Pilih
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
            </td>
        </tr>
        <tr><td><input type="submit" value="Submit">   <input type="reset" value="Cancel"></td></tr>    
    </form>
</body>
</html>