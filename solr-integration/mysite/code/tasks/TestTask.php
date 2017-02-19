<?php

class TestTask extends BuildTask {

    public function run($request) {
        $page = new Page(array(
            'Content' => 'Document 1.'));
        $page->write();

        $page = new SiteTree(array(
            'Content' => 'Document 2.'));
        $page->write();

        $query = new SearchQuery();
        $query->search('My house is on fire');

        $results = singleton('TestIndex')->search($query);
        print_r($results);
    }

}