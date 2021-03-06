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
            'title',
            [
                'type'          => Column::TYPE_VARCHAR,
                'size'          => 200,
                'notNull'       => true,
            ]
        ),

        new Column(
            'price',
            [
                'type'         => Column::TYPE_DECIMAL,
                'size'         => 6,
                'scale'        => 2,
                'notNull'      => true,
            ]
        ),

        new Column(
            'link',
            [
                'type'         => Column::TYPE_VARCHAR,
                'size'         => 200,
                'notNull'      => true,
            ]
        ),
        new Column(
            'image',
            [
                'type'         => Column::TYPE_VARCHAR,
                'size'         => 200,
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
            'order_id',
            [
                'type'          => Column::TYPE_INTEGER,
                'size'          => 10,
                'notNull'       => true,
            ]
        ),
    ];