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
            'sum',
            [
                'type'         => Column::TYPE_DECIMAL,
                'size'         => 6,
                'scale'        => 2,
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

        new Column(
            'user',
            [
                'type'          => Column::TYPE_INTEGER,
                'size'          => 10,
                'notNull'       => true,
            ]
        ),

        new Column(
            'status',
            [
                'type'          => Column::TYPE_VARCHAR,
                'size'          => 10,
                'notNull'       => true,
            ]
        ),


    ];