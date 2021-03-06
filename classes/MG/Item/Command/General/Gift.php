<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Item command class
 *
 * Send the item to another user
 *
 * @package    MG/Item
 * @category   Commands
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Item_Command_General_Gift extends Item_Command {

	public $default = TRUE;

	protected function _build($name)
	{
		return NULL;
	}

	public function validate($param)
	{
		return NULL;
	}

	public function perform($item, $amount, $data = NULL)
	{
		return NULL;
	}

	public function inventory()
	{
		return array('field' => array(
				'name' => 'username',
				'type' => 'text',
				'classes' => 'input-small search',
				'button' => 'Gift'
		));
	}
}
