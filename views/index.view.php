<?php

require 'views/partials/head.php';
require 'views/partials/header.php';
?>
<!-- // Page content start -->
<div class="container-fluid g-0 hero-image" id="cover">
  <img
  srcset="images/cover/cover-w600.webp 600w,
images/cover/cover-w700.webp 700w,
images/cover/cover-w800.webp 800w,
images/cover/cover-w900.webp 900w,
images/cover/cover-w1000.webp 1000w,
images/cover/cover-w1100.webp 1100w,
images/cover/cover-w1250.webp 1250w,
images/cover/cover-w1400.webp 1400w,
images/cover/cover-w1600.webp 1600w,
images/cover/cover-w1800.webp 1800w,
images/cover/cover-w2000.webp 2000w,
images/cover/cover-w2400.webp 2400w,
images/cover/cover-w2800.webp 2800w,
images/cover/cover-w3200.webp 3200w"
sizes="100vw"
  alt="Slika">
  <a href="/poruci-online"><button class="hero-image-button btn-lg">Poruči onlajn</button></a>
</div>
<div class="container meni">
  <!-- Pice -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="pice">
    <div class="my-3">
      <h2 class="h1">Pice</h2>
    </div>
    <?php echo productCardPrintCol6ColMd3("pice-margarita", $image_path_array, "", "24/32/42cm", "590/910/1210 din.", ""); ?>
    <?php echo productCardPrintCol6ColMd3("pice-vesuvio", $image_path_array, "Vesuvio", "24/32/42cm", "610/960/1260 din.", "Sastav test pelat, kačkavalj, šunka, origano, masline"); ?>
    <div class="col-6 col-md-3">
      <div class="card">
        <img <?php
echo imageSrcSetMenuItem("pice-vesuvio", $image_path_array); // replace this with your actual function
          ?>    class="card-img-top" alt="Pica Vesuvio">
        <div class="card-body">
          <h3 class="card-title h4">Vesuvio</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">610/960/1260 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-vesuvio-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-vesuvio-sastav" class="accordion-collapse collapse border-0"> pelat, kačkavalj, šunka, origano, masline </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img 
        <?php
echo imageSrcSetMenuItem("pice-fungi", $image_path_array); // replace this with your actual function
?>   
        class="card-img-top" alt="Pica Funghi">
        <div class="card-body">
          <h3 class="card-title h4">Funghi</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">610/960/1260 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-funghi-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-funghi-sastav" class="accordion-collapse collapse border-0"> pelat, kačkavalj, pečurke, origano, masline </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy"         <?php
echo imageSrcSetMenuItem("pice-capricciosa", $image_path_array); // replace this with your actual function
?>   class="card-img-top" alt="Pica Capricciosa">
        <div class="card-body">
          <h3 class="card-title h4">Capricciosa</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">640/1000/1290 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-capricciosa-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-capricciosa-sastav" class="accordion-collapse collapse border-0"> pelat, kačkavalj, pečurke, šunka, origano, masline </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pice-vegetarijana", $image_path_array); // replace this with your actual function
?>  class="card-img-top" alt="Pica Vegetarijana">
        <div class="card-body">
          <h3 class="card-title h4">Vegetarijana</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">650/1030/1350 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-vegetarijana-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-vegetarijana-sastav" class="accordion-collapse collapse border-0"> pelat, biljni kačkavalj, pečurke, paprika, luk, masline, rukola, bosiljak </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pice-peperoni", $image_path_array); // replace this with your actual function
          ?> class="card-img-top" alt="Pica Peperoni">
        <div class="card-body">
          <h3 class="card-title h4">Peperoni</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">680/1080/1390 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-peperoni-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-peperoni-sastav" class="accordion-collapse collapse border-0"> pelat, kačkavalj, pečurke, kulen, slanina, origano </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pice-tuna", $image_path_array); // replace this with your actual function
