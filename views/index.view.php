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
      <h2 class="h1">COLD APPETIZERS</h2>
    </div>
    <?php echo productCardPrintCol6ColMd3("cold-appetizers-dalmatian-smoked-ham", $image_path_array, "Dalmatian Smoked Ham", "", "15,00 €", "");
    echo productCardPrintCol6ColMd3("cold-appetizers-cheese-in-olive", $image_path_array, "Cheese in Olive", "Vegetarian", "13,00 €", "");
    echo productCardPrintCol6ColMd3("cold-appetizers-cold-platter-kabalero", $image_path_array, "Cold Platter Kabalero", "", "14,00 €", "ham, cheese, anchovies, olives");
    echo productCardPrintCol6ColMd3("cold-appetizers-anchovies-carpaccio", $image_path_array, "Anchovies Carpaccio", "", "13,00 €", "");
 
    ?>
  </div> 
 
  <!-- SALADS -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">SALADS</h2>
    </div>
    <?php
    echo productCardPrintCol6ColMd3("salads-seasonal-salad", $image_path_array, "Seasonal Salad", "Vegan, Vegetarian", "5,00 €", "");
    echo productCardPrintCol6ColMd3("salads-salad-konavle", $image_path_array, "Salad Konavle", "", "11,50 €", "smoked ham. cheese. tomatoes, peppers,cucumbers, onions, olives");
    echo productCardPrintCol6ColMd3("salads-tuna-salad", $image_path_array, "Tuna Salad", "", "11,50 €", "");
    echo productCardPrintCol6ColMd3("salads-chicken-salad", $image_path_array, "Chicken Salad", "", "11,50 €", "");
    echo productCardPrintCol6ColMd3("salads-greek-salad-with-olives", $image_path_array, "Greek Salad with Olives", "", "11,50 €", "");
    echo productCardPrintCol6ColMd3("salads-octopus-salad", $image_path_array, "Octopus Salad", "", "13,50 €", "");
    ?>
  </div>
  <!-- SOUPS -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">SOUPS</h2>
    </div>
    <?php
     echo productCardPrintCol6ColMd3("soups-beef-soup", $image_path_array, "Beef Soup", "", "5,00 €", "");
     echo productCardPrintCol6ColMd3("soups-tomato-cream-soup", $image_path_array, "Tomato Cream Soup", "Vegetarian", "5,00 €", "");
     echo productCardPrintCol6ColMd3("soups-mushroom-soup", $image_path_array, "Mushroom Soup", "Vegetarian", "5,00 €", "");
     echo productCardPrintCol6ColMd3("soups-fish-soup", $image_path_array, "Fish Soup", "", "6,00 €", "");
    ?>
   
  </div>
  <!--HOT SIDE DISHES  -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">HOT SIDE DISHES</h2>
    </div>
    <?php 
    echo productCardPrintCol6ColMd3("hot-side-dishes-breaded-cheese", $image_path_array, "Breaded Cheese", "", "11,00 €", "");
    echo productCardPrintCol6ColMd3("hot-side-dishes-assortment-of-omelettes", $image_path_array, "Assortment of Omelettes", "", "6,50 €", "cheese, ham, mushrooms");
    echo productCardPrintCol6ColMd3("hot-side-dishes-mixed-omelette", $image_path_array, "Mixed Omelette", "", "7,50 €", "");
    echo productCardPrintCol6ColMd3("hot-side-dishes-bacon-and-eggs", $image_path_array, "Bacon and Eggs", "", "7,50 €", "");
    echo productCardPrintCol6ColMd3("hot-side-dishes-warm-sandwich-of-your-choice", $image_path_array, "Warm Sandwich of Your Choice", "", "7,00 €", "dalmatian ham, chicken, tunna;cheese, mayonnaise, lettuce, tomatoes");
    echo productCardPrintCol6ColMd3("hot-side-dishes-warm-sandwich", $image_path_array, "Warm Sandwich", "", "7,00 €", "mixed meat");
    echo productCardPrintCol6ColMd3("hot-side-dishes-toast", $image_path_array, "Toast", "", "6,00 €", "");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-chicken-steak", $image_path_array, "Chicken Steak", "", "13,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-pljeskavica", $image_path_array, "Pljeskavica", "", "13,00 €", "minced meat *Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-evap-i-i-skewers-of-your-choosing", $image_path_array, "Ćevapčići Skewers of Your Choosing", "", "13,00 €", "pork or chicken *Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-sausages", $image_path_array, "Sausages", "", "13,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-hamburger", $image_path_array, "Hamburger", "", "7,00 €", "ajvar, mayonnaise, lettuce, tomatoes *Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-cheeseburger", $image_path_array, "Cheeseburger", "", "7,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-vege-burger", $image_path_array, "Vege Burger", "Vegan, Vegetarian", "9,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-vege-burger", $image_path_array, "Vege Burger", "Vegan, Vegetarian", "9,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    ?>
   
  </div>
  <!-- PASTA DISHES -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">PASTA DISHES</h2>
    </div>
    <?php 
    echo productCardPrintCol6ColMd3("pasta-dishes-spaghetti-bolognase", $image_path_array, "Spaghetti Bolognase", "", "11,00 €", "sauce, minced meat");
    echo productCardPrintCol6ColMd3("pasta-dishes-spaghetti-napoliten", $image_path_array, "Spaghetti Napoliten", "Vegetarian", "9,50 €", "tomato sauce");
    echo productCardPrintCol6ColMd3("pasta-dishes-spaghetti-milanese", $image_path_array, "Spaghetti Milanese", "", "11,00 €", "tomato sauce, ham, mushrooms");
    echo productCardPrintCol6ColMd3("pasta-dishes-spaghetti-carbonara", $image_path_array, "Spaghetti Carbonara", "", "11,00 €", "ham, cream, egg");
    echo productCardPrintCol6ColMd3("pasta-dishes-spaghetti-with-tuna", $image_path_array, "Spaghetti with Tuna", "", "12,00 €", "");
    echo productCardPrintCol6ColMd3("pasta-dishes-spaghetti-with-seafood", $image_path_array, "Spaghetti with Seafood", "", "13,00 €", "crayfish, musseles, anchovies, calamari");
    echo productCardPrintCol6ColMd3("pasta-dishes-gluten-free-spaghetti", $image_path_array, "Gluten free Spaghetti", "", "13,00 €", "");
    ?>
   
  </div>
  <!-- TAGLIATELE-->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">TAGLIATELE</h2>
    </div>
    <?php 
    echo productCardPrintCol6ColMd3("tagliatele-chicken-tagliatele", $image_path_array, "Chicken Tagliatele", "", "12,00 €", "chicken, zucchini, cream, red pepper");
    echo productCardPrintCol6ColMd3("tagliatele-tagliatele-mixed", $image_path_array, "Tagliatele Mixed", "", "13,00 €", "chicken, salmon, shrimp, cream");
    ?>
  </div>
  <!-- LASAGNE -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">LASAGNE</h2>
    </div>
    <?php 
    echo productCardPrintCol6ColMd3("lasagne-lasagne-bolognese", $image_path_array, "Lasagne Bolognese", "", "11,50 €", "");
    echo productCardPrintCol6ColMd3("lasagne-lasagne-vegetarian", $image_path_array, "Lasagne Vegetarian", "Vegetarian", "11,50 €", "");
    echo productCardPrintCol6ColMd3("lasagne-lasagne-4-kinds-of-cheese", $image_path_array, "Lasagne 4 Kinds of Cheese", "Vegetarian", "11,50 €", "");
    ?>
   
  </div>
