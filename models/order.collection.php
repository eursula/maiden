<?php

require_once '../libraries/config.lib.php';

class Order_Collection{

	public $items = array();
	private $db;

	public function __construct($id = false){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
		);

		$this->db
			->select('order_date, delivery_date, order_status, SUM(quantity) quantity, SUM(price) total')
			->from('tb_order, tb_orderline, tb_products')
			->join('tb_order.id = tb_orderline.order_id')
			->join('tb_products.id = tb_orderline.product_id')
			->group_by('tb_order.id');



		if($id){
			$this->db->where('customer_id', $id);
		}
			
		$this->items = $this->db->get();

	}
}

