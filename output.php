<center><b>
        <h2>Data Pemantauan Covid19 wilayah <?php echo $wilayah; ?></h2>
    </b>
</center>
<center>
    <h3>Per <?php echo date("d M Y H:i:s"); ?></h3>
    <h4>Operator : <?php echo $operator . "/" . $nim; ?></h4>
</center>

<center>
    <table border="1">
        <tr>
            <th>Positif</th>
            <th>Dirawat</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
        </tr>
        <tr>
            <td><?php echo $positif; ?></td>
            <td><?php echo $dirawat; ?></td>
            <td><?php echo $sembuh; ?></td>
            <td><?php echo $meninggal; ?></td>
        </tr>
    </table>
</center>