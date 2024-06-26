<div class="markalar">
  <div class="swiper mySwiper2">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="pic/canon.png" alt=""></div>
      <div class="swiper-slide"><img src="pic/kyocera.png" alt=""></div>
      <div class="swiper-slide"><img src="pic/hp.png" alt=""></div>
      <div class="swiper-slide"><img src="pic/panasonic.png" alt=""></div>
      <div class="swiper-slide"><img src="pic/brother.jpg" alt=""></div>
      <div class="swiper-slide"><img src="pic/ricoh.png" alt=""></div>
    </div>
    
  </div>
</div>


<div class="footer-line">
  <div class="konum">
Perpa Ticaret Merkezi<br>
A blok Kat 11 No:1683<br>
Şişli / İstanbul<br><br>


<a href="https://maps.app.goo.gl/t2EjNp8rE3GKrp4b8" target="_blank">Google Haritalar</a>
</div>
  <div class="iletisim">
    <pre>
      <i class="fa-solid fa-phone"></i><a href="tel:05323833244"> +905323833244</a>
      <i class="fa-brands fa-whatsapp"></i><a href="https://wa.me/+905323833244" target="_blank">  Whatsapp</a>
      <i class="fa-solid fa-envelope"></i> <a href="mailto:ornekmail.com">info@verdaburo.com.tr</a>
    </pre>
  </div> 
  <div class="hakkimizda">
    <img src="pic/logo.png" alt="">
  </div>    
  </div>
  
<div class="line"></div>
  <footer>
  <p>&copy; 2024 VerdaBüro Tüm hakları saklıdır.</p>
  <p>İletişim: <a href="mailto:info@ornek.com">info@verdaburo.com.tr</a></p>
</footer>


<div class="whatsapp">
  <a href="https://wa.me/+905323833244" class="wp" target="_blank"></a>
</div>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 
<!-- Menüyü açma/kapama işlemi için JavaScript -->
<script>
const hamburger = document.querySelector(".hamburger");
const navmenu = document.querySelector(".nav-menu");
hamburger.addEventListener("click",()=>{
    hamburger.classList.toggle("active");
    navmenu.classList.toggle("active");
})
document.querySelectorAll(".nav-link").forEach(n=> 
    n.addEventListener("click",()=>{
        hamburger.classList.remove("active");
        navmenu.classList.remove("active");
    })
    )
    // Menü açma fonksiyonu
function openMenu() {
    document.body.classList.add('menu-open');
}

// Menü kapatma fonksiyonu
function closeMenu() {
    document.body.classList.remove('menu-open');
}

// Hamburger menüye tıklama olayı
document.querySelector('.hamburger').addEventListener('click', function() {
    if (document.body.classList.contains('menu-open')) {
        closeMenu();
    } else {
        openMenu();
    }
});

// Arka plana tıklama olayı
document.querySelector('.overlay').addEventListener('click', closeMenu);
</script> 


<!-- Initialize Swiper -->
 <script>
  // basic slider
  var swiper = new Swiper(".mySwiper1", {
    speed: 600,
    parallax: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });
  </script>
  <!-- hizmetler -->
  <script>
  var swiper = new Swiper(".mySwiper", {
    speed: 600,
    parallax: true,
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  </script>
  <!-- markalar -->
<script>
  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 10,
     autoplay: {
        delay: 1500,
        disableOnInteraction: true,
      },
      loop: true,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
    },
  });
</script>
</body>
</html>