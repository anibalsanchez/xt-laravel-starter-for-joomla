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

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView;

defined('_JEXEC') or die;

/**
 * XTLumen view.
 *
 * @since    1.0
 */
class XTLumenViewApp extends HtmlView
{
    /**
     * XTLumen helper.
     *
     * @var XTLumenHelper
     *
     * @since  1.0
     */
    protected $helper;

    /**
     * The sidebar to show.
     *
     * @var string
     *
     * @since  1.0
     */
    protected $sidebar = '';

    /**
     * Execute and display a template script.
     *
     * @param string $tpl the name of the template file to parse; automatically searches through the template paths
     *
     * @return mixed a string if successful, otherwise a JError object
     *
     * @see     fetch()
     * @since   1.0
     */
    public function display($tpl = null)
    {
        // Show the toolbar
        $this->toolbar();

        // Show the sidebar
        $this->helper = new XTLumenHelper();
        $this->helper->addSubmenu('xtlumen');
        $this->sidebar = JHtmlSidebar::render();

        // Display it all
        return parent::display($tpl);
    }

    /**
     * Displays a toolbar for a specific page.
     *
     *
     * @since   1.0
     */
    private function toolbar()
    {
        JToolBarHelper::title(Text::_('COM_XTLUMEN'), '');

        // Options button.
        if (Factory::getUser()->authorise('core.admin', 'com_xtlumen')) {
            JToolBarHelper::preferences('com_xtlumen');
        }
    }
}
