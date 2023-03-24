<?php

/**
 * @category controllers
 * @author kingston-5 <qhawe@kingston-enterprises.net>
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace kingstonenterprises\app\controllers;

use kingston\icarus\Application;
use kingston\icarus\Controller;
use kingston\icarus\Request;
use kingston\icarus\helpers\Collection;

use kingstonenterprises\app\models\User;
use kingstonenterprises\app\models\Visitor;

/**
 * controls the the sites dashboard views
 *
 * @extends \kingston\icarus\Controller
 */
class DashboardController extends Controller
{

    /**
     * collect stats and render dashboard
     * 
     * @return string
     */
    public function index()
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

        return $this->render('dashboard/index', [
            'title' => 'Dashboard',
            'visitors' => $visitors->count(),
            'user' => $user

        ]);
    }

    /**
     * render user update profile page Or if user submitted form, check 
     * if user details are valid and update user details
     *
     * @param Request $request
     * @return string
     */
    public function updateProfile(Request $request)
    {
        if (Application::isGuest()) {
            Application::$app->session->setFlash('warning', 'You need To Login first');
            Application::$app->response->redirect('/auth/login');
        }

        $user = new User;
        $user = $user->findOne(['id' => Application::$app->session->get('user')]);

        if ($request->getMethod() === 'post') {
            $user->loadData($request->getBody());
            $user->password = password_hash($user->password, PASSWORD_DEFAULT);

            if ($user->validate() && $user->update($user->id)) {
                Application::$app->session->setFlash('success', 'Your Details have Been Updated');
                Application::$app->response->redirect('/dashboard');
                return 'Show success page';
            } else {
                echo "val failed";
            }
        }

        return $this->render('dashboard/updateProfile', [
            'title' => 'Update Profile',
            'user' => $user,
            'model' => new User
        ]);
    }
}
