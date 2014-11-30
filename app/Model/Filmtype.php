<?php


class Filmtype extends AppModel {

	public $belongsTo = [
		'film' => [
			'className' => 'films',
			'foreignKey' => 'filmType'
		]
	];
}
?>
