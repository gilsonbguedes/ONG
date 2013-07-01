<?php

require_once "../vendor/autoload.php";
require_once '../App/config/config.php';
require_once '../App/controller/OrgaoController.php';

//$OrgaoController = new OrgaoController();
//$orgao = new Orgao();

$twigView = new \Slim\Extras\Views\Twig();

$app = new Slim\Slim(array(
    'debug' => true,
    'view' => $twigView,
    'templates.path' => '../App/view/',
        ));
/**
 * Routers
 */
$app->get('/gilson/:nome', function ($name) use($app) {
            echo $name;
            $result = OrgaoController::getAll();
            $title = 'sistema';
            $res = OrgaoController::getByName('conselho tutelar');
           
            $app->view()->display('/orgao/orgao.html.twig');
            //$app->view()->display('/orgao/orgao.html.twig');
            
            //$app->render("fs.html.twig");
            $app->render("fs.html.twig",array('dado'=>$result,'filtro'=>$res));
//            $orgao = new \Orgao();
//            $orgao->nome = 'Febem';
//            $orgao->save();
        });

$app->get('/hello/:name', function ($name) use ($app) {
            echo "Hello, $name!";
            $app->render('login.html.twig');
        });

$app->run();