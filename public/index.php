<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

$routes = array(
    "/" => "/html/index",
    "/contact" => "contact",
    "/crew-search" => "crew-search",
    "/dashboard" => "dashboard",
    "/documentation" => "documentation",
    "/entry-list" => "entry-list",
    "/gallery" => "gallery",
    "/links" => "links",
    "/login" => "login",
    "/media" => "media",
    "/results" => "results",
    "/schedule" => "schedule",
    "/sponsors" => "sponsors"
);

if (isset($routes[$request_uri[0]])) {
    require '../app' . $routes[$request_uri[0]] . '.php';
} else {
    //   header('HTTP/1.0 404 Not Found');
    //   require '../app/view/404.php';
}
