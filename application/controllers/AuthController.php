<?php
/** created by : kingston-5 @ 17/01/23 **/

namespace kingstonenterprises\application\controllers;

use kingstonenterprises\core\Application;
use kingstonenterprises\core\Controller;
use kingstonenterprises\core\Request;
use kingstonenterprises\core\Response;

use kingstonenterprises\application\models\User;
use kingstonenterprises\application\models\LoginForm;

/** AuthController class
* controls the the sites authorisation functions
*/
class AuthController extends Controller
{
	//if user details are valid login user
    public function login(Request $request)
    {
        $loginForm = new LoginForm();
        $user = new User();
        
        if ($request->getMethod() === 'post') {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
            	$user = $user->findOne(['email' => $request->getBody()['email']]); 
            	
                Application::$app->session->setFlash('success', 'Welcome ' . $user->getDisplayName());
                Application::$app->response->redirect('/dashboard');
                return;
            }
        }
        
        return $this->render('auth/login', [
        	'title' => 'Login',
            'model' => $loginForm
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

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
	}


}
