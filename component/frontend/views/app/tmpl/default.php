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

use App\Facades\JApplication;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

defined('_JEXEC') or die;

$aRequest = SymfonyRequest::create('/', 'GET', [], [], [], [], null);
JApplication::run($aRequest);
