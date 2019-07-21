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

use Joomla\CMS\Table\Table;

defined('_JEXEC') or die;

/**
 * XTLumen table.
 *
 * @since       1.0
 */
class TableXTLumen extends Table
{
    /**
     * Constructor.
     *
     * @param JDatabaseDriver $db database driver object
     *
     * @since   1.0
     */
    public function __construct(JDatabaseDriver $db)
    {
        parent::__construct('#__xtlumen_items', 'item_id', $db);
    }
}
