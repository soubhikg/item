<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Item command class
 *
 * Move an item to their shop
 *
 * @package    MG/Item
 * @category   Commands  
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Item_Command_Move_Shop extends Item_Command_Move {

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
		if ($item->item->transferable == FALSE)
		{
			return FALSE;
		}
		$name = $item->item->name($amount);

		if ( ! $item->move('shop', $amount))
		{
			return FALSE;
		}

		return 'You have successfully moved '.$name.' to your shop.';
	}

}
