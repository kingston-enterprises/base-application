<?php
/** created by : kingston-5 @ 17/01/23 **/

namespace kingstonenterprises\app\controllers;

use kingston\icarus\Application;
use kingston\icarus\Controller;
use kingston\icarus\Request;
use kingston\icarus\Response;

use kingstonenterprises\app\models\User;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
    	$this->setlayout('auth');
        return $this->render('dashboard/index');

    }
}
