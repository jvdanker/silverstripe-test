<?php

class StaffMember extends DataObject {
	private static $db = array(
		'Name' => 'Varchar(255)',
		'PhoneNumber' => 'Varchar(50)'
	);

	public function Link($action = 'show') {
		return Controller::join_links('my-controller', $action, $this->ID);
	}

	public function getShowInSearch() {
		return 1;
	}
}