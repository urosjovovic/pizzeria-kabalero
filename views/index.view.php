<?php

require 'views/partials/head.php';
require 'views/partials/header.php';
?>
<!-- // Page content start -->
<div class="container-fluid g-0 hero-image" id="cover">
  <img srcset="images/cover/cover-w600.webp 600w,
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
images/cover/cover-w3200.webp 3200w" sizes="100vw" alt="Slika">
  <a href="/poruci-online">
    <button class="hero-image-button btn-lg">Poruči onlajn</button>
  </a>
</div>
<div class="container meni">
  <!-- Pice -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="pice">
    <div class="my-3">
      <h2 class="h1">COLD APPETIZERS</h2>
    </div> <?php echo productCardPrintCol6ColMd3("cold-appetizers-dalmatian-smoked-ham", $image_path_array, "Dalmatian Smoked Ham", "", "15,00 €", "");
    echo productCardPrintCol6ColMd3("cold-appetizers-cheese-in-olive", $image_path_array, "Cheese in Olive", "Vegetarian", "13,00 €", "");
    echo productCardPrintCol6ColMd3("cold-appetizers-cold-platter-kabalero", $image_path_array, "Cold Platter Kabalero", "", "14,00 €", "ham, cheese, anchovies, olives");
    echo productCardPrintCol6ColMd3("cold-appetizers-anchovies-carpaccio", $image_path_array, "Anchovies Carpaccio", "", "13,00 €", "");
 
    ?>
  </div>
  <!-- SALADS -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">SALADS</h2>
    </div> <?php
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
    </div> <?php
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
    </div> <?php 
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
    </div> <?php 
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
    </div> <?php 
    echo productCardPrintCol6ColMd3("tagliatele-chicken-tagliatele", $image_path_array, "Chicken Tagliatele", "", "12,00 €", "chicken, zucchini, cream, red pepper");
    echo productCardPrintCol6ColMd3("tagliatele-tagliatele-mixed", $image_path_array, "Tagliatele Mixed", "", "13,00 €", "chicken, salmon, shrimp, cream");
    ?>
  </div>
  <!-- LASAGNE -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">LASAGNE</h2>
    </div> <?php 
    echo productCardPrintCol6ColMd3("lasagne-lasagne-bolognese", $image_path_array, "Lasagne Bolognese", "", "11,50 €", "");
    echo productCardPrintCol6ColMd3("lasagne-lasagne-vegetarian", $image_path_array, "Lasagne Vegetarian", "Vegetarian", "11,50 €", "");
    echo productCardPrintCol6ColMd3("lasagne-lasagne-4-kinds-of-cheese", $image_path_array, "Lasagne 4 Kinds of Cheese", "Vegetarian", "11,50 €", "");
    ?>
  </div>
  <!-- GNOCCHI -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">TGNOCCHI</h2>
    </div> <?php 
    echo productCardPrintCol6ColMd3("gnocchi-salmon-gnocchi", $image_path_array, "Salmon Gnocchi", "Vegetarian", "13,00 €", "");
    echo productCardPrintCol6ColMd3("gnocchi-gnocchi-of-your-choosing", $image_path_array, "Gnocchi of Your Choosing", "", "13,00 €", "chicken, four kinds of cheese, bolognese");
    ?>
  </div>
  <!--RICE DISHES -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">RICE DISHES</h2>
    </div> <?php 
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
    </div> <?php 
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
    </div> <?php 
    echo productCardPrintCol6ColMd3("garnishings-mixed-vegetables", $image_path_array, "Mixed Vegetables", "Vegan, Vegetarian", "7,00 €", "");
    echo productCardPrintCol6ColMd3("garnishings-pommes-frites", $image_path_array, "Pommes Frites", "Vegan, Vegetarian", "5,00 €", "");
    echo productCardPrintCol6ColMd3("garnishings-chard-mangold", $image_path_array, "Chard/Mangold", "Vegan, Vegetarian", "7,00 €", "");
    ?>
  </div>
  <!-- FISH DISHES -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3">
      <h2 class="h1">FISH DISHES</h2>
    </div> <?php 
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
    </div> <?php 
    echo productCardPrintCol6ColMd3("pizza-mixed-pizza", $image_path_array, "Mixed Pizza ", "", "11,00 €", "tomato, cheese, ham, mushrooms");
    echo productCardPrintCol6ColMd3("pizza-pizza-margarita", $image_path_array, "Pizza Margarita", "Vegetarian", "9,50 €", "tomato, cheese, olives");
    echo productCardPrintCol6ColMd3("pizza-pizza-napolitana", $image_path_array, "Pizza Napolitana", "Vegetarian", "11,00 €", "tomato, cheese, anchovies, olives");
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
    </div> <?php
    echo productCardPrintCol6ColMd3("pizza-garnishing-olives", $image_path_array, "Olives", "", "4,00 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-egg", $image_path_array, "Egg", "", "2,50 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-kechup", $image_path_array, "Kechup", "", "2,50 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-mayonnaise", $image_path_array, "Mayonnaise", "", "2,50 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-mushrooms", $image_path_array, "Mushrooms", "", "2,50 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-cream", $image_path_array, "Cream", "", "4,00 €", "");
    echo productCardPrintCol6ColMd3("pizza-garnishing-sauce", $image_path_array, "Sauce", "", "5,00 €", "mushrooms or cheese or pepper");
    ?>
  </div>
  <!-- Pica-Warm Beverages -->
  <div class="row" id="karta-pica" data-masonry='{"percentPosition": true }'>
    <div class="karta-pica col-12 col-md-6 justify-content-center">
      <div class="my-3 text-center">
        <h2 class="h1">Warm Beverages</h2>
      </div>
      <div class="karta-pica-items">
        <table class="table-striped table">
          <tbody>
            <tr>
              <td>Coffee Espresso</td>
              <td>Cup</td>
              <td>2,00 €</td>
            </tr>
            <tr>
              <td>Capuccino</td>
              <td>Cup</td>
              <td>3,00 €</td>
            </tr>
            <tr>
              <td>Coffee with Cream</td>
              <td>Cup</td>
              <td>3,00 €</td>
            </tr>
            <tr>
              <td>Americano Coffee</td>
              <td>Cup</td>
              <td>3,00 €</td>
            </tr>
            <tr>
              <td>Cocoa</td>
              <td>Cup</td>
              <td>3,00 €</td>
            </tr>
            <tr>
              <td>Nescafe</td>
              <td>Cup</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Milk</td>
              <td>0,2L</td>
              <td>3,00 €</td>
            </tr>
            <tr>
              <td>White Coffee</td>
              <td>Cup</td>
              <td>2,50 €</td>
            </tr>
            <tr>
              <td>Ice Coffee</td>
              <td>Cup</td>
              <td>5,50 €</td>
            </tr>
            <tr>
              <td>Tea </td>
              <td>Cup</td>
              <td>2,50 €</td>
            </tr>
            <tr>
              <td>Warm Tea</td>
              <td>0,25L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Warm Chocolate</td>
              <td>Cup</td>
              <td>4,50 €</td>
            </tr>
            <tr>
              <td> Coffee without Caffeine</td>
              <td>Cup</td>
              <td>2,50 €</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Pica-Nonalcoholic drinks -->
    <div class="karta-pica col-12 col-md-6 justify-content-center">
      <div class="my-3 text-center">
        <h2 class="h1">Nonalcoholic drinks</h2>
      </div>
      <div class="karta-pica-items">
        <table class="table-striped table">
          <tbody>
            <tr>
              <td>Coca Coka</td>
              <td>0,25 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Cockta</td>
              <td>0,25 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Tonic Water</td>
              <td>0,25 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Bitter Lemon</td>
              <td>0,25 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Fanta</td>
              <td>0,25 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Tangerina</td>
              <td>0,25 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Sprite</td>
              <td>0,25 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Orange Juice</td>
              <td>0,20 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Peach Juice</td>
              <td>0,20 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Apple Juice</td>
              <td>0,20 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Blueberry Juice</td>
              <td>0,20L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Strawberry Juice</td>
              <td>0,20 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Pear Juice</td>
              <td>0,20 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Pineapple Juice</td>
              <td>0,20 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Natural Lemonade</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Orange Juice</td>
              <td>0,20 L</td>
              <td>5,50 €</td>
            </tr>
            <tr>
              <td>Orangina</td>
              <td>0,25L</td>
              <td>5,50 €</td>
            </tr>
            <tr>
              <td>Cedevita</td>
              <td>0,20 L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Red Bull</td>
              <td>0,25 L</td>
              <td>6,00 €</td>
            </tr>
            <tr>
              <td>Mineral Water</td>
              <td>1,00 L</td>
              <td>5,00 €</td>
            </tr>
            <tr>
              <td>Mineral Water</td>
              <td>0,20L</td>
              <td>3,0 €</td>
            </tr>
            <tr>
              <td>Natural Still Water</td>
              <td>0,75 L</td>
              <td>5,00 €</td>
            </tr>
            <tr>
              <td>Natural Still Water</td>
              <td>0,20 L</td>
              <td>3,00 €</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="karta-pica col-12 col-md-6 justify-content-center">
      <div class="my-3 text-center">
        <h2 class="h1">Warm Beverages</h2>
      </div>
      <div class="karta-pica-items">
        <table class="table-striped table">
          <tbody>
            <tr>
              <td>Coffee Espresso</td>
              <td>Cup</td>
              <td>2,00 €</td>
            </tr>
            <tr>
              <td>Capuccino</td>
              <td>Cup</td>
              <td>3,00 €</td>
            </tr>
            <tr>
              <td>Coffee with Cream</td>
              <td>Cup</td>
              <td>3,00 €</td>
            </tr>
            <tr>
              <td>Americano Coffee</td>
              <td>Cup</td>
              <td>3,00 €</td>
            </tr>
            <tr>
              <td>Cocoa</td>
              <td>Cup</td>
              <td>3,00 €</td>
            </tr>
            <tr>
              <td>Nescafe</td>
              <td>Cup</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Milk</td>
              <td>0,2L</td>
              <td>3,00 €</td>
            </tr>
            <tr>
              <td>White Coffee</td>
              <td>Cup</td>
              <td>2,50 €</td>
            </tr>
            <tr>
              <td>Ice Coffee</td>
              <td>Cup</td>
              <td>5,50 €</td>
            </tr>
            <tr>
              <td>Tea </td>
              <td>Cup</td>
              <td>2,50 €</td>
            </tr>
            <tr>
              <td>Warm Tea</td>
              <td>0,25L</td>
              <td>3,50 €</td>
            </tr>
            <tr>
              <td>Warm Chocolate</td>
              <td>Cup</td>
              <td>4,50 €</td>
            </tr>
            <tr>
              <td> Coffee without Caffeine</td>
              <td>Cup</td>
              <td>2,50 €</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- My Maps test -->
  
