<?php
/** 
 * @author kingston-5 <qhawe@kingston-enterprises.net>
 * @package icarus
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use kingston\icarus\Application;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__  . '. /../');

$dotenv->load();

$config = [
    // 'userClass' => \kingstonenterprises\models\User::class, @deprecated v17.05.23
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
    'migrations' => '/../migrations/' // new in v17.05.22 f
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();
