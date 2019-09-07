<?php

/*
 * @package     XT Laravel Lumen for Joomla
 *
 * @author      Extly, CB. <team@extly.com>
 * @copyright   Copyright (c)2007-2019 Extly, CB. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html  GNU/GPLv2
 *
 * @see         https://www.extly.com
 */

use Joomla\CMS\Language\Text;

defined('_JEXEC') or die;

/**
 * XTLumen helper.
 *
 * @since       1.0
 */
class XTLumenHelper
{
    /**
     * Render submenu.
     *
     * @param string $vName the name of the current view
     *
     * @since   1.0
     */
    public function addSubmenu($vName)
    {
        JHtmlSidebar::addEntry(Text::_('COM_XTLUMEN'), 'index.php?option=com_xtlumen&view=app', 'xtlumen' === $vName);
    }
}
