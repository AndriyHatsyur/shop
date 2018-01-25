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
		    'name',
		        [
		            'type'          => Column::TYPE_VARCHAR,
		            'size'          => 50,
		            'notNull'       => true,
		        ]
		),
		new Column(
		    'mobile',
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
		            'size'          => 30,
		            'notNull'       => true,
		        ]
		),

		new Column(
            'text',
            [
                'type'         => Column::TYPE_TEXT,
                'notNull'      => true,
            ]
		),
		
		new Column(
		    'status',
		        [
		            'type'          => Column::TYPE_VARCHAR,
		            'size'          => 3,
		            'notNull'       => true,
		        ]
		),
	];