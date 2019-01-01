<?php include "functions.php"?>
<?php
    
$routes = [
    
  "GET" => [
      "/amplitudo/invictus/" => 'renderHome',
      "/amplitudo/invictus/index.php" => 'renderHome',
      "/amplitudo/invictus/index.php/services" => "renderServices",
      "/amplitudo/invictus/index.php/they_say_about_us" => "theySayAboutUs",
      "/amplitudo/invictus/index.php/clients" => "clients",
      '/amplitudo/invictus/index.php/contact' => "contact",
      '/amplitudo/invictus/index.php/login' => "renderLogin"
      
  ],
    "POST" => [
      "/register" => 'registerUser'  
    ],
    
];
    
    $visited_route = $_SERVER["REQUEST_URI"];
    $request_method = $_SERVER["REQUEST_METHOD"];
    $match = $routes[$request_method][$visited_route];

    if($match){
        $match();
    } else {
        echo "404 not found";
    }




?>