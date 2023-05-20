function validForm(){
    
    var ad =document.form.ad;
    var soyad =document.form.soyad;
    var mail =document.form.mail;
    var tel =document.form.tel;
    var cinsiyet =document.form.cinsiyet;
    var mesaj =document.form.mesaj;
    var check =document.form.check;

    if(ad.value==""){
        ad.nextElementSibling.style.display = "block";
        return false;
    }else{
        ad.nextElementSibling.style.display = "none";
    }

    if(soyad.value==""){
        soyad.nextElementSibling.style.display = "block";
        return false;
    }else{
        soyad.nextElementSibling.style.display = "none";
    }

    if(!mail.value.match(/^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/) || mail.value==""){
        mail.nextElementSibling.style.display = "block";
        return false;
    }else{
        mail.nextElementSibling.style.display = "none";
    }

    if(!tel.value.match(/^[0-9]{11}$/) || tel.value==""){
        tel.nextElementSibling.style.display = "block";
        return false;
    }else{
        tel.nextElementSibling.style.display = "none";
    }
    
    if(mesaj.value==""){
        mesaj.nextElementSibling.style.display = "block";
        return false;
    }else{
        mesaj.nextElementSibling.style.display = "none";
    }

    if(cinsiyet.checked==false){
        cinsiyet.nextElementSibling.style.display = "block";
        return false;
    }else{
        cinsiyet.nextElementSibling.style.display = "none";
    }

    if(check.checked==false){
        check.nextElementSibling.style.display = "block";
        return false;
    }else{
        check.nextElementSibling.style.display = "none";
    }

   

    
}
