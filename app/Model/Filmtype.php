<?php


class Filmtype extends AppModel {

	public $belongsTo = [
		'film' => [
			'className' => 'film',
			'foreignKey' => 'filmType'
		]
	];
}
?>
