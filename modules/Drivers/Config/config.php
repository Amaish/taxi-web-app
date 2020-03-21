<?php

return [
	'name' => 'Drivers',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'mdi mdi-car',
	],
	'th' => ['name','phone','email','city'],
	'columns'=>[
            ['data'=>'name','name'=>'name'],
            ['data'=>'phone','name'=>'phone'],
            ['data'=>'email','name'=>'email'],
            ['data'=>'city','name'=>'city'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Modules\Drivers\Forms\DriversForm',
	'permissions'=>[
		'drivers' => [
			'index',
			'create',
            'store',
            'show',
			'edit',
			'update',
			'destroy',
		],
	]
];
