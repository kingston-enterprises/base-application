<?php
/** 
 * This file is the root file for the application
 *
 * @author kingston-5 <qhawe@kingston-enterprises.net>
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use kingstonenterprises\app\controllers\SiteController;
use kingstonenterprises\app\controllers\AuthController;
use kingstonenterprises\app\controllers\DashboardController;
use kingstonenterprises\app\models\Visitor;

use kingston\icarus\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->on(Application::EVENT_BEFORE_REQUEST, function () {
    $visitor = new Visitor();

    if (!$visitor->findOne(['ip' => $visitor->ip])) {
        $visitor->ip = $visitor->ip;
        $visitor->save();
    }

    $visitor = $visitor->findOne(['ip' => $visitor->ip]);
    Application::$app->session->set('visitorId', $visitor->id);
});


$app->triggerEvent(Application::EVENT_AFTER_REQUEST);
// URL structure : /controller/method/{params}

// Site controller
$app->router->get('/', [SiteController::class, 'home']);
$app->router->post('/', [SiteController::class, 'home']);

// Auth controller
$app->router->get('/auth/register', [AuthController::class, 'register']);
$app->router->post('/auth/register', [AuthController::class, 'register']);
$app->router->get('/auth/login', [AuthController::class, 'login']);
$app->router->post('/auth/login', [AuthController::class, 'login']);
$app->router->get('/auth/logout', [AuthController::class, 'logout']);


// Dashboard controller
$app->router->get('/dashboard', [DashboardController::class, 'index']);
$app->router->get('/update/profile', [DashboardController::class, 'updateProfile']);
$app->router->post('/update/profile', [DashboardController::class, 'updateProfile']);
$app->run();
