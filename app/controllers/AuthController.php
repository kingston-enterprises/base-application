<?php
/** created by : kingston-5 @ 17/01/23 **/

namespace kingstonenterprises\app\controllers;

use kingston\icarus\Application;
use kingston\icarus\Controller;
use kingston\icarus\Request;
use kingston\icarus\Response;

use kingstonenterprises\app\models\User;
use kingstonenterprises\app\models\LoginForm;

/** AuthController class
* controls the the sites authorisation functions
*/
class AuthController extends Controller
{
	//if user details are valid login user
    public function login(Request $request)
    {
        $user = new User();
        
        if ($request->getMethod() === 'post') {
            $user->loadData($request->getBody());
            
            if ($user->login()) {
            	$user = $user->findOne(['email' => $request->getBody()['email']]); 

            	Application::$app->session->set('user', $user->id);
                Application::$app->session->setFlash('success', 'Welcome ' . $user->getDisplayName());
                return $this->render('dashboard/index', [
                    'title' => 'dasboard'
                ]);
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

    public function logout(Request $request, Response $response)
    {
        Application::$app->session->remove('user');
    
        Application::$app->$response->redirect('/');
    }
	


}