<!-- GNOCCHI -->
<div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">TGNOCCHI</h2>
    </div>
    <?php 
    echo productCardPrintCol6ColMd3("gnocchi-salmon-gnocchi", $image_path_array, "Salmon Gnocchi", "Vegetarian", "13,00 €", "");
    echo productCardPrintCol6ColMd3("gnocchi-gnocchi-of-your-choosing", $image_path_array, "Gnocchi of Your Choosing", "", "13,00 €", "chicken, four kinds of cheese, bolognese");
    ?>
   
  </div>
<!--RICE DISHES -->
<div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">RICE DISHES</h2>
    </div>
    <?php 
    echo productCardPrintCol6ColMd3("rice-dishes-chicken-risotto", $image_path_array, "Chicken Risotto", "", "11,50 €", "");
    echo productCardPrintCol6ColMd3("rice-dishes-vegetarian-risotto", $image_path_array, "Vegetarian Risotto", "Vegetarian", "11,50 €", "");
    echo productCardPrintCol6ColMd3("rice-dishes-mussel-risotto", $image_path_array, "Mussel Risotto", "", "12,50 €", "");
    echo productCardPrintCol6ColMd3("rice-dishes-seafood-risotto", $image_path_array, "Seafood Risotto", "", "12,50 €", "");
    echo productCardPrintCol6ColMd3("rice-dishes-risotto-with-prawns", $image_path_array, "Risotto with Prawns", "", "13,50 €", "");
    echo productCardPrintCol6ColMd3("rice-dishes-black-risotto", $image_path_array, "Black Risotto", "", "13,50 €", "");
    ?>
   
  </div>
