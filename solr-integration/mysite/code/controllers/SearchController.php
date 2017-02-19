<?php

class SearchController extends Page_Controller {

	static $allowed_actions = array (
		'index',
		'search'
	);

	public function index() {
		return array();
	}

	public function search(SS_HTTPRequest $request) {
		$query = new SearchQuery();
		$query->search($request->getVar('q'));

		return array(
			'Query' => $request->getVar('q'),
			'SearchResult' => singleton('TestIndex')->search($query)
		);
	}

}