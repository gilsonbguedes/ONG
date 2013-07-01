<?php



//$cfg = ActiveRecord\Config::instance();
//$cfg->set_model_directory("../App/model");
//$cfg->set_connections(array('development' =>
//    'mysql://root:@localhost/ong'));
//
//$smarty = new Smarty();
//
//$smarty->template_dir = "../App/view/";
//$smarty->compile_dir = '../templates_c/';
//$smarty->config_dir = "../configs/";
//$smarty->cache_dir = "../cache/";
//$smarty->caching = false;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection(array(
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'ajax',
    'username' => 'root',
    'password' => '',
    'prefix' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
));
$capsule->bootEloquent();
$capsule->setAsGlobal();