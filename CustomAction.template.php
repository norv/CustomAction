<?php

/**
 * @package   CustomAction
 * @copyright ElkArte contributors
 * @license   BSD http://opensource.org/licenses/BSD-3-Clause
 *
 * @version 4.0
 *
 * This template file contains the sub-template view_custom_action.
 */

function template_view_custom_action()
{
	global $context;
	
	switch ($context['action']['action_type'])
	{
	// HTML.
	case 0:
		echo $context['action']['body'];
		break;
	// BBC.
	case 1:
		echo $context['action']['body'];
		break;
	// PHP.
	case 2:
		eval($context['action']['body']);
		break;
	}
}
