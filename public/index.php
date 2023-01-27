<?php

use kingstonenterprises\app\controllers\SiteController;
use kingstonenterprises\app\controllers\AuthController;
use kingstonenterprises\app\controllers\DashboardController;

use kingstonenterprises\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass' => \kingstonenterprises\models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->on(Application::EVENT_BEFORE_REQUEST, function(){
    // echo "Before request from second installation";
});

// URL structure : /controller/method/{params}

// Site controller
$app->router->get('/', [SiteController::class, 'home']);
$app->router->post('/', [SiteController::class, 'home']);

// Auth controller
//$app->router->get('/auth/register', [AuthController::class, 'register']);
//$app->router->post('/auth/register', [AuthController::class, 'register']);
$app->router->get('/auth/login', [AuthController::class, 'login']);
$app->router->post('/auth/login', [AuthController::class, 'login']);
$app->router->get('/auth/logout', [AuthController::class, 'logout']);


// Auth controller
$app->router->get('/dashboard', [DashboardController::class, 'index']);
$app->run();

?>
