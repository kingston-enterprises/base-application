<?php

/** 
 * controls the sites functions that do not require special access or permissions
 *
 * @category controllers
 * @author kingston-5 <qhawe@kingston-enterprises.net>
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace kingstonenterprises\app\controllers;

use kingston\icarus\Controller;

/**
 * controls the sites functions that do not require special 
 * access or permissions
 * 
 * @extends \kingston\icarus\Controller
 */
class SiteController extends Controller
{

    /**
     * render Home view
     *
     * @return string
     */
    public function home()
    {
        return $this->render('home', [
            "title" => 'Kingston-Enterprises'
        ]);
    }
}
