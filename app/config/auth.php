<?php

return array(
    'multi' => array(
        'user' => array(
            'driver' => 'eloquent',
            'table' => 'users'
        ),
        array(
            'driver' => 'database',
            'table' => 'admin'
        )
    ),

	'reminder' => array(

		'email' => 'emails.auth.reminder',

		'table' => 'password_reminders',

		'expire' => 60,

	),

);