?>  class="card-img-top" alt="Pica Tuna">
        <div class="card-body">
          <h3 class="card-title h4">Tuna</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">690/1100/1450 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-tuna-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-tuna-sastav" class="accordion-collapse collapse border-0"> pelat, biljni kačkavalj, tuna, kukuruz šećerac, pečurke, rukola, origano, masline </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pice-favola", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Pica Favola">
        <div class="card-body">
          <h3 class="card-title h4">Favola Specijal</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text"> 810/1360/1850 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-favola-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-favola-sastav" class="accordion-collapse collapse border-0"> pelat, kačkavalj, pečurke, šunka, suvi vrat, kunel, slanina, jaje, masline, origano, pavlaka </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pice-srbijana", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Pica Srbijana">
        <div class="card-body">
          <h3 class="card-title h4">Srbijana</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">830/1390/1890 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-srbijana-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-srbijana-sastav" class="accordion-collapse collapse border-0"> pelat, kačkavalj, šunka, pršuta, kulen, slanina, jaje, kajmak, origano </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pice-prsuta", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Pica Prsuta">
        <div class="card-body">
          <h3 class="card-title h4">Pršuta</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">800/1250/1650 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-prsuta-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-prsuta-sastav" class="accordion-collapse collapse border-0"> pelat, kačkavalj, pršuta, crne masline, origano, parmezan, rukola </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy"  <?php
