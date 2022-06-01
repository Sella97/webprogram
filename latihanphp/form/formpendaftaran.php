<html>
    <head>
        <title>FORM PENDAFTARAN</title>
    </head>
    <h1>FORM PENDAFTARAN</h1>
    <form action="datapendaftaran.php" method="POST">
        <br>Silahkan Melakukan Pendaftaran dengan mengisi Form di bawah ini dengan lengkap.
    <table border="0" width="500">
        <tr>
        <td>Nama Anak : </td>
        <td></td>
        <td><input type="text" name="name" size="22" placeholder="Masukan Nama Anda"></td>
    </tr>
    <tr>
        <td>Sex : </td>
        <td></td>
        <td><input type="radio" name="sex" value="Laki - Laki">Laki-Laki <input type="radio" name="gender" value="Perempuan">Perempuan</td>
    </tr> 
    <tr>
        <td>Tempat Lahir : </td>
        <td></td>
        <td><input type="text" name="place" size="22" placeholder="Masukan Tempat Lahir Anda"></td>
    </tr>
    <tr>
     <td>Tanggal Lahir</td>
     <td></td>
     <td>
        <select name="tanggallahir">jd 
            <?php
                for ($i=1; $i<=31 ; $i++) {
            ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
                }
            ?>
        </select>
    </td>
    <td></td>
     <td>
    <select name="bulan">
        <?php
            for ($i=1; $i<=12 ; $i++) {
        ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php
            }
        ?>
    </select>
</td>
<td>
    <select name="tahun">
    <?php
        for ($i=1990; $i<=2018 ; $i++) {
    ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php
        }
    ?>
    </select>
</td>
    </tr>
    </form>
</html>