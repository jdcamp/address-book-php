<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    session_start();

    if(empty($_SESSION['list_of_contacts'])) {
      $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    $app['debug'] = true;

    $app->get("/" , function() use ($app) {
      return $app["twig"]->render("address_book.html.twig" ,array("view_address_book" => Contact::getAll()));
    });

    $app->post("/add" , function() use ($app) {
      return $app["twig"]->render("create_contact.html.twig");
    });

    $app->post("/delete" , function() use ($app) {
      Contact::clearAddressBook();
      return $app["twig"]->render("delete_contacts.html.twig" , array("view_address_book" => Contact::getAll()));
    });

    $app->post("/add_contact" , function() use ($app) {
      $new_contact = new Contact($_POST['first-name'], $_POST['last-name'], $_POST['address'], $_POST['phone-number'], $_POST['image']);
      $new_contact->save();
      return $app["twig"]->render("save_confirmation.html.twig", array("save_contact" => $new_contact));
    });

    return $app;

 ?>
