async function ara()
{
    let oyuncu = document.getElementById("oyuncu").value;
    let api = "https://www.balldontlie.io/api/v1/players/" + oyuncu;
    const res =await fetch(api);
    const data =await res.json();
    let veri=data;
    console.log(veri);
    
    document.getElementById("ad").innerHTML="<p> Oyuncunun Adı : "+veri.first_name +"</p>";
    document.getElementById("soyad").innerHTML="<p> Oyuncunun Soyadı : "+veri.last_name +"</p>";
    document.getElementById("pozisyon").innerHTML="<p> Oynadığı Pozisyon : "+veri.position +"</p>";
    document.getElementById("takım").innerHTML="<p> Takımın Adı : "+veri.team.full_name +"</p>";
    document.getElementById("kısaltma").innerHTML="<p> Takımın Kısaltması : "+veri.team.abbreviation +"</p>";
    document.getElementById("şehir").innerHTML="<p> Takımın Şehri : "+veri.team.city +"</p>";
}