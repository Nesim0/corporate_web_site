
<?php 
require_once("baglan.php");

if(isset($_GET['id'])) {
    $urun_id = $_GET['id'];

    // SQL sorgusu ile ilgili ürünü çek
    $sorgu = "SELECT * FROM fotokopimakineleri WHERE id = $urun_id";
    $result = mysqli_query($baglan, $sorgu);
    $sonuc = mysqli_fetch_assoc($result);

}
// Bağlantıyı kapat
$baglan->close();
?> 

<?php
include("header.php")
?>
<body>
    <?php
    echo'<div class="urun-area">
        <img src="pic/' . $sonuc["img"] . '" alt="">
        <div class="urun-text-area">
            <div class="urun-baslik">' . $sonuc["baslik"] . '</div>
            <div class="urun-tur">' . $sonuc["tur"] . '</div>
            <div class="urun-ozellik">
                <ul type="square">
                    <li><b>Baskı:</b> ' . $sonuc["baski"] . '</li>
                    <li><b>Kopya hızı:</b>:' . $sonuc["kopyahizi"] . '</li>
                    <li><b>Kağıt boyutu:</b>' . $sonuc["kagitboyutu"] . '</li>
                    <li><b>Kağıt kapasitesi:</b>' . $sonuc["kagitkapasitesi"] . '</li>
                </ul>
            </div>
        </div>
    </div>
        <div class="bilgi">
            <div class="bilgi-baslik">Detaylı Bilgi?</div>
            <div class="bilgi-text">Ürün hakkında detaylı bilgi almak için iletişim bilgilerinizi bizimle paylaşmanız halinde müşteri temsilcilerimiz en yakın zamanda sizinle iletişime geçecektir.</div>
            <a href="tel:05323833244"><div class="bilgi-numara"> +905323833244</div></a>
             <a href="https://forms.gle/G98drpz2ZBgh82X9A" target="_blank"> <div class="bilgi-button">Sizi Arayalım!<i class="fa-solid fa-phone"></i></div></a>
        </div>';
        ?>
<?php
include("footer.php");
?>
</body>
</html>