<?php

class GalleryPage extends Page {

	private static $has_one = array(
		'SingleImage' => 'File'
	);

	function getCMSFields() {

		$fields = parent::getCMSFields();

		$fields->addFieldToTab(
			'Root.Upload',
			$uploadField = new UploadField(
				$name = 'SingleImage',
				$title = 'Upload a single image'
			)
		);

		return $fields;
	}
}

class GalleryPageController extends Page_Controller {

}