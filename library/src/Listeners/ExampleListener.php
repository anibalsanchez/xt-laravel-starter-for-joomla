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

namespace App\Listeners;

use App\Events\ExampleEvent;

class ExampleListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param ExampleEvent $event
     */
    public function handle(ExampleEvent $event)
    {
    }
}
