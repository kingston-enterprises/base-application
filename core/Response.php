<?php
/** created by : kingston-5 @ 6/01/23 **/

namespace kingstonenterprises\core;

/* controlling class for all system responses */
class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}
