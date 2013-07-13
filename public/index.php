<?php

session_start();
require_once "../vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;


$twigView = new \Slim\Extras\Views\Twig();

$app = new Slim\Slim(array(
    'debug' => true,
    'view' => $twigView,
    'templates.path' => '../App/view/'
));


$orgao = new \Orgao();

//$result = Orgao::where('nome', 'LIKE', '%System%')->get();
/**
 * 
 */
$app->get('/', function () use($app) {
                      
            $result = Orgao::where('nome', '!=', 'null')->orderBy('id')->get();
            $app->render('/layout.html.twig', array('dado' => $result));
            $app->view()->display('/orgao/orgao.html.twig');
        });
/**
 * 
 */
$app->get('/orgao', function () use($app) {

            $app->render('/orgao/orgao.html.twig');
        });

/**
 * 
 */
$app->post('/add/save', function () use($app, $orgao) {
            $data = $app->request()->post();
            $orgao->nome = $data['nome'];
            if ($orgao->save()) {

                $app->render('/layout.html.twig');
                $app->view()->display('/orgao/orgao.html.twig');
                $app->redirect('/');
            }
        });
/**
 * chamo os formulário 
 */
$app->get('/orgao/edite/(:id)', function ($id) use($app) {
           $result = Orgao::find($id);
            $app->render('/layout.html.twig');
            $app->view()->setData(array('res'=>$result));
            $app->view()->display('/orgao/orgao.html_1.twig');
            
        });
/**
 * update orgão
 * 
 */
$app->post('/orgao/edite', function () use($app) {

            $orgao = Orgao::find($app->request()->params('id'));
            $orgao->nome = $app->request()->params('nome');

            if ($orgao->save()) {

                $app->redirect('/');
            } else {
                
            }
        });

/*
 * Delete orgão
 */
$app->get('/orgao/delete/:id', function ($id) use($app) {
            Orgao::destroy($id);
            $app->redirect('/');
        });

/**
 * responsavel
 */
   $app->get('/responsavel', function () use($app) {
            $app->render('/layout.html.twig');
            $app->view()->display('/responsavel/responsavel.html.twig');
        });     

$app->run();