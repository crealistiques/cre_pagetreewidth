<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Crealistiques Page Tree Width',
	'description' => 'This extension allows to set the width of the page tree section by a field in the user settings.',
	'category' => 'backend',
	'author' => 'Steffen Wargalla',
	'author_email' => 'sw@crealistiques.de',
    'author_company' => 'Crealistiques',
    'state' => 'beta',
	'clearCacheOnLoad' => 1,
	'version' => '8.7.6',
	'constraints' => array(
		'depends' => array(
			'typo3' => '8.7.*',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
    'autoload' => array(
        'psr-4' => array(
            'Crealistiques\\CrePagetreewidth\\' => 'Classes'
        ),
    ),
);

