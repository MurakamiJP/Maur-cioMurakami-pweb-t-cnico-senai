<?php
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
return function (App $app) {
    $container = $app->getContainer();
    $app->get('/lista/', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");
        $conexao = $container->get('pdo');
        $session = $conexao->query('SELECT * FROM carro')->fetchAll();
        $args['carro'] = $session;
 
        foreach ($session as $key => $session) {
            
            echo "{$key} => {$session} ";
            print_r($session);
        }
        // Render index view
        return $container->get('renderer')->render($response, 'index3.phtml', $args);
    });
};