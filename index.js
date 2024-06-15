function kayitDogrula() {
    const isim = document.getElementById("isim").value;
    const soyisim = document.getElementById("soyisim").value;
    const eposta = document.getElementById("eposta").value;
    const sifre = document.getElementById("sifre").value;
    const sifreTekrar = document.getElementById("sifreTekrar").value;
    const dogumTarihi = document.getElementById("dogumTarihi").value;
    const cinsiyet = document.getElementById("cinsiyet").value;
    if (isim === "" || soyisim === "" || eposta === "" || sifre === "" || sifreTekrar === "" || dogumTarihi === "" || cinsiyet === "") {
        alert("Lütfen tüm alanları doldurun!");
        return false;
    }
    if (!validateEmail(eposta)) {
        alert("Geçersiz e-posta formatı!");
        return false;
    }
    if (sifre.length < 8) {
        alert("Şifre en az 8 karakter uzunluğunda olmalı!");
        return false;
    }
    return true;
}

function validateEmail(eposta) {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(eposta);
}
