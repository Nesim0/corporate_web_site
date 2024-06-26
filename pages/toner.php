<?php   include("header.php");?>
<?php
require_once("baglan.php");
$sorgu="SELECT * FROM fotokopimakineleri WHERE baski LIKE '%Toner%'";
$result = mysqli_query($baglan, $sorgu);
$sonuc = mysqli_fetch_all($result, MYSQLI_ASSOC);
$baglan->close();

?>
<body>
    <div class="text-areafm">
        <h1>Toner</h1>
        <p>Yüksek Kaliteli Baskılar İçin Güvenilir Tonerler: İşletmenizde Mükemmel Sonuçlar İçin En İyi Seçenekler!</p>
    </div>
    <?php
    
    for($i=0; $i<count($sonuc);$i++){
   echo '
   <div class="urun">
   <div class="urun-icerik">
       <img src="pic/' . $sonuc[$i]["img"] . '" alt="">
       <div class="urun-bilgi">
           <div class="baslikfm">' . $sonuc[$i]["baslik"] . '</div>
       </div>
   </div>
</div>';}

?>
<?php
include("footer.php");
?>
</body>
</html>