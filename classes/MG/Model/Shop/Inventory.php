<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Item Model Shop Inventory
 *
 * @package    MG/Item
 * @category   Model
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Model_Shop_Inventory extends ORM {


		protected $_table_columns = array(
		'id'          => NULL,
		'shop_id'       => NULL,
		'item_id'    => NULL,
		'price'    => NULL,
		'stock'      => NULL
		);

		protected $_belongs_to = array(
			'item' => array(
				'model' => 'Item',
				'foreign_key' => 'item_id'
			),
			'shop' => array(
				'model' => 'Shop',
				'foreign_key' => 'shop_id'
			)
		);

		public function rules()
		{
			return array(
				'price'    => array(
					array('not_empty'),
					array('digit')
				),
				'stock'    => array(
					array('not_empty'),
					array('digit')
				)
			);
		}

	} // End Shop Inventory Model
