<?php
/** created by : kingston-5 @ 7/01/23 **/ 

namespace kingstonenterprises\app\controllers;

use kingston\icarus\Controller;


/** SiteController class
* controls the sites functions that do not require special 
* access or permissions
*/
class SiteController extends Controller
{

    public function home()
    {
        return $this->render('home', [
        	"title" => 'Kingston-Enterprises'
        ]);
    }

}
