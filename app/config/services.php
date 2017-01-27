<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => array(
		'domain' => 'janess-traiteur.fr',
		'secret' => 'key-798de4f4da872fc0e7e7a01c41c55de0',
	),

	'mandrill' => array(
		'secret' => 'umbqzc1gZA2YaOi_Hb7N5g',
	),

	'stripe' => array(
		'model'  => 'User',
		'secret' => '',
	),

);
