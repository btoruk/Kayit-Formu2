<?php
require_once "mysql.php";
$db = getDbConnection();
$isim = trim($_POST["isim"]);
$soyisim = trim($_POST["soyisim"]);
$eposta = trim($_POST["eposta"]);
$sifre = trim($_POST["sifre"]);
$sifreTekrar = trim($_POST["sifreTekrar"]);
$dogumTarihi = trim($_POST["dogumTarihi"]);
$cinsiyet = trim($_POST["cinsiyet"]);
$sql = "SELECT * FROM regform WHERE eposta = '$eposta'";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    echo "Bu e-posta adresi zaten kullanılıyor! Yönlendiriliyorsunuz!";
    exit();
}
if ($sifre !== $sifreTekrar) {
    echo "Bu şifreler aynı değil!";
    exit();
}
$hashedSifre = password_hash($sifre, PASSWORD_DEFAULT);
$sql = "INSERT INTO regform (isim, soyisim, eposta, sifre, dogum_tarihi, cinsiyet) 
        VALUES ('$isim', '$soyisim', '$eposta', '$hashedSifre', '$dogumTarihi', '$cinsiyet')";
if ($db->query($sql) === TRUE) {
    echo "Kayıt işlemi başarıyla tamamlandı! Yönlendiriliyorsunuz!";
} else {
    echo "Kayıt işlemi sırasında bir hata oluştu: " . $db->error . " Yönlendiriliyorsunuz!";
}
$db->close();

?>
<html>
    <script>
        setTimeout(function() {
            document.location.href = "index.html";
        }, 3000);
    </script>
</html>
