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
            'surname',
            [
                'type'          => Column::TYPE_VARCHAR,
                'size'          => 50,
                'notNull'       => true,
            ]
        ),

        new Column(
            'email',
            [
                'type'          => Column::TYPE_VARCHAR,
                'size'          => 50,
                'notNull'       => true,
            ]
        ),
        new Column(
            'region',
            [
                'type'          => Column::TYPE_VARCHAR,
                'size'          => 50,
                'notNull'       => true,
            ]
        ),
        new Column(
            'area',
            [
                'type'          => Column::TYPE_VARCHAR,
                'size'          => 50,
                'notNull'       => true,
            ]
        ),
        new Column(
            'city',
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
                'size'          => 11,
                'notNull'       => true,
            ]
        ),
        new Column(
            'post',
            [
                'type'          => Column::TYPE_VARCHAR,
                'size'          => 50,
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
