<?php

return [
	'name' => 'Riders',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'mdi mdi-account-multiple',
	],
	'th' => [
	    'name',
        'phone',
        'email'
    ],
	'columns'=>[
            ['data'=>'name','name'=>'name'],
            ['data'=>'phone','name'=>'phone'],
            ['data'=>'email','name'=>'email'],
            ['data'=>'action','name'=>'action'],
     ],
	'permissions'=>[
		'riders' => [
			'index',
			'show',
			'update'
		],
	]
];
