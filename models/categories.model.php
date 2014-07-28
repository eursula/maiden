<?php

require_once '../libraries/config.lib.php';

class Category{

	# Properties -----------------------------------

	public $id 		= 0;
	public $name 	= '';
	public $deleted = 0;
	public $table   = 'tb_category';
	private $db 	= null;

	# Magic methods --------------------------------

	function __construct($id = 0){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
		);

		if($id){
			$result = $this->db
				->select('id, name, deleted')
				->from($this->table)
				->where('id', $id)
				->get_one();

			$this->id 		= $result['id'];
			$this->name 	= $result['name'];
			$this->deleted 	= $result['deleted'];

		}
	}

	# Normal methods --------------------------------

	public function save(){
		# If this id is 0, then no page has been already loaded
		if($this->id == 0 && $this->name != ''){
			$this->db
				->set(array(
					'name'		=> $this->name,
					'deleted'	=> $this->deleted
				))
				->insert($this->table);
		}else{
			$this->db
			->set(array(
				'name'	  => $this->name,
				'deleted' => $this->deleted
			))
			->where('id', $this->id)
			->update($this->table);
		}
	}

	
	public function delete(){
		$this->deleted = 1;
		$this->save();
	}





}