<!-- DISHES A LA CARTE -->
<div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">DISHES A LA CARTE</h2>
    </div>
    <?php 
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-mixed-grill-plate", $image_path_array, "Mixed Grill Plate", "", "19,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-beef-steak", $image_path_array, "Beef Steak", "", "29,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-rump-steak", $image_path_array, "Rump Steak", "", "24,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-chicken-in-sauce-with-mushrooms-or-cheese", $image_path_array, "Chicken in Sauce with Mushrooms or Cheese", "", "15,00€", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-chicken-steak", $image_path_array, "Chicken Steak", "", "13,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-pljeskavica", $image_path_array, "Pljeskavica", "", "13,00 €", "minced meat *Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-evap-i-i-skewers-of-your-choosing", $image_path_array, "Ćevapčići Skewers of Your Choosing", "", "13,00 €", "pork or chicken *Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-sausages", $image_path_array, "Sausages", "", "13,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-hamburger", $image_path_array, "Hamburger", "", "7,00 €", "ajvar, mayonnaise, lettuce, tomatoes *Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-cheeseburger", $image_path_array, "Cheeseburger", "", "7,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    echo productCardPrintCol6ColMd3("dishes-a-la-carte-vege-burger", $image_path_array, "Vege Burger", "Vegan, Vegetarian", "9,00 €", "*Side dishes are included in the price (fries or grilled vegetables)");
    ?>
  </div>
<!-- GARNISHINGS -->
<div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">GARNISHINGS</h2>
    </div>
    <?php 
    echo productCardPrintCol6ColMd3("garnishings-mixed-vegetables", $image_path_array, "Mixed Vegetables", "Vegan, Vegetarian", "7,00 €", "");
    echo productCardPrintCol6ColMd3("garnishings-pommes-frites", $image_path_array, "Pommes Frites", "Vegan, Vegetarian", "5,00 €", "");
    echo productCardPrintCol6ColMd3("garnishings-chard-mangold", $image_path_array, "Chard/Mangold", "Vegan, Vegetarian", "7,00 €", "");
    ?>
  </div>
<!-- FISH DISHES -->
<div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">FISH DISHES</h2>
    </div>
    <?php 
    echo productCardPrintCol6ColMd3("fish-dishes-fish-dishes", $image_path_array, "Fish Dishes", "Vegetarian", "50,00 €", "");
    echo productCardPrintCol6ColMd3("fish-dishes-tuna-steak", $image_path_array, "Tuna Steak ", "Vegetarian", "20,00 €", "");
    echo productCardPrintCol6ColMd3("fish-dishes-fish-dishes", $image_path_array, "Fish Dishes", "Vegetarian", "20,00 €", "SEA BASS OR BREAM FISH");
    echo productCardPrintCol6ColMd3("fish-dishes-squids", $image_path_array, "Squids", "Vegetarian", "19,00 €", "");
    echo productCardPrintCol6ColMd3("fish-dishes-small-fish", $image_path_array, "Small Fish", "Vegetarian", "11,00 €", "");
    echo productCardPrintCol6ColMd3("fish-dishes-fried-fish-filet", $image_path_array, "Fried Fish Filet", "Vegetarian", "14,00 €", "");
    ?>
  </div>
