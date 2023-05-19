<head>
    <title>Kullanıcı Sayfası</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<?php
$gelenMail=$_POST["mail"];
$gelenŞifre=$_POST["şifre"];

?>
<body style="background-color: #9dd6a1;">
<?php
if($gelenMail=="g211210001@sakarya.edu.tr" && $gelenŞifre=="g211210001")
{
    ?>
    <br>
    <h1 style="color: white; text-align: center; font-weight: bold;">Hoşgeldiniz "<?php echo $gelenMail?>" </h1>

    <a href="login.html" > <button type="button" class="btn btn-outline-light" style="margin-left: 90%;">Çıkış Yap</button></a>
    <?php

}
else{    
?>
<?php  header("Location: login.html");?>

<?php
}
?>
</body>