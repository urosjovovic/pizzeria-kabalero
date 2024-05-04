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
    'sendvici-sendvic-pecenica' => 'images/proizvodi/sendvici/sendvic-pecenica/sendvic-pecenica',
    'sendvici-sendvic-tuna' => 'images/proizvodi/sendvici/sendvic-tuna/sendvic-tuna',
    'sendvici-sendvic-svinjski-vrat' => 'images/proizvodi/sendvici/sendvic-svinjski-vrat/sendvic-svinjski-vrat',
    'sendvici-sendvic-kulen' => 'images/proizvodi/sendvici/sendvic-kulen/sendvic-kulen',
    'sendvici-sendvic-sunka' => 'images/proizvodi/sendvici/sendvic-sunka/sendvic-sunka',
    'sendvici-sendvic-prsuta' => 'images/proizvodi/sendvici/sendvic-prsuta/sendvic-prsuta',
    'tortilje-tortilja-sunka' => 'images/proizvodi/tortilje/tortilja-sunka/tortilja-sunka',
    'tortilje-tortilja-kulen' => 'images/proizvodi/tortilje/tortilja-kulen/tortilja-kulen',
    'tortilje-pileca-tortilja' => 'images/proizvodi/tortilje/pileca-tortilja/pileca-tortilja',
    'tortilje-dimljena-piletina-tortilja' => 'images/proizvodi/tortilje/dimljena-piletina-tortilja/dimljena-piletina-tortilja',
    'tortilje-tortilja-pecenica' => 'images/proizvodi/tortilje/tortilja-pecenica/tortilja-pecenica',
    'tortilje-tortilja-prsuta' => 'images/proizvodi/tortilje/tortilja-prsuta/tortilja-prsuta',
    'slatke-palacinke-dzem' => 'images/proizvodi/slatke-palacinke/dzem/dzem',
    'slatke-palacinke-milka' => 'images/proizvodi/slatke-palacinke/milka/milka',
    'slatke-palacinke-baunti' => 'images/proizvodi/slatke-palacinke/baunti/baunti',
    'slatke-palacinke-snikers' => 'images/proizvodi/slatke-palacinke/snikers/snikers',
    'slatke-palacinke-oreo' => 'images/proizvodi/slatke-palacinke/oreo/oreo',
    'slatke-palacinke-kinder' => 'images/proizvodi/slatke-palacinke/kinder/kinder',
    'slatke-palacinke-eurokrem' => 'images/proizvodi/slatke-palacinke/eurokrem/eurokrem',
    'slatke-palacinke-mars' => 'images/proizvodi/slatke-palacinke/mars/mars',
    'slatke-palacinke-secer' => 'images/proizvodi/slatke-palacinke/secer/secer',
    'slatke-palacinke-nutela' => 'images/proizvodi/slatke-palacinke/nutela/nutela',
    'slatke-palacinke-med' => 'images/proizvodi/slatke-palacinke/med/med',
    'pica-ultra' => 'images/proizvodi/pica/ultra/ultra',
    'pica-coca-cola' => 'images/proizvodi/pica/coca-cola/coca-cola',
    'pica-cola-zero' => 'images/proizvodi/pica/cola-zero/cola-zero',
    'pica-fanta' => 'images/proizvodi/pica/fanta/fanta',
    'pica-rosa' => 'images/proizvodi/pica/rosa/rosa',
    'obroci-pileci-stapici-obrok' => 'images/proizvodi/obroci/pileci-stapici-obrok/pileci-stapici-obrok',
    'obroci-pohovani-kackavalj-obrok' => 'images/proizvodi/obroci/pohovani-kackavalj-obrok/pohovani-kackavalj-obrok',
    'prilozi-pomfrit' => 'images/proizvodi/prilozi/pomfrit/pomfrit',
    'slane-palacinke-palacinka-pecenica' => 'images/proizvodi/slane-palacinke/palacinka-pecenica/palacinka-pecenica',
    'slane-palacinke-palacinka-sunka' => 'images/proizvodi/slane-palacinke/palacinka-sunka/palacinka-sunka',
    'slane-palacinke-palacinka-kulen' => 'images/proizvodi/slane-palacinke/palacinka-kulen/palacinka-kulen',
    'pice-bbq-pizza' => 'images/proizvodi/pice/bbq-pizza/bbq-pizza',
    'pice-capricciosa' => 'images/proizvodi/pice/capricciosa/capricciosa',
    'pice-vegetarijana' => 'images/proizvodi/pice/vegetarijana/vegetarijana',
    'pice-tuna' => 'images/proizvodi/pice/tuna/tuna',
    'pice-peperoni' => 'images/proizvodi/pice/peperoni/peperoni',
    'pice-pikanta' => 'images/proizvodi/pice/pikanta/pikanta',
    'pice-quattro-formaggi' => 'images/proizvodi/pice/quattro-formaggi/quattro-formaggi',
    'pice-margarita' => 'images/proizvodi/pice/margarita/margarita',
    'pice-favola' => 'images/proizvodi/pice/favola/favola',
    'pice-vesuvio' => 'images/proizvodi/pice/vesuvio/vesuvio',
    'pice-fungi' => 'images/proizvodi/pice/fungi/fungi',
    'pice-prsuta' => 'images/proizvodi/pice/prsuta/prsuta',
    'pice-srbijana' => 'images/proizvodi/pice/srbijana/srbijana',
    'piroske-piroska-zlatiborska' => 'images/proizvodi/piroske/piroska-zlatiborska/piroska-zlatiborska',
    'piroske-piroska-italijanska' => 'images/proizvodi/piroske/piroska-italijanska/piroska-italijanska',
    'pica-ultra' => 'images/proizvodi/pica/ultra/ultra',
    'pica-coca-cola' => 'images/proizvodi/pica/coca-cola/coca-cola',
    'pica-cola-zero' => 'images/proizvodi/pica/cola-zero/cola-zero',
    'pica-fanta' => 'images/proizvodi/pica/fanta/fanta',
    'pica-rosa' => 'images/proizvodi/pica/rosa/rosa',
];

require "views/index.view.php";