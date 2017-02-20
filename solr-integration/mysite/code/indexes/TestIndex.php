<?php

class TestIndex extends SolrIndex {

    function init() {
    	// SimpleObject contains a field with a path to a file
        $this->addClass('SimpleObject');

        // Index all File objects
		$this->addClass('File');

        //$this->addAllFulltextFields();

		// FileTextExtractable adds a field FileContent to each File object
		$this->addFulltextField('FileContent');

		// Has to be in here according to the documentation
		$this->addFilterField('ShowInSearch');
    }

}