<?php

$menu = array (
	'Dashboard' => array('page' => 'index', 'name' => 'Pulpit'),
	'Users' => array('page' => 'users', 'name' => 'Użytkownicy',
		'actions' => array (
			0 => array ('action' => 'index', 'title' => 'Lista użytkowników'),
			1 => array ('action' => 'add', 'title' => 'Dodaj użytkownika')
		)
	)
);