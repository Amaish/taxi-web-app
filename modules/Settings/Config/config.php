<?php

return [
	'name' => 'Settings',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-file',
	],
	'th' => ['name'],
	'form'=>'Modules\Settings\Forms\SettingsForm',

	'permissions'=>[
		'settings' => [
			'index',
			'store',
		],
	]
];
