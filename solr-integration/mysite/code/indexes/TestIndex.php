<?php

class TestIndex extends SolrIndex {

    function init() {
        $this->addClass('SiteTree');
        $this->addFulltextField('Title');
        $this->addFulltextField('Content');
    }

}