<?php 
class ImgUpsSchema extends CakeSchema {

	public $file = 'img_ups.php';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $img_ups = array(
		'image_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'image_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'image_type' => array('type' => 'binary', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'image_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB')
	);

}
