<?php
use Orm\Model;

class Model_Crudtest extends Model
{
	protected static $_properties = array(
		'id',
		'title',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		
		Config::load('uploads');
		$photo_config = Config::get('photo1');
		
		$val->add_field('title', 'Title', 'required');

		$val->add('photo', 'Photo')
			->add_rule('upload', $photo_config )
		;
		
		return $val;
	}

}
