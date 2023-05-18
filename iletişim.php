<h3>İLETİŞİM FORMU VERİLERİ</h1>
<?php

$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$mail=$_POST["mail"];
$tel=$_POST["tel"];
$şehir=$_POST["şehir"];
$cinsiyet=$_POST["cinsiyet"];
$dosya=$_POST["dosya"];
$mesaj=$_POST["mesaj"];
//echo "Ad: ".htmlspecialchars($ad);
?>

<table>
    <tr>
        <td>Ad</td>
        <td>:</td>
        <td><?php echo htmlspecialchars($ad) ?></td>
    </tr>
    <tr>
        <td>Soyad</td>
        <td>:</td>
        <td><?php echo htmlspecialchars($soyad) ?></td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td>:</td>
        <td><?php echo htmlspecialchars($mail) ?></td>
    </tr>
    <tr>
        <td>Telefon</td>
        <td>:</td>
        <td><?php echo htmlspecialchars($tel) ?></td>
    </tr>
    <tr>
        <td>Şehir</td>
        <td>:</td>
        <td><?php echo htmlspecialchars($şehir) ?></td>
    </tr>
    <tr>
        <td>Cinsiyet</td>
        <td>:</td>
        <td><?php echo htmlspecialchars($cinsiyet) ?></td>
    </tr>
    <tr>
        <td>Dosya</td>
        <td>:</td>
        <td><?php echo $dosya ?></td>
    </tr>
    <tr>
        <td>Mesaj</td>
        <td>:</td>
        <td><?php echo htmlspecialchars($mesaj) ?></td>
    </tr>
   

</table>
