<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/anagram", function() use ($app) {
        $my_Anagram = new Anagram;
        $word_list = explode(', ', $_GET['list']);
        $result = $my_Anagram->anagramCheckCompare($_GET['word'], $word_list);


        return $app['twig']->render('index.html.twig', array (
            'results'=> $result
        ));
    });

    return $app;
?>
