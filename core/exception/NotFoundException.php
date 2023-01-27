<?php
/** created by : kingston-5 @ 17/01/23 **/

namespace kingstonenterprises\core\exception;


/**
 * Class NotFoundException
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}
