<?php
/**
 * @author     Extly, CB <team@extly.com>
 * @copyright  Copyright (c)2007-2018 Extly, CB All rights reserved.
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 *
 * @see       https://www.extly.com
 */

use App\Facades\JApplication;

defined('_JEXEC') or die;

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
$aRequest = SymfonyRequest::create('/', 'GET', [], [], [], [], null);

?>
<div id="j-sidebar-container" class="span2">
	<?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">
<?php
    JApplication::run($aRequest);
?>
</div>
