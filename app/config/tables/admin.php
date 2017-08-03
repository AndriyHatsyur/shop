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
		    'login',
		        [
		            'type'    => Column::TYPE_VARCHAR,
		            'size'    => 10,
		            'notNull' => true,
		        ]
		),
		new Column(
		    'password',
		        [
		            'type'    => Column::TYPE_VARCHAR,
		            'size'    => 80,
		            'notNull' => true,
		        ]
		),
	];