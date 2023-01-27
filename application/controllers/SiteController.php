<?php
/** created by : kingston-5 @ 7/01/23 **/ 

namespace kingstonenterprises\application\controllers;

use kingstonenterprises\core\Application;
use kingstonenterprises\core\Controller;
use kingstonenterprises\core\Request;
use kingstonenterprises\core\Response;

use kingstonenterprises\models\Visitor;
use kingstonenterprises\application\models\Message;


/** SiteController class
* controls the sites functions that do not require special 
* access or permissions
*/
class SiteController extends Controller
{

    public function home(Request $request)
    {
    	$message = new Message();

    	if ($request->getMethod() === 'post') {
    		$message->loadData($request->getBody());
    		$message->visitor_id = Application::$app->visitor->id;
    		
    		if ($message->validate() && $message->save()) {
                Application::$app->session->setFlash('success', 'Message Sent Succesfully');
                Application::$app->response->redirect('/');
                return 'Show success page';
            } 
        }

        return $this->render('home', [
        	"title" => 'Kingston-Enterprises'
        ]);
    }

}
