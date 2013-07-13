<?php
use Illuminate\Database\Capsule\Manager as Capsule;
//use Illuminate\Database\Migrations\Migration;
$capsule = new Capsule;
$capsule->addConnection(array(
    'driver' => 'pgsql',
    'host' => 'localhost',
    'database' => 'ajax',
    'username' => 'postgres',
    'password' => 'senha',
    'prefix' => '',
    'charset' => 'utf8',
    //'collation' => 'utf8_general_ci',
    'schema'   => 'public',

));

$capsule->bootEloquent();
$capsule->setAsGlobal();
//$res = Capsule::table('orgao')->get();
//var_dump($res);

//Capsule::schema()->create('orgao', function($table)
//{
//    $table->increments('id');
//    $table->string('nome')->unique;
//
//});


//class Test extends Migration{
//   
//
//     public function up() 
//        {
//          //$capsule = new Capsule;
//                Capsule::schema()->create('user', function($t) {
//                        $t->increments('id');
//                        $t->string('username', 16)->unique();
//                        $t->string('password', 64);
//                        $t->integer('role_id')->unsigned();
//                        $t->timestamps();
//                });
//        }
//
//}
//$ts = new Test();
//$ts->up();