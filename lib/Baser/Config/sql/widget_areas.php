<?php 
/* SVN FILE: $Id$ */
/* WidgetAreas schema generated on: 2010-11-04 18:11:11 : 1288863011*/
class WidgetAreasSchema extends CakeSchema {
	public $name = 'WidgetAreas';

	public $file = 'widget_areas.php';

	public $connection = 'baser';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $widget_areas = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'widgets' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
}
