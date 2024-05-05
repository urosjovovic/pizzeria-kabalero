<?php

$title = "Pizzeria Kabalero - Generational Restorant on the Mediteranean";
$meta_description = "Gladni ste? Poručite iz picerije Favola i dobijate dostavu do 35 minuta! Uživaćete u ukusima naših pica, tortilja, pirošaka, palačinaka i obroka.";
$meta_title = "Pizzeria Kabalero - Generational Restorant on the Mediteranean";
$og_title = "Pizzeria Kabalero - Generational Restorant on the Mediteranean";
$og_url = "https://www.pizzeria-kabalero.hr";
$og_image = "https://www.pizzeria-kabalero.hr/images/cover-w1250.webp";
$og_description = "Gladni ste? Poručite iz picerije Favola i dobijate dostavu do 35 minuta! Uživaćete u ukusima naših pica, tortilja, pirošaka, palačinaka i obroka.";
$og_image_alt = "Razna hrana";
$preload_cover_image = "";
$footer_title_html_raw = "<h1> Pizzeria Kabalero </h1>";

require 'helpers.php'; // assuming you have defined your function in helpers.php
// $image_path_array = [
//     'pice-margarita' => 'images/pice/margarita/margarita',
//     'pice-fungi' => 'images/pice/fungi/fungi',
//     'pice-vesuvio' => 'images/pice/vesuvio/vesuvio',
// ];