echo imageSrcSetMenuItem("pice-pikanta", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Pica Pikante">
        <div class="card-body">
          <h3 class="card-title h4">Pikante</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">700/1110/1450 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-pikanta-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-pikanta-sastav" class="accordion-collapse collapse border-0"> pelat, kačkavalj, kulen, feferoni, crne masline, origano </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy"<?php
echo imageSrcSetMenuItem("pice-quattro-formaggi", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt=" Pica Quattro Formaggi">
        <div class="card-body">
          <h3 class="card-title h4">Quattro Formaggi</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">680/1090/1440 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-quattro-formaggi-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-quattro-formaggi-sastav" class="accordion-collapse collapse border-0"> Pelat, kačkavalj, parmezan, dimljeni kačkavalj, plavi sir, masline, origano </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pice-bbq-pizza", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Pica Bbq">
        <div class="card-body">
          <h3 class="card-title h4">BBQ</h3>
          <p class="card-text">24/32/42cm</p>
          <p class="card-text">680/1090/1440 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pice-bbq-sastav">
                <b>Sastav</b>
              </button>
              <div id="pice-bbq-sastav" class="accordion-collapse collapse border-0"> BBQ sos, kačkavalj, dimljena piletina, crveni luk, origano, masline </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Tortilje -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">Tortilje</h2>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("tortilje-tortilja-sunka", $image_path_array); // replace this with your actual function
?>  class="card-img-top" alt="Tortilja Sunka">
        <div class="card-body">
          <h3 class="card-title h4">Tortilja Šunka</h3>
          <p class="card-text">350g</p>
          <p class="card-text">550 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#tortilje-sunka-sastav">
                <b>Sastav</b>
              </button>
              <div id="tortilje-sunka-sastav" class="accordion-collapse collapse border-0"> dresing, kačkavalj, šunka, paradajz, zelena salata </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("tortilje-tortilja-pecenica", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Tortilja Pecenica">
        <div class="card-body">
          <h3 class="card-title h4">Tortilja Pečenica</h3>
          <p class="card-text">350g</p>
          <p class="card-text">570 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#tortilje-pecenica-sastav">
                <b>Sastav</b>
              </button>
              <div id="tortilje-pecenica-sastav" class="accordion-collapse collapse border-0"> dresing, kačkavalj, pečenica, paradajz, zelena salata </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("tortilje-tortilja-kulen", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Tortilja Kulen">
        <div class="card-body">
          <h3 class="card-title h4">Tortilja Kulen</h3>
          <p class="card-text">350g</p>
          <p class="card-text">590 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#tortilje-kulen-sastav">
                <b>Sastav</b>
              </button>
              <div id="tortilje-kulen-sastav" class="accordion-collapse collapse border-0"> dresing, kačkavalj, kulen, paradajz, zelena salata </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("tortilje-tortilja-prsuta", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Tortilja Prsuta">
        <div class="card-body">
          <h3 class="card-title h4">Tortilja Pršuta</h3>
          <p class="card-text">350g</p>
          <p class="card-text">650 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#tortilje-prsuta-sastav">
                <b>Sastav</b>
              </button>
              <div id="tortilje-prsuta-sastav" class="accordion-collapse collapse border-0"> dresing, kačkavalj, pršuta, paradajz, zelena salata </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("tortilje-dimljena-piletina-tortilja", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Tortilja Dimljena Piletina">
        <div class="card-body">
          <h3 class="card-title h4">Tortilja Dimljena Piletina</h3>
          <p class="card-text">350g</p>
          <p class="card-text">5900 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#tortilje-dimljena-piletina-sastav">
                <b>Sastav</b>
              </button>
              <div id="tortilje-dimljena-piletina-sastav" class="accordion-collapse collapse border-0"> dresing, kačkavalj, dimljena piletina, paradajz, zelena salata </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("tortilje-pileca-tortilja", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Tortilja Hrskava Piletina">
        <div class="card-body">
          <h3 class="card-title h4">Hrskava Piletina</h3>
          <p class="card-text">350g</p>
          <p class="card-text">630 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#tortilje-dimljena-pilertina-sastav">
                <b>Sastav</b>
              </button>
              <div id="tortilje-dimljena-pilertina-sastav" class="accordion-collapse collapse border-0"> dresing, kačkavalj, hrskava piletina, paradajz, zelena salata </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Obroci i piroske -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="piroske-i-obroci">
    <div class="my-3">
      <h2 class="h1">Piroške i Obroci</h2>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("piroske-piroska-italijanska", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Piroska Italijanska">
        <div class="card-body">
          <h3 class="card-title h4">Italijanska Piroška</h3>
          <p class="card-text">400g</p>
          <p class="card-text">710 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#piroska-italijanska-sastav">
                <b>Sastav</b>
              </button>
              <div id="piroska-italijanska-sastav" class="accordion-collapse collapse border-0"> pelat, kačkavalj, šunka, pečurke, pavlaka, origano </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("piroske-piroska-zlatiborska", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Piroska Zlatiborska">
        <div class="card-body">
          <h3 class="card-title h4">Zlatiborska Piroška</h3>
          <p class="card-text">500g</p>
          <p class="card-text">830 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#piroska-zlatiborska-sastav">
                <b>Sastav</b>
              </button>
              <div id="piroska-zlatiborska-sastav" class="accordion-collapse collapse border-0"> šunka, suvi vrat, slanina, pršuta, kajmak, jaje </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("obroci-pileci-stapici-obrok", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Pohovani Stapici">
        <div class="card-body">
          <h3 class="card-title h4">Pohovani Štapići</h3>
          <p class="card-text">550g</p>
          <p class="card-text">780 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#obrok-stapici-sastav">
                <b>Sastav</b>
              </button>
              <div id="obrok-stapici-sastav" class="accordion-collapse collapse border-0"> 250g - pohovani pileći štapići, <br>150g - pomfrit, <br>150g - zelena salata, paradajz, tartar sos </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("obroci-pohovani-kackavalj-obrok", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Pohovani Kackavalj">
        <div class="card-body">
          <h3 class="card-title h4">Pohovani Kačkavalj</h3>
          <p class="card-text">550g</p>
          <p class="card-text">720 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#obrok-kackavalj-sastav">
                <b>Sastav</b>
              </button>
              <div id="obrok-kackavalj-sastav" class="accordion-collapse collapse border-0"> 250g - pohovanog kačkavalja <br>150g - pomfrit <br>150g - zelena salata, paradajz, pavlaka </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Sendvici  -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="sendvici">
    <div class="my-3">
      <h2 class="h1">Sendviči</h2>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("sendvici-sendvic-sunka", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Sendvic Sunka">
        <div class="card-body">
          <h3 class="card-title h4">Šunka</h3>
          <p class="card-text">330g</p>
          <p class="card-text">410 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#sendvic-sunka-sastav">
                <b>Sastav</b>
              </button>
              <div id="sendvic-sunka-sastav" class="accordion-collapse collapse border-0"> somun, šunka, pavlaka, kačkavalj, salata, paradajz </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("sendvici-sendvic-svinjski-vrat", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Sendvic Suvi Vrat">
        <div class="card-body">
          <h3 class="card-title h4">Suvi Vrat</h3>
          <p class="card-text">330g</p>
          <p class="card-text">430 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#sendvic-suvi-vrat-sastav">
                <b>Sastav</b>
              </button>
              <div id="sendvic-suvi-vrat-sastav" class="accordion-collapse collapse border-0"> somun, suvi vrat, pavlaka, kačkavalj, salata, paradajz </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("sendvici-sendvic-pecenica", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Sendvic Pecenica">
        <div class="card-body">
          <h3 class="card-title h4">Pečenica</h3>
          <p class="card-text">330g</p>
          <p class="card-text">430 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#sendvic-pecenica-sastav">
                <b>Sastav</b>
              </button>
              <div id="sendvic-pecenica-sastav" class="accordion-collapse collapse border-0"> somun, pečenica, pavlaka, kačkavalj, salata, paradajz </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("sendvici-sendvic-tuna", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Sendvic Tuna">
        <div class="card-body">
          <h3 class="card-title h4">Tuna</h3>
          <p class="card-text">330g</p>
          <p class="card-text">470 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#sendvic-tuna-sastav">
                <b>Sastav</b>
              </button>
              <div id="sendvic-tuna-sastav" class="accordion-collapse collapse border-0"> somun, kečap, tuna, biljni kačkavalj, kukuruz šećerac, salata </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("sendvici-sendvic-kulen", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Sendvic Kulen">
        <div class="card-body">
          <h3 class="card-title h4">Kulen</h3>
          <p class="card-text">330g</p>
          <p class="card-text">470 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#sendvic-kulen-sastav">
                <b>Sastav</b>
              </button>
              <div id="sendvic-kulen-sastav" class="accordion-collapse collapse border-0"> somun, kulen, pavlaka, kačkavalj, salata, feferone </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("sendvici-sendvic-prsuta", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Sendvic Prusuta">
        <div class="card-body">
          <h3 class="card-title h4">Pršuta</h3>
          <p class="card-text">330g</p>
          <p class="card-text">510 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#sendvic-prsuta-sastav">
                <b>Sastav</b>
              </button>
              <div id="sendvic-prsuta-sastav" class="accordion-collapse collapse border-0"> somun, kajmak, pršuta, kačkavalj, rukola </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Palacinke slane -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="palacinke-slane">
    <div class="my-3">
      <h2 class="h1">Palačinke Slane</h2>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slane-palacinke-palacinka-sunka", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slana Palacinka Sunka">
        <div class="card-body">
          <h3 class="card-title h4">Slana Palačinka Šunka</h3>
          <p class="card-text">300g</p>
          <p class="card-text">370 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slane-palacinke/palacinka-sunka-sastav">
                <b>Sastav</b>
              </button>
              <div id="slane-palacinke/palacinka-sunka-sastav" class="accordion-collapse collapse border-0"> šunka, pavlaka, kačkavalj </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slane-palacinke-palacinka-kulen", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slana Palacinka Kulen">
        <div class="card-body">
          <h3 class="card-title h4">Slana Palačinka Kulen</h3>
          <p class="card-text">300g</p>
          <p class="card-text">400 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slane-palacinke/palacinka-kulen-sastav">
                <b>Sastav</b>
              </button>
              <div id="slane-palacinke/palacinka-kulen-sastav" class="accordion-collapse collapse border-0"> kulen, pavlaka, kačkavalj </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slane-palacinke-palacinka-pecenica", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slana Palacinka Pecenica">
        <div class="card-body">
          <h3 class="card-title h4">Slana Palačinka Pečenica</h3>
          <p class="card-text">300g</p>
          <p class="card-text">400 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slane-palacinke/palacinka-pecenica-sastav">
                <b>Sastav</b>
              </button>
              <div id="slane-palacinke/palacinka-pecenica-sastav" class="accordion-collapse collapse border-0"> pečenica, pavlaka, kačkavalj </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slatke palacinke -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="palacinke-slatke">
    <div class="my-3">
      <h2 class="h1">Palačinke Slatke</h2>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-eurokrem", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Eurokrem">
        <div class="card-body">
          <h3 class="card-title h4">Eurokrem</h3>
          <p class="card-text">300g</p>
          <p class="card-text">300 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slatke_palacinke/eurokrem-sastav">
                <b>Sastav</b>
              </button>
              <div id="slatke_palacinke/eurokrem-sastav" class="accordion-collapse collapse border-0"> eurokrem </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-nutela", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Nutela">
        <div class="card-body">
          <h3 class="card-title h4">Nutela</h3>
          <p class="card-text">300g</p>
          <p class="card-text">310 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slatke_palacinke/nutela-sastav">
                <b>Sastav</b>
              </button>
              <div id="slatke_palacinke/nutela-sastav" class="accordion-collapse collapse border-0"> nutela </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-baunti", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Baunti">
        <div class="card-body">
          <h3 class="card-title h4">Bounty</h3>
          <p class="card-text">350g</p>
          <p class="card-text">380 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slatke_palacinke/baunti-sastav">
                <b>Sastav</b>
              </button>
              <div id="slatke_palacinke/baunti-sastav" class="accordion-collapse collapse border-0"> nutela, seckani kokos </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-mars", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Mars">
        <div class="card-body">
          <h3 class="card-title h4">Mars</h3>
          <p class="card-text">300g</p>
          <p class="card-text">380 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slatke_palacinke/mars-sastav">
                <b>Sastav</b>
              </button>
              <div id="slatke_palacinke/mars-sastav" class="accordion-collapse collapse border-0"> nutela, karamela </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-milka", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Milka">
        <div class="card-body">
          <h3 class="card-title h4">Milka</h3>
          <p class="card-text">300g</p>
          <p class="card-text">400 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slatke_palacinke/milka-sastav">
                <b>Sastav</b>
              </button>
              <div id="slatke_palacinke/milka-sastav" class="accordion-collapse collapse border-0"> milka čokolada </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-kinder", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Kinder">
        <div class="card-body">
          <h3 class="card-title h4">Kinder</h3>
          <p class="card-text">300g</p>
          <p class="card-text">400 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slatke_palacinke/kinder-sastav">
                <b>Sastav</b>
              </button>
              <div id="slatke_palacinke/kinder-sastav" class="accordion-collapse collapse border-0"> kinder čokoladice </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-snikers", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Snikers">
        <div class="card-body">
          <h3 class="card-title h4">Snikers</h3>
          <p class="card-text">300g</p>
          <p class="card-text">400 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slatke_palacinke/snikers-sastav">
                <b>Sastav</b>
              </button>
              <div id="slatke_palacinke/snikers-sastav" class="accordion-collapse collapse border-0"> nutela, karamela, komadići kikirikija </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-oreo", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Oreo">
        <div class="card-body">
          <h3 class="card-title h4">Oreo</h3>
          <p class="card-text">350g</p>
          <p class="card-text">400 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#palacinke/oreo-sastav">
                <b>Sastav</b>
              </button>
              <div id="palacinke/oreo-sastav" class="accordion-collapse collapse border-0"> nutela, oreo mrvice </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-med", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Med">
        <div class="card-body">
          <h3 class="card-title h4">Med</h3>
          <p class="card-text">300g</p>
          <p class="card-text">290 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slatke_palacinke/med-sastav">
                <b>Sastav</b>
              </button>
              <div id="slatke_palacinke/med-sastav" class="accordion-collapse collapse border-0"> livadski med </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-dzem", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Dzem">
        <div class="card-body">
          <h3 class="card-title h4">Džem</h3>
          <p class="card-text">300g</p>
          <p class="card-text">280 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slatke_palacinke/dzem-sastav">
                <b>Sastav</b>
              </button>
              <div id="slatke_palacinke/dzem-sastav" class="accordion-collapse collapse border-0"> džem od kajsije </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("slatke-palacinke-secer", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Slatka Palacinka Secer">
        <div class="card-body">
          <h3 class="card-title h4">Šećer</h3>
          <p class="card-text">350g</p>
          <p class="card-text">180 din.</p>
          <div class="accordion border-0">
            <div class="accordion-item border-0">
              <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#slatke_palacinke/secer-sastav">
                <b>Sastav</b>
              </button>
              <div id="slatke_palacinke/secer-sastav" class="accordion-collapse collapse border-0"> šećer </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dodaci -->
  <div class="dodaci" id="dodaci">
    <div class="row justify-content-center">
      <!-- Dodaci Slani -->
      <div class="slani-dodaci text-center col-12 col-md-6" id="slani-dodaci">
        <div class="my-3 text-center">
          <h2 class="h1">Slani Dodaci</h2>
        </div>
        <div class="my-3 text-center slani-dodaci-gramaza">
          <p>
            <u>50/100g</u>
          </p>
        </div>
        <div class="my-3 text-center slani-dodaci-cena">
          <p>
            <u>90/180din</u>
          </p>
        </div>
        <div class="row mb-5 d-flex justify-content-evenly">
          <div class="text-center row d-flex justify-content-evenly" style="max-width: 500px;">
            <div class="col-4 col-md-4">Masline</div>
            <div class="col-4 col-md-4">pavlaka</div>
            <div class="col-4 col-md-4">jaje</div>
            <div class="col-4 col-md-4">pecurke</div>
            <div class="col-4 col-md-4">kackavalj</div>
            <div class="col-4 col-md-4">sunka</div>
            <div class="col-4 col-md-4">suvi vrat</div>
            <div class="col-4 col-md-4">pecenica</div>
            <div class="col-4 col-md-4">kulen</div>
            <div class="col-4 col-md-4">prsuta</div>
            <div class="col-4 col-md-4">slanina</div>
            <div class="col-4 col-md-4">kajmak</div>
            <div class="col-4 col-md-4">pelat</div>
          </div>
        </div>
      </div>
      <!-- Pomfrit -->
      <div class="col-6 col-md-3" id="prilozi">
        <div class="my-3 text-center">
          <h2 class="h1">Prilozi</h2>
        </div>
        <div class="card">
          <img loading="lazy" <?php
echo imageSrcSetMenuItem("prilozi-pomfrit", $image_path_array); // replace this with your actual function
?> class="card-img-top" alt="Pomfrit">
          <div class="card-body">
            <h3 class="card-title h4">Pomfrit</h3>
            <p class="card-text">250g</p>
            <p class="card-text">300 din.</p>
            <div class="accordion border-0">
              <div class="accordion-item border-0">
                <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pomfrit-sastav">
                  <b>Sastav</b>
                </button>
                <div id="pomfrit-sastav" class="accordion-collapse collapse border-0"> rezani krompir </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Dodaci Slatki -->
    <div class="slatki-dodaci row justify-content-center" id="slatki-dodaci">
      <div class="my-3 text-center">
        <h2 class="h1">Slatki Dodaci</h2>
      </div>
      <div class="slatki-dodaci-items">
        <table class="table-striped table">
          <tbody>
            <tr>
              <td>Plazma u mleku</td>
              <td>50g</td>
              <td>120 din.</td>
            </tr>
            <tr>
              <td>Lešnik</td>
              <td>30g</td>
              <td>90 din.</td>
            </tr>
            <tr>
              <td>Orah</td>
              <td>30g</td>
              <td>90 din.</td>
            </tr>
            <tr>
              <td>Malina</td>
              <td>50g</td>
              <td>90 din.</td>
            </tr>
            <tr>
              <td>Višnja</td>
              <td>50g</td>
              <td>90 din.</td>
            </tr>
            <tr>
              <td>Banana</td>
              <td>50g</td>
              <td>90 din.</td>
            </tr>
            <tr>
              <td>Šlag</td>
              <td></td>
              <td>90 din.</td>
            </tr>
            <tr>
              <td>Plazma</td>
              <td>30g</td>
              <td>80 din.</td>
            </tr>
            <tr>
              <td>Kokos</td>
              <td>30g</td>
              <td>80 din.</td>
            </tr>
            <tr>
              <td>Kikiriki</td>
              <td>30g</td>
              <td>80 din.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Pica -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="pica">
    <div class="my-3">
      <h2 class="h1">Pića</h2>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pica-rosa", $image_path_array); // replace this with your actual function
?>  class="card-img-top" alt="Rosa Voda">
        <div class="card-body">
          <h3 class="card-title h4">Rosa Voda</h3>
          <p class="card-text">0.5l</p>
          <p class="card-text">130 din.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pica-coca-cola", $image_path_array); // replace this with your actual function
?>  class="card-img-top" alt="Coca Cola">
        <div class="card-body">
          <h3 class="card-title h4">Coca-Cola</h3>
          <p class="card-text">0.33l</p>
          <p class="card-text">180din</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pica-cola-zero", $image_path_array); // replace this with your actual function
?>  class="card-img-top" alt="Coca Cola Zero">
        <div class="card-body">
          <h3 class="card-title h4">Coca-Cola Zero</h3>
          <p class="card-text">0.33l</p>
          <p class="card-text">180 din.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pica-fanta", $image_path_array); // replace this with your actual function
?>  class="card-img-top" alt="Fanta">
        <div class="card-body">
          <h3 class="card-title h4">Fanta</h3>
          <p class="card-text">0.33l</p>
          <p class="card-text">180 din.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card">
        <img loading="lazy" <?php
echo imageSrcSetMenuItem("pica-ultra", $image_path_array); // replace this with your actual function
?>  class="card-img-top" alt="Ultra Energy">
        <div class="card-body">
          <h3 class="card-title h4">Ultra Energy</h3>
          <p class="card-text">0.25l</p>
          <p class="card-text">200 din.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Od kontenjera za sve proizvode -->
<!-- Zone i dostave -->
<div class="zone container-fluid p-0" id="zone">
  <div class="my-3 text-center">
    <h2 class="h1">Zone i Dostave</h2>
  </div>
  <div class="text-center mb-2 address">
    <a href="https://maps.app.goo.gl/X1V4ZRvGGvvAr5oU8" target="_blank">
      <h3>
        <i class="fa-solid fa-location-dot me-3" style="color: #f00;"></i>Adresa: Ljubićka 11, Beograd
      </h3>
    </a>
  </div>
  <div class="w-100 text-center text-muted mb-2 p-2">Plaćanje je moguće isključivo gotovinom</div>
  <!-- My Maps Test -->
  <div id="map-canvas"></div>
  <style>
    html,
    body,
    #map-canvas {
      height: 100%;
      margin: 0px;
      padding: 0px
    }
  </style>
  <!--  -->
  <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDArA1yk8Lc8yca0Vco4xkJ2xY7nELpNZs&loading=async&callback=initMap&region=RS&language=en"></script>
  <script>
    var map;
    var infowindow;
    async function initMap() {
      var mapOptions = {
        gestureHandling: 'cooperative',
        maxZoom: 22,
        streetViewControl: false,
        minZoom: 12,
        restriction: {
          latLngBounds: {
            north: 44.878633,
            south: 44.724634,
            east: 20.569483,
            west: 20.381334,
          },
        },
        styles: [{
          featureType: "poi.business",
          stylers: [{
            visibility: "off"
          }],
        }]
      }
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      var mapLayer = new google.maps.KmlLayer({
        url: "https://www.google.com/maps/d/kml?mid=1zKE0tMK2R_ecfuQzbi-cAVZpeS1d0As"
      });
      mapLayer.setMap(map);
    }
    // google.maps.event.addDomListener(window, 'load', initMap);
  </script>
  <!-- My Maps test -->
  <div class="row m-0 d-flex justify-content-evenly zona">
    <div class="my-3 text-center">Moguće je poručiti i bez ostvarenja minimuma, sa doplatom do minimalnog iznosa za Vašu zonu!</div>
    <div class="col text-center">
      <i class="fa-solid fa-circle fa-xl mb-3" style="color: #0f9d58;"></i>
      <h3>Zona 1</h3>
      <p class="mb-1">Minimum:</p>
      <p>1000 din.</p>
    </div>
    <div class="col text-center">
      <i class="fa-solid fa-circle fa-xl mb-3" style="color: #ffd600;"></i>
      <h3>Zona 2</h3>
      <p class="mb-1">Minimum:</p>
      <p>1200 din.</p>
    </div>
    <div class="col text-center">
      <i class="fa-solid fa-circle fa-xl mb-3" style="color: #e65100;"></i>
      <h3>Zona 3</h3>
      <p class="mb-1">Minimum:</p>
      <p>1400 din.</p>
    </div>
  </div>
</div>
<!-- Page content end -->
<?php
require 'views/partials/footer.php';
?>