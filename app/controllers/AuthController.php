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

use kingstonenterprises\app\models\User;

/**
 * controls the the sites user authorisation functions e.g login, registration and logout
 *
 * @extends \kingston\icarus\Controller
 */
class AuthController extends Controller
{
    /**
     * render user login page Or if user submitted login form, check 
     * if user details are valid and login user
     *
     * @param Request $request
     * @return string|void
     */
    public function login(Request $request)
    {
        $user = new User();
        
        if ($request->getMethod() === 'post') {
            $user->loadData($request->getBody());
            
            if ($user->login()) {
            	$user = $user->findOne(['email' => $request->getBody()['email']]); 

            	Application::$app->session->set('user', $user->id);
                Application::$app->session->setFlash('success', 'Welcome ' . $user->getDisplayName());
                Application::$app->response->redirect('/dashboard');

            }
        }
        
        return $this->render('auth/login', [
        	'title' => 'Login',
            'model' => $user
        ]);
        
    }

	//if user entered valid details dave them in the Database
    public function register(Request $request)
    {
    	
        $registerModel = new User();
        if ($request->getMethod() === 'post') {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/auth/login');
                return 'Show success page';
            }

        }
        
        return $this->render('auth/register', [
        	'title' => 'Register',
            'model' => $registerModel
        ]);
    }

    public function logout()
    {
        Application::$app->session->remove('user');
    
        Application::$app->response->redirect('/');
        
    }
	


}
