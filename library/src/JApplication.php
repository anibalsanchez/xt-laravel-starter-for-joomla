<?php

/*
 * @package     XT Laravel Lumen for Joomla
 *
 * @author      Extly, CB. <team@extly.com>
 * @copyright   Copyright (c)2012-2020 Extly, CB. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html  GNU/GPLv2
 *
 * @see         https://www.extly.com
 */

namespace App;

use Laravel\Lumen\Application;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class JApplication extends Application
{
    /**
     * Run the application and send the response.
     *
     * @param  SymfonyRequest|null  $request
     * @return void
     */
    public function run($request = null)
    {
        $response = $this->dispatch($request);

        if ($response instanceof SymfonyResponse) {
            // Do not send. Joomla manages the HTTP output.
            // $response->send();

            echo $response->getContent();
        } else {
            echo (string) $response;
        }

        if (count($this->middleware) > 0) {
            $this->callTerminableMiddleware($response);
        }
    }
}
