<?php

class SimpleObject extends DataObject {

	private static $db = array(
		'FileName' => 'Varchar(255)'
	);

	private static $has_one = array(
		'File' => 'File'
	);

	// Ensures the file contents is stored in the index
	private static $casting = array(
		'FileContent' => 'Text'
	);

	// Mandatory function for DataObject classes that need to be indexed
	public function Link($action = 'show') {
		return Controller::join_links('my-controller', $action, $this->ID);
	}

	// Mandatory function for DataObject classes that need to be indexed
	public function getShowInSearch() {
		return 1;
	}

	// Manually extract the contents of the file specified by FileName
	public function getFileContent() {
		$extractor = FileTextExtractor::for_file($this->FileName);
		return $extractor ? $extractor->getContent($this->FileName) : null;
	}

}