$image_path_array = [
'cold-appetizers-dalmatian-smoked-ham' => '',
'cold-appetizers-cheese-in-olive' => '',
'cold-appetizers-cold-platter-kabalero' => '',
'cold-appetizers-anchovies-carpaccio' => '',
'salads-seasonal-salad' => '',
'salads-salad-konavle' => '',
'salads-tuna-salad' => '',
'salads-chicken-salad' => '',
'salads-greek-salad-with-olives' => '',
'salads-octopus-salad' => '',
'soups-beef-soup' => '',
'soups-tomato-cream-soup' => '',
'soups-mushroom-soup' => '',
'soups-fish-soup' => '',
'hot-side-dishes-breaded-cheese' => '',
'hot-side-dishes-assortment-of-omelettes' => '',
'hot-side-dishes-mixed-omelette' => '',
'hot-side-dishes-bacon-and-eggs' => '',
'hot-side-dishes-warm-sandwich-of-your-choice' => '',
'hot-side-dishes-warm-sandwich' => '',
'hot-side-dishes-toast' => '',
'pasta-dishes-spaghetti-bolognase' => '',
'pasta-dishes-spaghetti-napoliten' => '',
'pasta-dishes-spaghetti-milanese' => '',
'pasta-dishes-spaghetti-carbonara' => '',
'pasta-dishes-spaghetti-with-tuna' => '',
'pasta-dishes-spaghetti-with-seafood' => '',
'pasta-dishes-gluten-free-spaghetti' => '',
'tagliatele-chicken-tagliatele' => '',
'tagliatele-tagliatele-mixed' => '',
'lasagne-lasagne-bolognese' => '',
'lasagne-lasagne-vegetarian' => '',
'lasagne-lasagne-4-kinds-of-cheese' => '',
'gnocchi-salmon-gnocchi' => '',
'gnocchi-gnocchi-of-your-choosing' => '',
'rice-dishes-chicken-risotto' => '',
'rice-dishes-vegetarian-risotto' => '',
'rice-dishes-mussel-risotto' => '',
'rice-dishes-seafood-risotto' => '',
'rice-dishes-risotto-with-prawns' => '',
'rice-dishes-black-risotto' => '',
'dishes-a-la-carte-mixed-grill-plate' => '',
'dishes-a-la-carte-beef-steak' => '',
'dishes-a-la-carte-rump-steak' => '',
'dishes-a-la-carte-chicken-in-sauce-with-mushrooms-or-cheese' => '',
'dishes-a-la-carte-chicken-steak' => '',
'dishes-a-la-carte-pljeskavica' => '',
'dishes-a-la-carte-evap-i-i-skewers-of-your-choosing' => '',
'dishes-a-la-carte-sausages' => '',
'dishes-a-la-carte-hamburger' => '',
'dishes-a-la-carte-cheeseburger' => '',
'dishes-a-la-carte-vege-burger' => '',
'garnishings-mixed-vegetables' => '',
'garnishings-pommes-frites' => '',
'garnishings-chard-mangold' => '',
'fish-dishes-fish-dishes' => '',
'fish-dishes-tuna-steak' => '',
'fish-dishes-fish-dishes' => '',
'fish-dishes-squids' => '',
'fish-dishes-small-fish' => '',
'fish-dishes-fried-fish-filet' => '',
'pizza-mixed-pizza' => '',
'pizza-pizza-margarita' => '',
'pizza-pizza-napolitana' => '',
'pizza-pizza-romana' => '',
'pizza-pizza-with-mushrooms' => '',
'pizza-pizza-pepperoni' => '',
'pizza-seafood-pizza' => '',
'pizza-pizza-konavale' => '',
'pizza-pizza-kabalero' => '',
'pizza-pizza-vegetarian' => '',
'pizza-pizza-vegan' => '',
'pizza-pizza-with-tunna' => '',
'pizza-pizza-hawai' => '',
'pizza-pizza-four-chees' => '',
'pizza-pizza-bolognese' => '',
'pizza-pizza-mexicana' => '',
'pizza-pizza-four-seasons' => '',
'pizza-pizza-slavonian' => '',
'pizza-pizza-chicken' => '',
'pizza-calzone' => '',
'pizza-piro-ka' => '',
'pizza-pizza-kruh' => '',
'pizza-gluten-free-pizza' => '',
'pizza-jumbo-pizza' => '',
'pizza-garnishing-olives' => '',
'pizza-garnishing-egg' => '',
'pizza-garnishing-kechup' => '',
'pizza-garnishing-mayonnaise' => '',
'pizza-garnishing-mushrooms' => '',
'pizza-garnishing-cream' => '',
'pizza-garnishing-sauce' => '',
'warm-beverages-coffee-espresso' => '',
'warm-beverages-capuccino' => '',
'warm-beverages-coffee-with-cream' => '',
'warm-beverages-americano-coffee' => '',
'warm-beverages-cocoa' => '',
'warm-beverages-nescafe' => '',
'warm-beverages-milk' => '',
'warm-beverages-white-coffee' => '',
'warm-beverages-ice-coffee' => '',
'warm-beverages-tea' => '',
'warm-beverages-warm-tea' => '',
'warm-beverages-warm-chocolate' => '',
'warm-beverages-coffee-without-caffeine' => '',
'nonalcoholic-drinks-coca-coka' => '',
'nonalcoholic-drinks-cockta' => '',
'nonalcoholic-drinks-tonic-water' => '',
'nonalcoholic-drinks-bitter-lemon' => '',
'nonalcoholic-drinks-fanta' => '',
'nonalcoholic-drinks-tangerina' => '',
'nonalcoholic-drinks-sprite' => '',
'nonalcoholic-drinks-orange-juice' => '',
'nonalcoholic-drinks-peach-juice' => '',
'nonalcoholic-drinks-apple-juice' => '',
'nonalcoholic-drinks-blueberry-juice' => '',
'nonalcoholic-drinks-strawberry-juice' => '',
'nonalcoholic-drinks-pear-juice' => '',
'nonalcoholic-drinks-pineapple-juice' => '',
'nonalcoholic-drinks-natural-lemonade' => '',
'nonalcoholic-drinks-orange-juice' => '',
'nonalcoholic-drinks-orangina' => '',
'nonalcoholic-drinks-cedevita' => '',
'nonalcoholic-drinks-red-bull' => '',
'nonalcoholic-drinks-mineral-water' => '',
'nonalcoholic-drinks-mineral-water' => '',
'nonalcoholic-drinks-natural-still-water' => '',
'nonalcoholic-drinks-natural-still-water' => '',
'white-wines-gra-evina-glass' => '',
'white-wines-gra-evina' => '',
'white-wines-gra-evina-bottle' => '',
'white-wines-pro-ip' => '',
'white-wines-mara-tina' => '',
'white-wines-mara-tina' => '',
'white-wines-lahtin-zlat' => '',
'white-wines-sivi-pinot' => '',
'white-wines-chardonnay' => '',
'white-wines-malvasija' => '',
'red-wines-plavac-glass' => '',
'red-wines-plavac' => '',
'red-wines-merlot' => '',
'red-wines-merlot' => '',
'red-wines-cabernet' => '',
'red-wines-zlatan-plavac' => '',
'red-wines-dinga' => '',
'red-wines-postup' => '',
'red-wines-pinot-bottle' => '',
'rose-wines-rose-glass' => '',
'rose-wines-rose-kutjevo' => '',
'rose-wines-rose-kutjevo' => '',
'rose-wines-rose-terra-madre' => '',
'rose-wines-prosecco' => '',
'rose-wines-prosecco' => '',
'rose-wines-martini-bianco-rosso' => '',
'rose-wines-somersby-cider' => '',
'rose-wines-pro-ek' => '',
'beer-draft-beer-karlova-ko' => '',
'beer-draft-beer' => '',
'beer-nonalcoholic-beer' => '',
'beer-o-ujsko-beer' => '',
'beer-karlova-ko' => '',
'beer-staropramen' => '',
'beer-leffe-dark-light' => '',
'beer-stella-artois' => '',
'beer-heineken' => '',
'beer-karlova-ko-dark' => '',
'beer-corona' => '',
'alcoholic-drinks-grape-brandy' => '',
'alcoholic-drinks-herb-brandy' => '',
'alcoholic-drinks-plum-brandy' => '',
'alcoholic-drinks-stock' => '',
'alcoholic-drinks-maraschino' => '',
'alcoholic-drinks-cherry-brandy' => '',
'alcoholic-drinks-pear-brandy' => '',
'alcoholic-drinks-apricot' => '',
'alcoholic-drinks-carolans' => '',
'alcoholic-drinks-baileys' => '',
'alcoholic-drinks-amaro' => '',
'alcoholic-drinks-istra-bitter' => '',
'alcoholic-drinks-camapri' => '',
'alcoholic-drinks-walnut-brandy' => '',
'alcoholic-drinks-pelnikovac' => '',
'alcoholic-drinks-vlahovac' => '',
'alcoholic-drinks-j-germeister' => '',
'alcoholic-drinks-brandy' => '',
'alcoholic-drinks-vodka' => '',
'alcoholic-drinks-vodka-smirnoff' => '',
'alcoholic-drinks-gin' => '',
'alcoholic-drinks-gin-gordon-s' => '',
'alcoholic-drinks-rum' => '',
'alcoholic-drinks-tequila' => '',
'alcoholic-drinks-jack-daniels' => '',
'alcoholic-drinks-ballantines' => '',
'alcoholic-drinks-johnnie-walker' => '',
'alcoholic-drinks-bacardi' => '',
'alcoholic-drinks-martell' => '',
'alcoholic-drinks-courvoisier' => '',
'alcoholic-drinks-limoncello' => '',
'cocktails-sunny-garden' => '',
'cocktails-green-island' => '',
'cocktails-mojito' => '',
'cocktails-pina-colada' => '',
'cocktails-aperol-spritz' => '',
'cocktails-cosmopolitan' => '',
'cocktails-sex-on-the-beach' => '',
'cocktails-mai-tai' => '',
'cocktails-margarita' => '',
'nonalcoholic-cocktails-refreshing-day' => '',
'nonalcoholic-cocktails-kabalero-sunrise' => '',
'desserts-ice-cream-scoup' => '',
'desserts-daily-cake' => '',
'desserts-pancakes' => '',
];

require "views/index.view.php";