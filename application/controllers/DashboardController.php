<?php
/** created by : kingston-5 @ 17/01/23 **/

namespace kingstonenterprises\application\controllers;

use kingstonenterprises\core\Application;
use kingstonenterprises\core\Controller;
use kingstonenterprises\core\Request;
use kingstonenterprises\core\Response;

use kingstonenterprises\application\models\User;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
    	$this->setlayout('auth');
        return $this->render('dashboard/index');

    }
}
