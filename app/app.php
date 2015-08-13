<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Calendar.php";


    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('calendar.html.twig');
    });

    $app->get('/calendar_results', function() use ($app) {
        $new = new Calendar;
        $day_of_week = $new->checkCalendar($_GET['date']);
    //    $word = $_GET['date'];
        return $app['twig']->render('calendar_results.html.twig', array('date' => $day_of_week));
    });

    return $app;

?>
