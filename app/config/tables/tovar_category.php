<?php
use \Phalcon\Db\Column as Column;
return 
	[
		new Column(
		    'id',
		        [
		            'type'          => Column::TYPE_INTEGER,
		            'size'          => 10,
		            'notNull'       => true,
		            'autoIncrement' => true,
		            'primary'       => true,
		        ]
		),
		new Column(
		    'tovar_id',
		        [
		            'type'          => Column::TYPE_INTEGER,
		            'size'          => 10,
		            'notNull'       => true,
		        ]
		),
		new Column(
		    'category_id',
		        [
		            'type'          => Column::TYPE_INTEGER,
		            'size'          => 4,
		            'notNull'       => true,
		        ]
		),
	];	