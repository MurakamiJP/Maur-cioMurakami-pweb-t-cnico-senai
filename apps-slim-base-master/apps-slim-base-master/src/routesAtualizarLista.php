<?php
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
return function (App $app) {
  $container = $app->getContainer();
  $app->get('/atualizar/', function (Request $request, Response $response, array $args) use ($container) {
    // Sample log message
    $container->get('logger')->info("Slim-Skeleton '/' route");
    // Render index view
    return $container->get('renderer')->render($response, 'index4.phtml', $args);
  });
  $app->post('/atualizar/', function (Request $request, Response $response, array $args) use ($container) {
    // Sample log message
    $container->get('logger')->info("Slim-Skeleton '/' route");
    $params = $request->getParsedBody();
    $nome = $params['modelo'];
    $email = $params['marca'];
    $senha = $params['ano'];
    $id_carro = $params['id'];
    $conexao = $container->get('pdo');

        
       
       return $container->get('renderer')->render($response, 'index4.phtml', $args);
  });
  
};