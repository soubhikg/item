<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Item command class
 *
 * Increase a pet happiness level
 *
 * @package    MG/Item
 * @category   Commands  
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Item_Command_Pet_Play extends Item_Command_Pet {

	protected function _build($name)
	{
		return array(
			'title' => 'Pet mood',
			'fields' => array(
				array(
					'input' => array(
						'name' => $name, 'class' => 'input-mini'
					)
				)
			)
		);
	}

	public function validate($param)
	{
		return (Valid::digit($param) AND $param > 0);
	}

	public function perform($item, $param, $pet = NULL)
	{
		if ($pet->happiness == 100)
			return FALSE;
		else
		{
			$level = $pet->happiness + $param;

			if ($level > 100)
			{
				$pet->happiness = 100;
			}
			else
			{
				$pet->happiness = $level;
			}

			$pet->save();

			return $pet->name.' played with '.$item->item->name;
		}
	}
}
