<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Kayıt Sistemi</title>
    <script src="index.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
require_once "mysql.php";
$db = getDbConnection();
$sql = "SELECT id, isim, soyisim, eposta, dogum_tarihi, cinsiyet FROM regform";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Ad</th><th>Soyad</th><th>E-posta</th><th>Doğum Tarihi</th><th>Cinsiyet</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["isim"] . "</td>";
        echo "<td>" . $row["soyisim"] . "</td>";
        echo "<td>" . $row["eposta"] . "</td>";
        echo "<td>" . $row["dogum_tarihi"] . "</td>";
        echo "<td>" . $row["cinsiyet"] . "</td>";
        echo "</tr>";
        
    }
    echo '<a href="index.html" style="width: 150px; margin:1rem;">Geri Dön</a>';
    echo "</table>";
} else {
    echo "Kayıtlı kullanıcı bulunamadı.";
}
$db->close();
?>

</body>
</html>

