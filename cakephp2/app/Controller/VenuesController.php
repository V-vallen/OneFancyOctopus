<?php
class VenuesController extends AppController{
	
	public function view(){

		$venues = $this->Venue->find('all');
}
}
 ?>