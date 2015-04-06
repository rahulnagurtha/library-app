<?php

return array(
    'multi' => array(
        'user' => array(
            'driver' => 'eloquent',
            'model' => 'User'
        ),
        'admin' => array(
            'driver' => 'eloquent',
            'model' => 'Admin'
        )
    ),

	'reminder' => array(

		'email' => 'emails.auth.reminder',

		'table' => 'password_reminders',

		'expire' => 60,

	),

);
