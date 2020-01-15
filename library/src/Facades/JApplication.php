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

namespace App\Facades;

use App\JApplication as JApplicationCore;
use Illuminate\Support\Facades\Facade;

class JApplication extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return JApplicationCore::class;
    }
}
