<html>
    <head>
        <title>Perulangan For</title>
    </head>
    <body>
        Penggunaan pada from:
        <br>
        <?php
        echo"<form name=form 1 method=post>";
        echo"Tanggal";
        echo"<select name= tangal>";
        for($tanggal=1; $tanggal <=10;$tanggal++)
        {
            echo"<option value=".$tanggal.">".$tanggal."</option>";
        }
        echo"</select>";
        echo "</form>";
        ?>
    </body>
</html>