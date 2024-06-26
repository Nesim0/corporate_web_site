<?php   include("header.php");?>
<?php
require_once("baglan.php");
$sorgu = "SELECT * FROM fotokopimakineleri WHERE tur = 'Yazıcı' AND baski LIKE '%Siyah / Beyaz%'";

$result = mysqli_query($baglan, $sorgu);
$sonuc = mysqli_fetch_all($result, MYSQLI_ASSOC);
$baglan->close();

?>
<body>
    <div class="text-areafm">
        <h1>A3/A4 Yazıcılar</h1>
        <p>Verimliliği ve Kaliteyi Bir Arada Sunan Yazıcılar: İşletmeniz İçin En İdeal Seçenekler!</p>
    </div>
    <?php
    
    for($i=0; $i<count($sonuc);$i++){
   echo '
   <a href="urunler.php?id=' . $sonuc[$i]["id"]. '">
   <div class="urun">
   <div class="urun-icerik">
       <img src="pic/' . $sonuc[$i]["img"] . '" alt="">
       <div class="urun-bilgi">
           <div class="baslikfm">' . $sonuc[$i]["baslik"] . '</div>
           <div class="aciklamafm">
               <ul type="square">
                   <li>Kopya Hızı: ' . $sonuc[$i]["kopyahizi"] . '</li>
                   <li>Kağıt Boyutu: ' . $sonuc[$i]["kagitboyutu"] . '</li>
               </ul>
           </div>
       </div>
   </div>
</div></a>';}

?>
<?php
include("footer.php");
?>
</body>
</html>