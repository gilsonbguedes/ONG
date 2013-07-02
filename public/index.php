<?php

require_once "../vendor/autoload.php";
require_once '../App/config/config.php';
require_once '../App/controller/OrgaoController.php';

$OrgaoController = new \OrgaoController();
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
$app->get('/', function () use($app) {

            $result = OrgaoController::getAll();
            $title = 'sistema';
            $res = OrgaoController::getByName('conselho tutelar');

            $app->view()->display('/orgao/orgao.html.twig');
            //$app->view()->display('/orgao/orgao.html.twig');
            //$app->render("fs.html.twig");
            $app->render("layout.html.twig", array('dado' => $result, 'filtro' => $res));
//            $orgao = new \Orgao();
//            $orgao->nome = 'Febem';
//            $orgao->save();
        });

$app->get('/persiste','crete' );
function crete() {
       $orgao = new \Orgao();
            $orgao->nome = 'Febem2';
            $orgao->save();
}

$app->get('/hello/:name', function ($name) use ($app) {
            echo "Hello, $name!";
            $app->render('login.html.twig');
        });

$app->run();