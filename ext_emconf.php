<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TYPO3 News Extender',
	'description' => 'Extended news TER extension.',
	'category' => 'plugin',
    'author' => 'Haithem Daoud',
    'author_email' => 'haithemdaoud.se@gmail.com',
    'state' => 'excludeFromUpdates',
	'uploadfolder' => '1',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'modify_tables' => 'tx_news_domain_model_news',
	'version' => '1.0.0',
	'constraints' => [
        'depends' => [
            'typo3' => '11.5.0 - 11.5.99',
            'news' => '9.0.0 - 10.0.3'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'TYPO3\\T3Newsextender\\' => 'Classes'
        ]
    ],
);