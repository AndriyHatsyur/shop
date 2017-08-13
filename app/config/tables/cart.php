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
		    'product_id',
		        [
		            'type'          => Column::TYPE_INTEGER,
		            'size'          => 10,
		            'notNull'       => true,
		        ]
		),
		new Column(
                'price',
                [
                    'type'         => Column::TYPE_DECIMAL,
                    'size'         => 16,
                    'notNull'      => true,
                ]
            ),
		new Column(
		    'count',
		        [
		            'type'          => Column::TYPE_INTEGER,
		            'size'          => 3,
		            'notNull'       => true,
		        ]
		),
		
	];