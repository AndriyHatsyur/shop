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
		                'type'    => Column::TYPE_VARCHAR,
		                'size'    => 70,
		                'notNull' => true,
		            ]
		    ),
		    new Column(
		        'year',
		            [
		                'type'    => Column::TYPE_INTEGER,
		                'size'    => 11,
		                'notNull' => true,
		            ]
		    ),
		];