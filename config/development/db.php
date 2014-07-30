<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=fuel_dev',
			'username'   => 'root',
			'password'   => 'root',
		),
	),
    'redis' => array(
        'mystore' => array(
            'hostname' => '127.0.0.1',
            'port' => '6385',
            'timeout' => null,
            'database' => 0,
            'password' => null,
        ),
    ),
);
