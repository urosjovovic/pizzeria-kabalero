<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
     '/' => 'controllers/index.controller.php',
     '/privacy-policy' => 'controllers/politika-privatnosti.controller.php',
     '/terms-and-conditions' => 'controllers/uvjeti-koristenja.controller.php',
    //  '/poruci-online' => 'controllers/online-order.controller.php',
     '/robots.txt'=> 'robots.txt',
     '/sitemap.xml'=> 'sitemap.xml'
    //  '/obavestenje-o-privatnosti-online-porudzbine' => 'controllers/obavestenje-o-privatnosti-online-porudzbine.controller.php',
    //  '/uvjeti-koristenja-online-porudzbine' => 'controllers/uvjeti-koristenja-online-porudzbine.controller.php'
];

function routeToController($uri, $routes) {
     if (array_key_exists($uri, $routes)) {
         require $routes[$uri];
     } else{
         abort ();
     }
    }

function abort($code = 404) {
    http_response_code($code);
    require "views/{code}.php";
    die();
}

routeToController($uri, $routes);