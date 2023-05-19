<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
  
</head>
<body style="background-color: #8ed3d1;" >
    
    <br>
    <br>
    <h3 style="color: white; text-align: center; font-weight: bold;">İLETİŞİM FORMU VERİLERİ</h1>
    <br>
    <br>
    <?php

    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $mail=$_POST["mail"];
    $tel=$_POST["tel"];
    $şehir=$_POST["şehir"];
    $cinsiyet=$_POST["cinsiyet"];
    $dosya=$_POST["dosya"];
    $mesaj=$_POST["mesaj"];

    ?>

    <table style="color: white; margin-left: 39%; font-weight: bold;">
        <tr>
            <td>Ad</td>
            <td>: &nbsp</td>
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
    <br>
    <a  href="iletişim.html" > <input type="button" style=" margin-left: 43%; " value="Tamam"></a>
</body>