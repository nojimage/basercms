<?php 
/* SVN FILE: $Id$ */
/* FeedConfigs schema generated on: 2010-11-04 18:11:12 : 1288863012*/
class FeedConfigsSchema extends CakeSchema {
	public $name = 'FeedConfigs';

	public $file = 'feed_configs.php';

	public $connection = 'plugin';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $feed_configs = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 8, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'feed_title_index' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'category_index' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'template' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'display_number' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 3),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
}
?>