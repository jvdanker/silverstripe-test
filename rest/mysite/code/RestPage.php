<?php
class Rest extends Page {

	private static $db = array(
	);

	private static $has_one = array(
	);

}
class Rest_Controller extends Page_Controller {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	    'hello'
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}

	public function hello(SS_HTTPRequest $request) {
        // Encode specific fields
        $data = array();
        $data['ID'] = $this->dataRecord->ID;
        $data['Title'] = $this->dataRecord->Title;
        $data['Content'] = $this->dataRecord->Content;

        $this->response->addHeader('Content-Type', 'application/json');
        return json_encode($data);
	}

}
