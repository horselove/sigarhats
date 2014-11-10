<?php


class Filmtype extends AppModel {

	public $belongsTo = [
		'film' => [
			'className' => 'flim',
			'foreignKey' => 'filmType',
			'type' => 'inner'
		]
	];
}
?>