<!-- Pizza-->
<div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">Pizza</h2>
    </div>
    <?php 
    echo productCardPrintCol6ColMd3("pizza-mixed-pizza", $image_path_array, "Mixed Pizza ", "", "11,00 €", "tomato, cheese, ham, mushrooms");
    echo productCardPrintCol6ColMd3("pizza-pizza-margarita", $image_path_array, "Pizza Margarita", "Vegetarian", "9,50 €", "tomato, cheese, olives");
    echo productCardPrintCol6ColMd3("pizza-pzza-napolitana", $image_path_array, "Pzza Napolitana", "Vegetarian", "11,00 €", "tomato, cheese, anchovies, olives");
    echo productCardPrintCol6ColMd3("pizza-pizza-romana", $image_path_array, "Pizza Romana ", "", "11,00 €", "tomato, cheese, ham");
    echo productCardPrintCol6ColMd3("pizza-pizza-with-mushrooms", $image_path_array, "Pizza with Mushrooms", "Vegetarian", "10,50 €", "tomato, cheese, mushrooms");
    echo productCardPrintCol6ColMd3("pizza-pizza-pepperoni", $image_path_array, "Pizza Pepperoni", "", "11,00 €", "tomato, cheese, salame");
    echo productCardPrintCol6ColMd3("pizza-seafood-pizza", $image_path_array, "Seafood Pizza ", "Vegetarian", "12,50 €", "tomato, cheese, crayfish, musseles, anchovies, olives");
    echo productCardPrintCol6ColMd3("pizza-pizza-konavale", $image_path_array, "Pizza Konavale", "", "12,00 €", "tomato, cheese, bacon, egg, mushrooms");
    echo productCardPrintCol6ColMd3("pizza-pizza-kabalero", $image_path_array, "Pizza Kabalero", "", "13,00 €", "tomato, cheese, ham, smoked ham, mushrooms, olives, ruccola, cherry tomatoes");
    echo productCardPrintCol6ColMd3("pizza-pizza-vegetarian", $image_path_array, "Pizza Vegetarian", "Vegetarian", "11,50 €", "tomato, cheese, vegetables, mushrooms");
    echo productCardPrintCol6ColMd3("pizza-pizza-vegan", $image_path_array, "Pizza Vegan", "Vegan, Vegetarian", "13,00 €", "tomato, vege cheese, vegetables");
    echo productCardPrintCol6ColMd3("pizza-pizza-with-tunna", $image_path_array, "Pizza with Tunna", "", "12,00 €", "tomato, cheese, tunny, olives");
    echo productCardPrintCol6ColMd3("pizza-pizza-hawai", $image_path_array, "Pizza Hawai", "", "12,00 €", "tomato, cheese, ham, pineapple");
    echo productCardPrintCol6ColMd3("pizza-pizza-four-chees", $image_path_array, "Pizza Four Chees", "Vegetarian", "12,00 €", "tomato sauce, four kinds of cheese");
    echo productCardPrintCol6ColMd3("pizza-pizza-bolognese", $image_path_array, "Pizza Bolognese", "", "12,00 €", "tomato, cheese, sauce of minced meat");
    echo productCardPrintCol6ColMd3("pizza-pizza-mexicana", $image_path_array, "Pizza Mexicana", "", "12,00 €", "tomato, cheese, corn, ham, kulen salami, pepper, hot pepper");
    echo productCardPrintCol6ColMd3("pizza-pizza-four-seasons", $image_path_array, "Pizza Four Seasons", "", "13,00 €", "tomato, cheese, vegetables, ham, mushrooms, seafood");
    echo productCardPrintCol6ColMd3("pizza-pizza-slavonian", $image_path_array, "Pizza Slavonian", "", "12,00 €", "tomato, cheese, bacon, hot pepper, salami, sausage, corn, sour cream");
    echo productCardPrintCol6ColMd3("pizza-pizza-chicken", $image_path_array, "Pizza Chicken", "", "12,00 €", "tomato, cheese, chicken, mushrooms, corn");
    echo productCardPrintCol6ColMd3("pizza-calzone", $image_path_array, "Calzone", "", "9,00 €", "tomato, cheese, ham");
    echo productCardPrintCol6ColMd3("pizza-piro-ka", $image_path_array, "Piroška", "", "10,50 €", "tomato, cheese, ham, mushrooms, sour cream");
    echo productCardPrintCol6ColMd3("pizza-pizza-kruh", $image_path_array, "Pizza Kruh", "Vegetarian", "9,00 €", "oil, garlic");
    echo productCardPrintCol6ColMd3("pizza-gluten-free-pizza", $image_path_array, "Gluten Free Pizza ", "", "14,00 €", "");
    echo productCardPrintCol6ColMd3("pizza-jumbo-pizza", $image_path_array, "Jumbo Pizza ", "", "20,00 €", "");
    ?>
  </div>
  <!-- PIZZA-GARNISHING -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">PIZZA-GARNISHING</h2>
    </div>
    <?php
    echo productCardPrintCol6ColMd3("pizza-garnishing-olives", $image_path_array, "Olives", "", "4,00 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-egg", $image_path_array, "Egg", "", "2,50 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-kechup", $image_path_array, "Kechup", "", "2,50 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-mayonnaise", $image_path_array, "Mayonnaise", "", "2,50 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-mushrooms", $image_path_array, "Mushrooms", "", "2,50 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-cream", $image_path_array, "Cream", "", "4,00 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-sauce", $image_path_array, "Sauce", "", "5,00 €", "mushrooms or cheese or pepper");
    ?>
  </div>
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