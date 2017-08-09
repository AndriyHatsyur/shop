<?php
use \Phalcon\Db\Column as Column;
return 
	[
		new Column(
		    'id',
		        [
		            'type'          => Column::TYPE_INTEGER,
		            'size'          => 6,
		            'notNull'       => true,
		            'autoIncrement' => true,
		            'primary'       => true,
		        ]
		),
		new Column(
		    'user_id',
		        [
		            'type'          => Column::TYPE_INTEGER,
		            'size'          => 6,
		            'notNull'       => true,
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
		        'text',
		        [
		            'type'          => Column::TYPE_TEXT,
		            'size'          => 11,
		            'notNull'       => true,
		        ]
		    ),
	];