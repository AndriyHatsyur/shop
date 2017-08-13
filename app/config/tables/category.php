<?php
use \Phalcon\Db\Column as Column;
return 
	[
		new Column(
		    'id',
		        [
		            'type'          => Column::TYPE_INTEGER,
		            'size'          => 4,
		            'notNull'       => true,
		            'autoIncrement' => true,
		            'primary'       => true,
		        ]
		),
		new Column(
		    'name',
		        [
		            'type'          => Column::TYPE_VARCHAR,
		            'size'          => 50,
		            'notNull'       => true,
		        ]
		),
	];