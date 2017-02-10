<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    session_start();

    if(empty($_SESSION['address_book'])) {
      $_SESSION['address_book'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    $app['debug'] = true;

    $app->get("/" , function() use ($app) {
      return $app["twig"]->render("selector_page.html.twig");
    });

    $app->post("/add" , function() use ($app) {
      return $app["twig"]->render("create_contact.html.twig");
    });





    return $app;





 ?>
