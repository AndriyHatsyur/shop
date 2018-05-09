<?php
use \Phalcon\Db\Column as Column;
return 
	[
		new Column(
		    'id',
		        [
		            'type'          => Column::TYPE_INTEGER,
		            'size'          => 2,
		            'notNull'       => true,
		            'autoIncrement' => true,
		            'primary'       => true,
		        ]
		),
		new Column(
		    'name',
		        [
		            'type'          => Column::TYPE_VARCHAR,
		            'size'          => 20,
		            'notNull'       => true,
		        ]
        ),
        new Column(
		    'email',
		        [
		            'type'          => Column::TYPE_VARCHAR,
		            'size'          => 40,
		            'notNull'       => true,
		        ]
		),
		new Column(
		    'password',
		        [
		            'type'          => Column::TYPE_VARCHAR,
		            'size'          => 80,
		            'notNull'       => true,
		        ]
		),
	];