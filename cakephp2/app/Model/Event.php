<?php class Event extends AppModel{
	public $hasAndBelongsToMany = 'User';
	public $belongsTo = 'Venue';
}
?>