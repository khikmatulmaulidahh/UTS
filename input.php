<?php
//Ambil Data
@$wilayah = $_GET['wilayah'];
@$positif = $_GET['positif'];
@$dirawat = $_GET['dirawat'];
@$sembuh = $_GET['sembuh'];
@$meninggal = $_GET['meninggal'];
?>

<form action="index.php" method="get">
    Jumlah Positif: <input type="number" name="positif"><br><br>
    Jumlah Dirawat: <input type="number" name="dirawat"><br><br>
    Jumlah Sembuh: <input type="number" name="sembuh"><br><br>
    Jumlah Meninggal: <input type="number" name="meninggal"><br><br>
    <input type="hidden" name="wilayah" value='<?php echo $wilayah; ?>'>
    <input type="submit">
</form>