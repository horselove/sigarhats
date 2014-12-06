<?php


class Filmtype extends AppModel {

	public $hasOne = [
		'film' => [
			'className' => 'films',
			'foreignKey' => 'filmType'
		]
	];
}
?>
