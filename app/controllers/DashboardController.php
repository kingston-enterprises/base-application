<?php
/** created by : kingston-5 @ 17/01/23 **/

namespace kingstonenterprises\app\controllers;

use kingston\icarus\Application;
use kingston\icarus\Controller;
use kingston\icarus\Request;
use kingston\icarus\helpers\Collection;

use kingstonenterprises\app\models\User;
use kingstonenterprises\app\models\Visitor;


/** @class DashboardController: controls the the sites dashboard views
 * @no-named-arguments
 */
class DashboardController extends Controller
{
    public function index(Request $request)
    {

        if (Application::isGuest()) {
            Application::$app->session->setFlash('warning', 'You need To Login first');
            Application::$app->response->redirect('/auth/login');
        }

        $visitorModel = new Visitor;
        $userModel = new User;

        $visitors = new Collection($visitorModel->getAll());


        $user = $userModel->findOne(['id' => Application::$app->session->get('user')]);
        $user->joined = date_create($user->joined)->format("D M j Y");
// var_dump($user);exit();
    	// $this->setlayout('auth');
        return $this->render('dashboard/index', [
                'title' => 'Dashboard',
            'visitors' => $visitors->count(),
                'user' => $user
        
        ]);

    }
}
