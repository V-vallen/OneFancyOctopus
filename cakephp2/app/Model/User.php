<?php 
App::uses('AppModel','Model');
class User extends AppModel{

	public $hasAndBelongsToMany = 'Event';
}
?>