</div>
  <div class="zone container-fluid p-0" id="zone">
  <div class="my-3 text-center">
    <h2 class="h1">Location</h2>
  </div>
  <div class="text-center mb-2 address">
    <a href="https://maps.app.goo.gl/oBfNNK2wroz3GdESA" target="_blank">
      <h3>
        <i class="fa-solid fa-location-dot me-3" style="color: #f00;"></i>Address: 14 Put Tihe, Cavtat
      </h3>
    </a>
    <a href="https://www.google.com/maps/dir//pizzeria+kabalero/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x134c0d28da64fed9:0xcfae2f1cb32c9c25?sa=X&ved=1t:3061&ictx=111" target="_blank">
      <h3>
        <i class="fa-solid fa-diamond-turn-right me-3" style="color: #4285f4;"></i>Get Directions
      </h3>
    </a>
  </div>
  <div class="w-100 text-center text-muted mb-2 p-2">A few minutes drive from the airport!</div>
  <!-- My Maps Test -->
  <iframe
  id="map-canvas"
  frameborder="0" style="border:0"
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyBF6CUnKIF3KmZQSBcLLAT0hhKIN5hhPuc&origin=Cavtat+Croatia
  &destination=place_id:ChIJ2f5k2igNTBMRJZwssxwvrs8&mode=walking&zoom=15&center=42.5817374,18.2222612"
  allowfullscreen>
</iframe>
</div>

</div>
<!-- Page content end --> <?php
require 'views/partials/footer.php';
?>