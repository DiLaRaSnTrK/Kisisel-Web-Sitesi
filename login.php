<?php
$gelenMail=$_POST["mail"];
$gelenŞifre=$_POST["şifre"];
//echo "Ad: ".$y;
?>
<?php
if($gelenMail=="g211210001@sakarya.edu.tr" && $gelenŞifre=="g211210001")
{
    echo "<h1>Hoşgeldiniz '$gelenMail' </h1>";
}
else{    
?>
<?php  header("Location: login.html");?>

<?php
}
?>