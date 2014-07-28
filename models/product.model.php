<?php

require_once '../libraries/config.lib.php';

class Product{

	# Properties -------------------------------------------------------------------------------------

	public $id         	= 0;
	public $name       	= '';
	public $description = '';
	public $category_id = '';
	public $price 		= '';
	public $image       = '';
	private $db        	= null;

	# Magic Methods -------------------------------------------------------------------------------------

	function __construct($id = 0){
		$this->db = new Database(
				Config::$hostname,
				Config::$username,
				Config::$password,
				Config::$database
		);

		if($id){
			$result = $this->db
				->select('id, name, description, category_id, price, image, deleted')
				->from('tb_products')
				->where('id', $id)
				->get_one();

				$this->id   		= $result['id'];
				$this->name   		= $result['name'];
				$this->description  = $result['description'];
				$this->category_id 	= $result['category_id'];
				$this->price 		= $result['price'];
				$this->image 		= $result['image'];
				$this->deleted    	= $result['deleted'];
		}
	}

	# Normal Methods -------------------------------------------------------------------------------------

	public function save(){
			# If this ID is 0, then no page has been already loaded
			if($this->id == 0 && $this->name != ''){
				$this->db
					->set(array(
						'name'       	=> $this->name,
						'description'   => $this->description,
						'category_id' 	=> $this->category_id,
						'price' 		=> $this->price,
						'image' 		=> $this->image,
						'deleted'    	=> $this->deleted
					))
					->insert('tb_products');

			}else{
				$this->db
				     ->set(array(
				     	'name'       	=> $this->name,
						'description'   => $this->description,
						'category_id' 	=> $this->category_id,
						'price' 		=> $this->price,
						'image' 		=> $this->image,
						'deleted'    	=> $this->deleted
				   	))
				     ->where('id', $this->id)
				     ->update('tb_products');
			}

		}

		public function delete(){
			$this->deleted = 1;
			$this->save();
		}
}

?>
