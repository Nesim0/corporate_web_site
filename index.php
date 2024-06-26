<?php
require_once("baglan.php");
include("header.php");
?>
<body>
        <!-- Swiper -->
        <div class="swiper mySwiper1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="pic/-S1683x1388-FWEBP (1).webp" />
            </div>
            <div class="swiper-slide">
              <img src="pic/gorsel2.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="pic/gorsel.jpg" />
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>




        <section>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="pic/makine.png" />
                        <div class="content">
                          <div class="baslik"><h1>Sayfa Başı Yazıcı Kiralama</h1></div>
                           <p>Geleneksel yazıcı satın alma modeli, yüksek başlangıç maliyetleri ve bakım giderleri ile işletmeleri zorlar. Ancak, sayfa başına kiralama modeli, işletmelerin sadece kullandıkları baskı adedi için ödeme yapmasını sağlar. Bu, baskı maliyetlerini daha iyi kontrol etmelerini sağlar ve işletmelerin bütçelerini optimize etmelerine yardımcı olur. Yeni yazıcı modellerine geçiş yapmak veya gerektiğinde hızlıca değişiklik yapmak da daha kolaydır. Esneklik ve ekonomi arayan işletmeler için ideal bir çözüm sunar.</p> 
                           <div class="bilgiler">
                           <a href="kiralama.php"><div class="more">Daha fazla bilgi</div></a>
                           <div class="callus">
                            <span>BİZİ ARAYIN</span>
                            <div class="telno"><i class="fa-solid fa-phone"></i><a href="tel:05323833244"> +905323833244</a></div>
                          </div>
                        </div>
                          </div>
                        
                          
                    </div>
                    <div class="swiper-slide">
                        <img src="pic/makine.png" />
                        <div class="content">
                          <div class="baslik"><h1>İşletmenizi Güçlendirin: Büro Makineleri Satın Alın!</h1></div>
                          <p>Büro işlerinizde verimliliği artırmak ve iş akışınızı optimize etmek için doğru ekipmana sahip olmak çok önemlidir. Verda Büro Makineleri olarak, işletmenizin ihtiyaçlarına uygun yazıcılar, tarayıcılar, fotokopi makineleri ve diğer ofis ekipmanlarını sunuyoruz. Yüksek kaliteli ürünlerimizle, işletmenizin performansını artırın ve maliyetlerinizi optimize edin. İşiniz için en iyi çözümü bulmak ve işlerinizi kolaylaştırmak için bize bugün danışın!</p>
                          <div class="bilgiler">
                          <a href="kiralama.php"><div class="more">Daha fazla bilgi</div></a>
                            <div class="callus">
                             <span>BİZİ ARAYIN</span>
                             <div class="telno"><i class="fa-solid fa-phone"></i><a href="tel:05323833244"> +905323833244</a></div>
                           </div>
                         </div>
                        </div>
                          
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
            </div>
        </section>
<div class="exp">
  <p class="baslik">Biz Kimiz?</p>
  <p>
    <a name="hizmet"></a>
   Verda Büro Makineleri olarak 15 yıllık tecrübe ile sağlam bir varlık olarak hizmet veriyoruz. Makine kiralama, satış ve teknik servis alanlarında uzmanlaşmış olan firmamız, müşterilerimize kaliteli hizmetleri sunmak için uzun yıllara dayanan deneyimimizi kullanıyoruz. Müşterilerimize ihtiyaçlarına uygun makine kiralama, satış ve teknik servis çözümleri sunarak işlerini kolaylaştırıyoruz.</p>
  </div>
<div class="hizmetler">
<div class="hizmet-text">Hizmetlerimiz</div>
<?php 


$query = "SELECT * FROM hizmetler";
$result = mysqli_query($baglan, $query);
// Veri tabanından tüm satırları çekerek $kategoriler dizisine atıyoruz
$kategoriler = mysqli_fetch_all($result, MYSQLI_ASSOC);
$baglan->close();

for($i=0; $i<count($kategoriler); $i++) {
    echo '
    <div class="boxes">
    <a href="urunler.php?id=' . $kategoriler[$i]["id"]. '">

    <div class="box">
            <div class="img">
                <img src="pic/'. $kategoriler[$i]["img"]. '" alt="">
            </div>
            <div class="text-area">
                <div class="baslik">'. $kategoriler[$i]["baslik"]. '</div>
                <p>'. $kategoriler[$i]["aciklama"]. '</p>
                </a></div>
        </div>
        ';
        $i++;
        echo'
    <a href="urunler.php?id=' . $kategoriler[$i]["id"]. '">

        <div class="box">
        <div class="img">
            <img src="pic/'. $kategoriler[$i]["img"]. '" alt="">
        </div>
        <div class="text-area">
            <div class="baslik">'. $kategoriler[$i]["baslik"]. '</div>
            <p>'. $kategoriler[$i]["aciklama"]. '</p>
        </div>
        </a></div>
    </div>';
   

}
?>

<?php
include("footer.php");
?>


